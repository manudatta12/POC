<?php

namespace Thinkdigit\UserBundle\Security\User\Provider;

use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use \BaseFacebook;
use \FacebookApiException;
use Facebook;

class FacebookProvider implements UserProviderInterface
{
    /**
     * @var \Facebook
     */
    protected $facebook;
    protected $userManager;
    protected $validator;

    public function __construct(BaseFacebook $facebook, $userManager, $validator)
    {
        $this->facebook = $facebook;

        // Add this to not have the error "the ssl certificate is invalid."
        Facebook::$CURL_OPTS[CURLOPT_SSL_VERIFYPEER] = false;
        Facebook::$CURL_OPTS[CURLOPT_SSL_VERIFYHOST] = 2;
   
        $this->userManager = $userManager;
        $this->validator = $validator;
    }

    public function supportsClass($class)
    {
        return $this->userManager->supportsClass($class);
    }

    public function findUserByFbId($fbId)
    {
        return $this->userManager->findUserBy(array('facebookUid' => $fbId));
    }

    public function findUserByUsername($username)
    {
        return $this->userManager->findUserBy(array('username' => $username));
    }

    public function findUserByEmail($email)
    {
        return $this->userManager->findUserBy(array('email' => $email));
    }

    public function connectExistingAccount()
    {
        try {
            $facebookData = $this->facebook->api('/me');
        } catch (FacebookApiException $e) {
            $facebookData = null;
            return false;
        }




        $alreadyExistingAccount = $this->findUserByFbId($facebookData['id']);

        if (!empty($alreadyExistingAccount)) {
            return false;
        }

        if (!empty($facebookData)) {

            $currentUserObj = $this->container->get('security.context')->getToken()->getUser();

            $user = $this->findUserByUsername($currentUserObj->getUsername());

            if (empty($user)) {
                return false;
            }

            $user->setFacebookData($facebookData);

            if (count($this->validator->validate($user, 'Facebook'))) {
                // TODO: the user was found obviously, but doesnt match our expectations, do something smart
                throw new UsernameNotFoundException('The facebook user could not be stored');
            }
            $this->userManager->updateUser($user);

            return true;
        }

        return false;

    }

    public function loadUserByUsername($username)
    {
        $user = $this->findUserByFbId($username);

        try {
            $facebookData = $this->facebook->api('/me');
        } catch (FacebookApiException $e) {
            $facebookData = null;
        }

        if (!empty($facebookData)) {

        //     echo "<pre>";
        // print_r($facebookData);
        // echo "<pre>";
        // exit;

            if (null === $user) {
                $user = $this->findUserByEmail($facebookData['email']);
            }
            if (empty($user)) {
                $user = $this->userManager->createUser();
                $user->setEnabled(true);
                $user->setPassword('');
            }

            $id = $facebookData['id'];
            //$dob = $facebookData['birthday'];
            if($user->getUsername() == '' || $user->getUsername() == null)
            {
                $user->setUsername($id);
               // $user->setDateOfBirth(new \DateTime($dob));
            }

            $user->setFacebookData($facebookData);

            if (count($this->validator->validate($user, 'Facebook'))) {
                // TODO: the user was found obviously, but doesnt match our expectations, do something smart
                throw new UsernameNotFoundException('The facebook user could not be stored');
            }
            $this->userManager->updateUser($user);
        }

        if (empty($user)) {

            // TODO: the user was found obviously, but doesnt match our expectations, do something smart
            throw new UsernameNotFoundException('The facebook user could not be stored');

        }

        return $user;
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$this->supportsClass(get_class($user)) || !$user->getFacebookUid()) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }

        return $this->loadUserByUsername($user->getFacebookUid());
    }
}

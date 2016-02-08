<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace First\UserBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Controller managing the resetting of the password
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class ResettingController extends Controller
{
    /**
     * Request reset user password: show form
     */
    public function requestAction()
    {
        return $this->render('FirstUserBundle:Resetting:request.html.twig');
    }

    /**
     * Request reset user password: submit form and send email
     */
    public function sendEmailAction(Request $request)
    {
        $username = $request->request->get('username');

        /** @var $user UserInterface */
        $user = $this->get('fos_user.user_manager')->findUserByUsernameOrEmail($username);

        if (null === $user) {
            return $this->render('FirstUserBundle:Resetting:request.html.twig', array(
                'invalid_username' => $username
            ));
        }

       /* if ($user->isPasswordRequestNonExpired($this->container->getParameter('fos_user.resetting.token_ttl'))) {
            return $this->render('FirstUserBundle:Resetting:passwordAlreadyRequested.html.twig');
        }*/

        if (null === $user->getConfirmationToken()) {
            /** @var $tokenGenerator \FOS\UserBundle\Util\TokenGeneratorInterface */
            $tokenGenerator = $this->get('fos_user.util.token_generator');
            $user->setConfirmationToken($tokenGenerator->generateToken());
        }

        $this->get('fos_user.mailer')->sendResettingEmailMessage($user);
        $user->setPasswordRequestedAt(new \DateTime());
        $this->get('fos_user.user_manager')->updateUser($user);

        return new RedirectResponse($this->generateUrl('first_user_resetting_check_email',
            array('email' => $this->getObfuscatedEmail($user))
        ));
    }

    /**
     * Tell the user to check his email provider
     */
    public function checkEmailAction(Request $request)
    {
        $email = $request->query->get('email');

        if (empty($email)) {
            // the user does not come from the sendEmail action
            return new RedirectResponse($this->generateUrl('first_user_resetting_request'));
        }

        return $this->render('FirstUserBundle:Resetting:checkEmail.html.twig', array(
            'email' => $email,
        ));
    }

  /**
     * Reset user password
     */
    public function resetAction($token)
    {
        $user = $this->container->get('fos_user.user_manager')->findUserByConfirmationToken($token);

        if (null === $user) {
            throw new NotFoundHttpException(sprintf('The user with "confirmation token" does not exist for value "%s"', $token));
        }

        if (!$user->isPasswordRequestNonExpired($this->container->getParameter('fos_user.resetting.token_ttl'))) {
            return new RedirectResponse($this->container->get('router')->generate('fos_user_resetting_request'));
        }

        $form = $this->container->get('fos_user.resetting.form');
        $formHandler = $this->container->get('fos_user.resetting.form.handler');
        $process = $formHandler->process($user);

        if ($process) {
            $this->setFlash('fos_user_success', 'resetting.flash.success');
            $response = new RedirectResponse($this->getRedirectionUrl($user));
            $this->authenticateUser($user, $response);
            return $response;
        }

        return $this->container->get('templating')->renderResponse('FirstUserBundle:Resetting:reset.html.'.$this->getEngine(), array(
            'token' => $token,
            'form' => $form->createView(),
        ));
    }


    /**
     * Authenticate a user with Symfony Security
     *
     * @param \FOS\UserBundle\Model\UserInterface        $user
     * @param \Symfony\Component\HttpFoundation\Response $response
     */
    protected function authenticateUser(UserInterface $user,$response)
    {
        try {
            $this->container->get('fos_user.security.login_manager')->loginUser(
                $this->container->getParameter('fos_user.firewall_name'),
                $user,
                $response);
        } catch (AccountStatusException $ex) {
            // We simply do not authenticate users which do not pass the user
            // checker (not enabled, expired, etc.).
        }
    }

    /**
     * Generate the redirection url when the resetting is completed.
     *
     * @param \FOS\UserBundle\Model\UserInterface $user
     *
     * @return string
     */
    protected function getRedirectionUrl(UserInterface $user)
    {
        return $this->container->get('router')->generate('fos_user_profile_show');
    }

    /**
     * Get the truncated email displayed when requesting the resetting.
     *
     * The default implementation only keeps the part following @ in the address.
     *
     * @param \FOS\UserBundle\Model\UserInterface $user
     *
     * @return string
     */
    protected function getObfuscatedEmail(UserInterface $user)
    {
        $email = $user->getEmail();
        if (false !== $pos = strpos($email, '@')) {
            $email = '...' . substr($email, $pos);
        }

        return $email;
    }

    /**
     * @param string $action
     * @param string $value
     */
    protected function setFlash($action, $value)
    {
        $this->container->get('session')->getFlashBag()->set($action, $value);
    }

    protected function getEngine()
    {
        return $this->container->getParameter('fos_user.template.engine');
    }
}

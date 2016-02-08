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
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use FOS\UserBundle\Model\UserInterface;


use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\User;
use First\UserBundle\Form\Type\RegistrationFormType;

use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

/**
 * Controller managing the registration
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class RegistrationController extends Controller
{
    	/**
	 * @Route("/register/", name = "user_register")
	 * @Template()
	 */ 
	public function registerAction(Request $request)
	{


        $securityContext = $this->container->get('security.context');
	if( $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED') ){
	// authenticated REMEMBERED, FULLY will imply REMEMBERED (NON anonymous)
	return $this->redirect($this->generateUrl('fos_user_profile_show'));
	}

        $form = $this->container->get('fos_user.registration.form');
        $formHandler = $this->container->get('fos_user.registration.form.handler');
// echo '<pre>';
   //\Doctrine\Common\Util\Debug::dump($rr);
        $confirmationEnabled = $this->container->getParameter('fos_user.registration.confirmation.enabled');
        $process = $formHandler->process($confirmationEnabled);
         if ($process) {
            $user = $form->getData();
            /*****************************************************
             * Add new functionality (e.g. log the registration) *
             *****************************************************/
            $this->container->get('logger')->info(
                sprintf('New user registration: %s', $user)
            );

            if ($confirmationEnabled) {
                $this->container->get('session')->set('fos_user_send_confirmation_email/email', $user->getEmail());
                //$route = 'fos_user_registration_confirmed';
                $route = 'fos_user_registration_check_email';
            } else {
                $this->authenticateUser($user);
                $route = 'fos_user_registration_confirmed';
            }

           // $this->setFlash('fos_user_success', 'registration.flash.user_created');
            $url = $this->container->get('router')->generate($route);
            return new RedirectResponse($url);
           }
		return array(
			// Last username entered by the user
	            'form' => $form->createView(),
	    );

	}

      /**
	 * @Route("/login", name="user_index_login")
	 * @Template()
	 */

  public function loginAction(Request $request)
    {
	$securityContext = $this->container->get('security.context');
	if( $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED') ){
	// authenticated REMEMBERED, FULLY will imply REMEMBERED (NON anonymous)
	return $this->redirect($this->generateUrl('fos_user_profile_show'));
	}

        /** @var $session \Symfony\Component\HttpFoundation\Session\Session */
        $session = $request->getSession();

        if (class_exists('\Symfony\Component\Security\Core\Security')) {
            $authErrorKey = Security::AUTHENTICATION_ERROR;
            $lastUsernameKey = Security::LAST_USERNAME;
        } else {
            // BC for SF < 2.6
            $authErrorKey = SecurityContextInterface::AUTHENTICATION_ERROR;
            $lastUsernameKey = SecurityContextInterface::LAST_USERNAME;
        }

        // get the error if any (works with forward and redirect -- see below)
        if ($request->attributes->has($authErrorKey)) {
            $error = $request->attributes->get($authErrorKey);
        } elseif (null !== $session && $session->has($authErrorKey)) {
            $error = $session->get($authErrorKey);
            $session->remove($authErrorKey);
        } else {
            $error = null;
        }

        if (!$error instanceof AuthenticationException) {
            $error = null; // The value does not come from the security component.
        }

        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get($lastUsernameKey);

        if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
        } else {
            // BC for SF < 2.4
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }
  
          if(strlen($error)>0)
          {
           $error = "Invalid Email Id OR Password";
          }

             return array(
            'last_username' => $lastUsername,
            'error'         => $error,
            'csrf_token' => $csrfToken,
        );
    }









    /**
     * Tell the user to check his email provider
     */
    public function checkEmailAction()
    {
        $email = $this->get('session')->get('fos_user_send_confirmation_email/email');
        $this->get('session')->remove('fos_user_send_confirmation_email/email');
        $user = $this->get('fos_user.user_manager')->findUserByEmail($email);

        if (null === $user) {
            throw new NotFoundHttpException(sprintf('The user with email "%s" does not exist', $email));
        }

        return $this->render('FirstUserBundle:Registration:checkEmail.html.twig', array(
            'user' => $user,
        ));
    }

    /**
     * Receive the confirmation token from user email provider, login the user
     */
    public function confirmAction(Request $request, $token)
    {
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');

        $user = $userManager->findUserByConfirmationToken($token);

        if (null === $user) {
            throw new NotFoundHttpException(sprintf('The user with confirmation token "%s" does not exist', $token));
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $user->setConfirmationToken(null);
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRM, $event);

        $userManager->updateUser($user);

        if (null === $response = $event->getResponse()) {
            $url = $this->generateUrl('first_user_registration_confirmed');
            $response = new RedirectResponse($url);
        }

        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRMED, new FilterUserResponseEvent($user, $request, $response));

        return $response;
    }

    /**
     * Tell the user his account is now confirmed
     */
    public function confirmedAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->render('FirstUserBundle:Registration:confirmed.html.twig', array(
            'user' => $user,
        ));
    }
}

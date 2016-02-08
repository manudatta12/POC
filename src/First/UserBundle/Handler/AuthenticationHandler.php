<?php

namespace First\UserBundle\Handler;

use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;


class AuthenticationHandler implements AuthenticationSuccessHandlerInterface, AuthenticationFailureHandlerInterface, LogoutSuccessHandlerInterface
{

    protected $router;
    protected $security;
    protected $userManager;
    protected $service_container;

    public function __construct(RouterInterface $router, SecurityContext $security, $userManager, $service_container)
    {
        $this->router = $router;
        $this->security = $security;
        $this->userManager = $userManager;
        $this->service_container = $service_container;

    }
    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {
        if ($request->isXmlHttpRequest()) {

                 
            //$user = $this->container->get('security.context')->getToken()->getUser();
            $user       = $token->getUser();
            $id         = $user->getId();

            
            $username   = $user->getUserName();
            $email      = $user->getEmail();
            $facebookId = $user->getFacebookId();
            $twitterId  = $user->getTwitterId();
            $googleId   = $user->getGoogleId();
            $mode='';
            if($facebookId){
                $mode='facebook';
            }elseif($twitterId){
                $mode='twitter';
            }elseif($googleId){
                $mode='google';
            }else{
                $mode ='general';
            }
      
         //$username=str_replace(' ','',$username).$id;
         $username=str_replace(' ','',$username);
         //$password=$username.'-td-'.$mode.'-'.$id; 
         $uniqueId = base_convert($id."A".$id, 11, 10); 
         $password= $uniqueId;       

            $result = array('success' => true,'username'=>$username,'password'=>$password,'email'=>$email);
            $response = new Response(json_encode($result));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
            //return $this->redirect($this->generateUrl('_td_forum_login', array('username' => 'aashutosh.gupta00','password'=>'Ind1a999','mode'=>'forum')));
        }
        else {
            // Create a flash message with the authentication error message
            #$session = $ServiceContainer->get('session');
			#$session->setFlash('notice', 'Message');
            $session = $ServiceContainer->get('session');
            $request->getSession()->getFlashBag()->set('error', $exception->getMessage());
            $url = $this->router->generate('fos_user_security_login');

            return new RedirectResponse($url);
        }

        //return new RedirectResponse($this->router->generate('anag_new')); 
        
        return $this->redirect($this->generateUrl('_td_forum_login', array('username' => 'aashutosh.gupta00','password'=>'Ind1a999','mode'=>'forum')));
    } 
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception) {
			$result = array(
				'success' => false, 
				'function' => 'onAuthenticationFailure', 
				'error' => true, 
				//'message' => $this->translator->trans($exception->getMessage(), array(), 'FOSUserBundle')
			);
			$response = new Response(json_encode($result));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
	}

      public function onLogoutSuccess(Request $request)
        {
               echo "Shree Shree 1008 Ashutosh Maharaj";die;
       $referer = $request->headers->get('referer');
       $request->getSession()->setFlash('success', 'Wylogowano');


       return new RedirectResponse($referer);
      }
}


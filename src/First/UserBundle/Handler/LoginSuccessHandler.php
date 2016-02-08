// <?php

// namespace Dpl\UserBundle\Handler;

// use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
// use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
// use Symfony\Component\Security\Core\SecurityContext;
// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\RedirectResponse;
// use Symfony\Component\Routing\Router;
// use Symfony\Component\DependencyInjection\ContainerInterface as Container;
// use Doctrine\ORM\EntityManager;

// /**
//  * login Authentication Service
//  * @author Siddharth Singh <siddharth.find@gmail.com>
//  *
//  */
// class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
// {
//     protected $container;
//     protected $router;
//     protected $security;
//     protected $doctrine;

//     public function __construct(Router $router, SecurityContext $security, Container $container, $doctrine)
//     {
//         $this->router = $router;
//         $this->security = $security;
//         $this->container = $container;
//         $this->doctrine = $doctrine;
//     }

//     public function onAuthenticationSuccess(Request $request, TokenInterface $token)
//     {
//         if ($this->security->isGranted('IS_AUTHENTICATED_ANONYMOUSLY'))
//         {
//             $user = $this->container->get('security.context')->getToken()->getUser();
//             $userId = $this->container->get('security.context')->getToken()->getUser()->getId();
//             $roles = $this->container->get('security.context')->getToken()->getUser()->getRoles();
//               if($roles[0] == 'ROLE_USER'){
//                                 $em = $this->doctrine->getEntityManager();
//                                 $captionInfo = $this->doctrine->getRepository('DplCodeBundle:Members')->findOneBy(array('fosUser'=> $userId));
//                                 //print_r($captionInfo);die;
//                                 $role = $captionInfo->getRole();
//                                 if($role > '0'){
//                                         $response = new RedirectResponse($this->router->generate('task_center'));                      
//                                 }else{
//                                         $name=$captionInfo->getName();
//                                         $response = new RedirectResponse($this->router->generate('team_management'));
//                                      }
//         }elseif($roles[0] == 'ROLE_ADMIN'){
//                                 $response = new RedirectResponse($this->router->generate('sonata_admin_dashboard'));
//                         }
//                  }
//                 return $response;
//         }

// }
//                                          

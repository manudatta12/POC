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

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use First\UserBundle\Form\Type\RegistrationFormType;

/**
 * Controller managing the user profile
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ProfileController extends Controller
{
    /**
     * Show the user
     */
    public function showAction()
    {
       	$productService = $this->get('first_emagazine.productmanager');
        $user = $this->getUser();
        $getOrderDetail = array();
       if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

	if($user){
	$userId = $user->getId();
	$getOrderDetail = $productService->getOrderDetailByUser($userId);
	$getTotalLoginedDeviceByUser = $productService->getTotalLoginedDeviceByUser($userId);
 //echo '<pre>';
       //  \Doctrine\Common\Util\Debug::dump($getOrderDetail);die;
	}

        return $this->render('FirstUserBundle:Profile:show.html.twig', array(
            'user' => $user,'getOrderDetail'=>$getOrderDetail,'userDevide'=>$getTotalLoginedDeviceByUser
        ));
    }

    /**
     * Edit the user
     */
    public function editAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();


        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $form = $this->container->get('fos_user.profile.form');
        $formHandler = $this->container->get('fos_user.profile.form.handler');


    //echo '<pre>';
      //   \Doctrine\Common\Util\Debug::dump($formHandler);die;

        $process = $formHandler->process($user);
        if ($process) {
            $this->setFlash('fos_user_success', 'profile.flash.updated');

            return new RedirectResponse($this->getRedirectionUrl($user));
        }

        return $this->container->get('templating')->renderResponse(
            'FirstUserBundle:Profile:edit.html.'.$this->container->getParameter('fos_user.template.engine'),
            array('form' => $form->createView())
        );
    }


/**
     * Generate the redirection url when editing is completed.
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
     * @param string $action
     * @param string $value
     */
    protected function setFlash($action, $value)
    {
        $this->container->get('session')->getFlashBag()->set($action, $value);
    }


    /**
     * @Route("/deleteDevice/{deviceId}",name="_del_user_device")
     */
    public function deleteDeviceAction(Request $request,$deviceId) {

       $pageToRedirect = $this->get('router')->generate('fos_user_profile_show');
       $productService = $this->get('first_emagazine.productmanager');

       $user = $this->getUser();
       if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

	if($user){
	$userId = $user->getId();
		if($deviceId!=''){
		$deleteUserDevice = $productService->deleteUserDevice($userId,$deviceId);
		if ($deleteUserDevice != null){
        	$em = $this->get('doctrine')->getEntityManager();
		$em->remove($deleteUserDevice);
		$em->flush();
		}

                return $this->redirect($pageToRedirect, 301);
		}
        }
         return $this->redirect($pageToRedirect, 301);
     }



}

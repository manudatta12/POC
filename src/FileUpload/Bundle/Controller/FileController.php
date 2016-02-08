<?php

namespace FileUpload\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FileUpload\Bundle\Entity\File;
use FileUpload\Bundle\Form\FileType;
use Hip\MandrillBundle\Message;
use Hip\MandrillBundle\Dispatcher;

class FileController extends Controller
{
    /**
     * @Route("/file", name="file_upload")
     * @Template()
     */
    public function indexAction(Request $request)
    {
    //echo 'dhee'; die;
        $entity = new File();
        $form = $this->createForm(new FileType(), $entity);
        //$form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($request->isMethod('POST')) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
               // $entity->upload();
                $em->persist($entity);
                $em->flush();
       echo $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('dheerendra.kumar@9dot9.in')
        ->setTo('dhee1789@gmail.com')
        ->setBody('You should see me from the profiler!')
    ;

    $this->get('mailer')->send($message);
    }
    
}
return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
}
}

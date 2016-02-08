<?php

namespace First\AdminBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AppBundle\Entity\manageFileSystem;

class manageFileSystemAdminController extends CRUDController {

    /**
     * return the Response object associated to the create action
     *
     * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
     * @return Response
     */
    public function createAction() {

        return $this->render("FirstAdminBundle:ProductUpload:productUpload.html.twig");
    }

    /**
     * Function to Upload junglee feed file.
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function ProductUploadAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $file = $request->files->get('img');
            //Сheck that we have a file
            if ((!empty($file)) && ($file->getError() == '0')) {
                $originalName = $file->getClientOriginalName();     // get file name
                $file_type = $file->getClientOriginalExtension();   // get file type e.g csv,jpg
                $tmpFileName = $file->getpathName();                // get temp file name
                $valid_filetypes = array('txt');  // set valid file types allowed for upload

                if (in_array(strtolower($file_type), $valid_filetypes)) {

                    $newname = $this->getBasePath() . '/' . $originalName;  //Determine the path to which we want to save this file
                    //Check if the file with the same name is already exists on the server
                    if (!file_exists($newname)) {

                        if ((move_uploaded_file($tmpFileName, $newname))) {   //Attempt to move the uploaded file to it's new place
                            $this->ParseUserFile($newname,$originalName);               // now start parsing of uploaded csv file

                            $status = $originalName . " Data Uploaded Successfully.";
                            //echo $originalName." Data Uploaded Successfully";
                        } else {
                            $status = "Error : A problem occurred during file upload!";
                        }
                    } else {
                        $status = "File " . $originalName . " already exists, Try to Upload Another File.";
                    }
                } else {
                    $status = "File Type Not Valid, Try to Upload CSV File.";
                }
            } else {
                $status = "No file uploaded.";
            }

            return $this->render('FirstAdminBundle:ProductUpload:productUpload.html.twig', array('status' => $status));
        }
    }

    /**
     * Determine the path to which we want to save uploaded file
     * @return string
     */
    Public function getBasePath() {
        $url = $this->get('kernel')->getRootDir();
        $url1 = explode('/app', $url);
        $baseurl = $url1[0];
        $uploadDir = '/UploadFeed/File';
        return $baseurl . '/web' . $uploadDir;
        //return '/var/www/newthinkdigit.com/web'.$this->getUploadDir();
    }

    /**
     * function to upload csv data in db.
     * @param unknown $filename
     */
    public function ParseUserFile($filename,$originalName) {


        $userFile = fopen($filename, "r") or die("Unable to open file!");
        $fileData = fread($userFile, filesize($filename));

        if (strlen($fileData) > 0) {

            $sql = "INSERT INTO manage_file_system (id,filename,filecontent) VALUES ('', '$originalName', '$fileData')";

            $em = $this->getDoctrine()->getManager();
            $conn = $em->getConnection();
            $statement = $conn->prepare($sql);
            $statement->execute();
        }


        fclose($userFile);
        ///unlink($filename);
    }

    /**
     * return the Response object associated to the list action
     *
     * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
     *
     * @return Response
     */
    /* public function listAction()
      {
      if (false === $this->admin->isGranted('LIST')) {
      throw new AccessDeniedException();
      }

      $datagrid = $this->admin->getDatagrid();
      $pager = $datagrid->getPager();
      $pager->setMaxPerPage(1);
      $formView = $datagrid->getForm()->createView();

      return $this->render($this->admin->getTemplate('list'), array(
      'action'     => 'list',
      'form'       => $formView,
      'datagrid'   => $datagrid,
      'csrf_token' => $this->getCsrfToken('sonata.batch'),
      ));

      } */
}

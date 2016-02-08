<?php

namespace First\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;


use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Route\RouteCollection;

class manageFileSystemAdmin extends Admin
{
    
    
    protected $baseRouteName = 'managefilesystem';

protected $baseRoutePattern = 'managefilesystem';	
    
    
    public function configureRoutes(RouteCollection $collection)
    {
    	$collection->add('ProductUpload');  // add custom action name which you created in controller for which you want to generate route.
    	$collection->remove('delete');
    	//$collection->remove('list');
    } 

    public function getParent()
    {
    	return 'file';
    }
    
    
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('filename')
            ->add('filecontent')


       ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('filename')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Search OR Update File')
            ->add('filename')
                ->add('filecontent')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('Search OR Update File')
            ->add('filename')
           ->add('filecontent')

        ;
    }


    public function prePersist($page) {
        $date = new \DateTime();
        $page->setPostDate($date);
        $page->setUpdateDate($date);
           
    }

    public function preUpdate($page) {
        $date = new \DateTime();
        $page->setPostDate($date);
           
    }

}

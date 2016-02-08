<?php

namespace First\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EmagazinePackageAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('packagename')
            ->add('status')
       ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('packagename')
            ->add('paperlitId')
            ->add('startFromDate')
            ->add('status')
            ->add('postDate')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
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
            ->with('Package General Description')
            ->add('packagename')
            ->add('packageAliasname')
            //->add('paperlitId')
            ->end()
            ->with('Package Details')
            ->add('ismagazine')
            ->add('isFasttrack')
            ->add('isSkoar')
            ->add('isDvD1')
            ->add('isDvD2')
            ->add('isDmystify')
            ->end()
            ->with('Other Details')
            ->add('duration')
            ->add('coverPrice')
            ->add('youPay')
            ->add('benefit')
            ->end()
            ->with('Package Start and End Date')
            ->add('startFromDate')
            ->add('endDate')
	    
            ->end()
            ->with('Set Priority, Status and Image Details')
            ->add('priority')
            ->add('status')
            ->add('image', 'sonata_type_model_list', array('required' => false), array('link_parameters' => array('provider' => 'sonata.media.provider.image', 'context' => 'default')))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('Package General Description')
            ->add('id')
            ->add('packagename')
            ->add('packageAliasname')
            ->add('paperlitId')
            ->end()
            ->with('Package Details')
            ->add('ismagazine')
            ->add('isFasttrack')
            ->add('isSkoar')
            ->add('isDvD1')
            ->add('isDvD2')
            ->add('isDgt')
            ->end()
            ->with('Other Details')
            ->add('duration')
            ->add('coverPrice')
            ->add('youPay')
            ->add('benefit')
            ->end()
            ->with('Package Start and End Date')
            ->add('startFromDate')
            ->add('endDate')
	    
            ->end()
            ->with('Set Priority, Status and Image Details')
            ->add('priority')
            ->add('status')
            ->add('image')
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

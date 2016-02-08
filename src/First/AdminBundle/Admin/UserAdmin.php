<?php

namespace First\AdminBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\UserBundle\Model\UserInterface;
use Sonata\UserBundle\Admin\Entity\UserAdmin as BaseAdmin;


class UserAdmin extends BaseAdmin
{

  protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('General')
                ->add('username')
                ->add('email')
            ->end()
            ->with('Groups')
                ->add('groups')
            ->end()
            ->with('Profile')
                ->add('dateOfBirth')
                ->add('firstname')
                ->add('lastname')
                ->add('website')
                ->add('biography')
                ->add('gender')
                ->add('locale')
                ->add('timezone')
                ->add('phone')
            ->end()
            ->with('Social')
                ->add('facebookUid')
                ->add('facebookName')
                ->add('twitterUid')
                ->add('twitterName')
                ->add('gplusUid')
                ->add('gplusName')
            ->end()
            ->with('Security')
                ->add('token')
                ->add('twoStepVerificationCode')
            ->end()
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->add('email')
            ->add('groups')
            ->add('facebookName',array(), array('label' => 'Fb Name'))
            ->add('gender',array(), array('label' => 'Gender'))
            ->add('locale',array(), array('label' => 'Language'))
            ->add('biography',array(), array('label' => 'Biography'))
            ->add('enabled',null,array('editable'=>true))
            ;

        if ($this->isGranted('ROLE_ALLOWED_TO_SWITCH')) {
            $listMapper
                ->add('impersonating', 'string', array('template' => 'SonataUserBundle:Admin:Field/impersonating.html.twig'))
            ;
        }
    }



}

<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace First\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationFormType extends AbstractType
{
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $os = array('Android'=>'Android','IOS'=>'IOS','Other'=>'Other');


        $builder
            ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
            ->add('fullname', null, array('label' => 'form.fullname', 'translation_domain' => 'FOSUserBundle'))
		    ->add('countryCode', null, array('label' => 'form.countryCode', 'translation_domain' => 'FOSUserBundle'))
            ->add('mobileNo', null, array('label' => 'form.mobileNo', 'translation_domain' => 'FOSUserBundle'))
            ->add('biography', 'textarea', array('label' => 'form.biography', 'translation_domain' => 'FOSUserBundle','attr' => array('cols' => '50', 'rows' => '5'),'required' => false))
            ->add('country', null, array('label' => 'form.country', 'translation_domain' => 'FOSUserBundle','data' =>'betatester'))
            ->add('plainPassword', 'repeated', array(
                'type' => 'text',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('website', 'choice', array('choices' =>$os,'choices_as_values' => false))
            //->add('facebook_uid',null, array('label' => 'form.facebook_uid', 'translation_domain' => 'FOSUserBundle'))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'intention'  => 'registration',
        ));
    }

    // BC for SF < 2.7
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $this->configureOptions($resolver);
    }

    public function getName()
    {
        return 'store_user_registration';
    }


}

<?php

namespace First\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Validator\Constraint\UserPassword as OldUserPassword;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityManager;

class ProfileFormType extends AbstractType
{
    private $class;

	protected $em;

    /**
     * @param string $class The User class name
     */
    public function __construct($class, EntityManager $em)
    {
        $this->class = $class;
        $this->em = $em;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

		ini_set('memory_limit', '-1');
        $this->buildUserForm($builder, $options);
        $builder
        ->add('fullname','text',array("required" => false ))
        //->add('countryCode','text',array("required" => false ))
                ->add('country','text',array("required" => false ))

        ->add('mobileNo','text',array("required" => false ));

    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'intention'  => 'profile',
        ));
    }

    public function getName()
    {
        return 'fos_user_profile';
    }

    /**
     * Builds the embedded form representing the user.
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fullname', null, array('label' => 'form.fullname', 'translation_domain' => 'FOSUserBundle'))
            //->add('countryCode', null, array('label' => 'form.countryCode', 'translation_domain' => 'FOSUserBundle'))
            ->add('country', null, array('label' => 'form.country', 'translation_domain' => 'FOSUserBundle'))
            ->add('mobileNo', 'mobileNo', array('label' => 'form.mobileNo', 'translation_domain' => 'FOSUserBundle'))
        ;
    }
}

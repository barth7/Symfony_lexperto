<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 16.02.2016
 * Time: 16:00
 */
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Form\Type\AcademicDegree;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fname');
        $builder->add('sname');
        $builder->add('academicDegree', new AcademicDegree(), array(
            'placeholder' => 'Tytuł',
        ));
        $builder->add('phone');
        $builder->add('office');
        $builder->add('city');
        $builder->add('zipcode');
        $builder->add('workers');
        $builder->add('www');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 16.02.2016
 * Time: 16:10
 */
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AcademicDegree extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
                'adwokat' => 'Adwokat',
                'radca' => 'Radca Prawny',
                'prawnik' => 'Prawnik',
                'asystent' => 'Asystent',
            )
        ));
    }

    public function getParent()
    {
        return 'choice';
    }

    public function getName()
    {
        return 'app_academic';
    }
}
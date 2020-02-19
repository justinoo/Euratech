<?php

namespace App\Form;

use App\Entity\School;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SchoolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomref')
            ->add('prenomref')
            ->add('email')
            ->add('schoolname')
            ->add('ville')
            ->add('nbrestudent')
            ->add('message')
            ->add('classe')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => School::class,
        ]);
    }
}

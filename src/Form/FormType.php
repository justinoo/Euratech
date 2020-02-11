<?php

namespace App\Form;

use App\Entity\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('prenom', TextType::class)
            ->add('nom', TextType::class)
            ->add('mail', EmailType::class)
            ->add('telephone', TelType::class)
            ->add('Adresse1', TextType::class)
            ->add('Adresse2', TextType::class)
            ->add('ville', TextType::class)
            ->add('region', CountryType::class)
            ->add('cp', TextType::class)
            ->add('pays', CountryType::class)
            ->add('kidname', TextType::class)
            ->add('accompagnants', TextType::class);
        ->getForm();




    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Form::class,
        ]);
    }
}



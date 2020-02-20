<?php

namespace App\Form;

use App\Entity\Enfants;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnfantsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom', TextType::class, [
                'label' => " Prénom :  "
            ])
            ->add('nom', TextType::class, [
                'label' => " Nom :  "
            ])
            ->add('prenom', TextType::class, [
                'label' => " Prenom :  "
            ])
            ->add('nom', TextType::class, [
                'label' => " nom :  "
            ])
            ->add('accompagnants', ChoiceType::class,[
                'choices'=>[
                    "Oui"  => true,
                    "Non" => false
                ],
            ])

            ->getForm();
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Enfants::class,
        ]);
    }
}
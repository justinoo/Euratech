<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormType extends AbstractType
{

    public $enfants;
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('prenom', TextType::class, [
                'label' => " Prénom :  "
            ])
            ->add('nom', TextType::class, [
                'label' => " Nom  : "
            ])
            ->add('mail', EmailType::class, [
                'label' => " E-mail : "
            ])
            ->add('telephone', TelType::class, [
                'label' => " Téléphone : "
            ])
            ->add('Adresse1', TextType::class, [
                'label' => " Adresse 1 : "
            ])
            ->add('Adresse2', TextType::class, [
                'label' => " Adresse 2 : "
            ])
            ->add('ville', ChoiceType::class,[
                'choices'=>[
                    "Lille"  => 'Lille',
                    "Roubaix" => "Roubaix"
                ],
                "label" => "Ville :"

            ])
            
            ->add('cp', TextType::class, [
                'label' => "Code Postal : "
            ])
            ->add('pays', CountryType::class, [
                'label' => " Pays : "
            ])
            ->add('enfants',ChoiceType::class, [
                'choices'=>[
                    "12" => 12,
                    "11" => 11,
                    "10" => 10,
                    "9" => 9,
                    "8" => 8,
                    "7" => 7,
                    "6" => 6,
                    "5" => 5,
                    "4" => 4,
                    "3" => 3,
                    "2" => 2,
                    "1" => 1

                ],


            'label' => "Nombre d'enfants à  inscrire : "
        ])
        
            
            ->getForm();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}

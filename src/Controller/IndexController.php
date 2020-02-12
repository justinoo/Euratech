<?php

namespace App\Controller;

use App\Entity\Contact;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function create(Request $request, EntityManagerInterface $manager){
         $contact = new Contact();

         $form = $this->createFormBuilder($contact)
                      ->add('prenom', TextType::class, [
                          'attr' => [
                              'placeholder' => "prenom",
                              
                          ]
                      ])
                      ->add('commune', TextType::class, [
                          'attr' => [
                              'placeholder' => "commune",
                              
                          ]
                      ])
                      ->add('email', EmailType::class, [
                          'attr' => [
                              'placeholder' => "Mail",
                              
                         ]
                      ])
                      ->add('message', TextareaType::class, [
                          'attr' => [
                              'placeholder' => "Message",
                              
                          ]
                      ])
                      ->add('save', SubmitType::class, [
                          'label' => 'Enregistrer'
                      ])
                      ->getForm();

        return $this->render('index/contact.html.twig', [
            'formContact' => $form->createView()
        ]);
    }
}

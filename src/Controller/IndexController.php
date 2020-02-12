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
                      ->add('prenom')
                      ->add('commune')
                      ->add('email')
                      ->add('message')            
                      ->getForm();

         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {
             
            $manager->persist($contact);
            $manager->flush();

            
         }

        return $this->render('index/contact.html.twig', [
            'formContact' => $form->createView()
        ]);
    }
}

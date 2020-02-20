<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mime\Message;
use Symfony\Component\Routing\Annotation\Route;

use function PHPSTORM_META\type;

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
     * @Route("/vueContact", name="vueContact")
     */
    public function vueContact()
    {
        return $this->render('index/vueContact.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function create(Request $request, EntityManagerInterface $manager){
         $contact = new Contact();

        //  $form = $this->createFormBuilder($contact)
        //               ->add('prenom')
        //               ->add('commune')
        //               ->add('email')
        //               ->add('message')
        //               ->getForm();

        $form = $this->createForm(ContactType::class, $contact);

         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {

            $this->addFlash('notice', 'Your changes were saved!');

            $manager->persist($contact);
            $manager->flush();

            return $this->redirectToRoute('vueContact', ['id' => $contact->getId()]);
         }

        return $this->render('index/contact.html.twig', [
            'formContact' => $form->createView()
        ]);
    }
}

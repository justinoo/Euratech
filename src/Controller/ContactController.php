<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mime\Message;
use Symfony\Component\Routing\Annotation\Route;

use function PHPSTORM_META\type;

class ContactController extends AbstractController
{

    /**
     * @Route("/", name="contact")
     */
    public function create(Request $request, EntityManagerInterface $manager, MailerInterface $mailer){
         $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);

         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {

            $email = (new TemplatedEmail())
                ->from('euratechkidsymfony@gmail.com')
                ->to('euratechkidsymfony@gmail.com')
                ->subject('Demande information')
                ->htmlTemplate('emails/contact.html.twig')
                ->context([
                    'contact' => $contact
                ])
            ;
            $mailer->send($email);

            $manager->persist($contact);
            $manager->flush();
         }

        return $this->render('homepage.html.twig', [
            'controller_name' => 'ContactController',
            'form' => $form->createView()
        ]);
    }
}

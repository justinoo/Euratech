<?php

namespace App\Controller;

use App\Entity\School;
use App\Form\SchoolType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class SchoolController extends AbstractController
{
    /**
     * @Route("/ecoles", name="ecoles")
     */

    public function school(Request $request, EntityManagerInterface $manager, MailerInterface $mailer) {
        $school = new School();

        $form = $this->createForm(SchoolType::class, $school);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $email = (new TemplatedEmail())
                ->from('euratechkidsymfony@gmail.com')
                ->to('euratechkidsymfony@gmail.com')
                ->subject('Demande école')
                ->htmlTemplate('emails/ecole.html.twig')
                ->context([
                    'school' => $school
                ])
            ;
            $mailer->send($email);
            
            $manager->persist($school);
            $manager->flush();
            

        }
        return $this->render('school/school.html.twig', [
            'controller_name' => 'SchoolController',
            'form' => $form->createView()
        ]);
    }

}

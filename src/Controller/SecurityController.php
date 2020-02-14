<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;

class SecurityController extends AbstractController
{
   /**
    * @Route("/register", name="security_registration")
    */

    public function registration(Request $request, EntityManagerInterface $manager) {
        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $manager->persist($user);
            $manager->flush();

        }
        return $this->render('security/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }
}

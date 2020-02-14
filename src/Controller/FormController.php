<?php

namespace App\Controller;

use App\Form\FormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Reservation;

class FormController extends AbstractController
{
    /**
     * @Route("/inscription", name="formulaire_inscription")
     */


    public function form(Request $request)
    {
        $product = new Reservation();
        $form = $this->createForm(FormType::class, $product);


        
        $form->handleRequest($request);
        dump($product);




        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
        }
        return $this->render('Form/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}

<?php

namespace App\Controller;

use App\Form\EnfantsType;
use App\Entity\Enfants;
use App\Entity\CreateAtelier;
use App\Entity\ReservationAtelier;
use App\Form\FormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class EnfantsController extends AbstractController
{

    /**
     * @Route("/inscription/enfants/{titre}/{id}", name="formulaire_enfants")
     */


    public function form(Request $request,$titre, $id)
    {
        dump($id);
        $product = new Enfants();
        $product->setIdatelier($id);
        $form = $this->createForm(EnfantsType::class, $product);
        $form->handleRequest($request);



        if($form->isSubmitted() && $form->isValid())
        {
            dump($request);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
            return $this->redirectToRoute('ateliers');
        }
        return $this->render('Form/form2.html.twig', [
            'form2' => $form->createView(),
            'titre' => $titre
        ]);

    }




}
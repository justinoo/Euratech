<?php

namespace App\Controller;

use App\Entity\CreateAtelier;
use App\Form\FormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Reservation;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{

    /**
     * @Route("/inscription/{titre}", name="formulaire_inscription")
     */

    public function form(Request $request, $titre)
    {
        $product = new Reservation();
        $form = $this->createForm(FormType::class, $product);
        $form->handleRequest($request);
        $nomAtelier = $this->getDoctrine()->getRepository(CreateAtelier::class)->findOneBy(["titre" => $titre]);
        $product->setNomAtelier($nomAtelier);
        dump($nomAtelier);


        if($form->isSubmitted() && $form->isValid())
        {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($product);
                $entityManager->flush();
                return $this->redirectToRoute('formulaire_enfants', ['titre' => $titre]);
        }
        return $this->render('Form/form.html.twig', [
            'form' => $form->createView(),
            'titre' => $titre
        ]);

    }




}

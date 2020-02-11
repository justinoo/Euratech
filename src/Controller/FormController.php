<?php

namespace App\Controller;

use App\Form\FormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Form;

class FormController extends AbstractController
{
    /**
     * @Route("/form", name="formu_inscri")
     */
    public function form(Request $request) : Response
    {
        $formulaire = new Form();
        $form = $this->createForm(FormType::class, $formulaire);
        $form->handleRequest($request);
        dump($formulaire);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formulaire);
            $entityManager->flush();

            return $this->render('form.html.twig', [
                'form' => $form->createView(),
            ]);
        }

    }

}

<?php

namespace App\Controller;


use App\Entity\Enfants;
use App\Form\FormType;
use App\Form\KidType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class KidController extends AbstractController
{

    /**
     * @Route("/inscription/enfants/{enfants}" , name="enfant_list")
     */
    public function list($enfants, Request $request)
    {
        $product = new Enfants();
        $form = $this->createForm(KidType::class, $product);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
            dump($product);

        }
        dump($enfants);
        return $this->render("Kids/enfants.html.twig", [
            "formkid" => $form->createView(),
            "kids" =>  intval($enfants),
        ]);
    }
}
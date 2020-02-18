<?php

namespace App\Controller;

use App\Entity\CreateAtelier;
use App\Repository\CreateAtelierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreateAtelierController extends AbstractController
{
    /**
     * @Route("/ateliers", name="ateliers")
     */
    public function atelier(CreateAtelierRepository $createAtelierRepository )
    {
        return $this->render('ateliers/ateliers.html.twig', [
            'ateliers' => $createAtelierRepository->findAll()
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class AteliersController extends AbstractController
{
    /**
     * @Route("/ateliers", name="ateliers")
     */
    public function index()
    {
        return $this->render('ateliers/ateliers.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }
}

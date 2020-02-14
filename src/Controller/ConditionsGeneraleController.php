<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConditionsGeneraleController extends AbstractController
{
    /**
     * @Route("/conditions-generale", name="conditions_generale")
     */
    public function index()
    {
        return $this->render('conditions_generale/conditions.html.twig', [
            'controller_name' => 'ConditionsGeneraleController',
        ]);
    }
}

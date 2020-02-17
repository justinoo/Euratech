<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     */
    public function index()
    {
        return $this->render('homepage.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
    }

    /**
     * @Route("/ecoles", name="ecoles")
     */

     public function school()
     {
         return $this->render('school/school.html.twig', [
             'controller_name' => 'HomePageController',
         ]);
     }
     
     
}

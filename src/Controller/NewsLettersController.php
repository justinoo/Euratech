<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsLettersController extends AbstractController
{
    /**
     * @Route("/news/letters", name="news_letters")
     */
    public function index()
    {
        return $this->render('news_letters/index.html.twig', [
            'controller_name' => 'NewsLettersController',
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NameController extends AbstractController
{
    
    /**
     * @Route("/inscription/{nbrkid}", name="name")
     */
    public function enfants($nbrkid)
    {
        $nbrkid = $this->getDoctrine()->getManager()->findOne
        return $this->render('name/index.html.twig', [
            'enfants' => $nbrkid,
        ]);
    }
}

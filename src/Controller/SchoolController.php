<?php

namespace App\Controller;

use App\Entity\School;
use App\Form\SchoolType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class SchoolController extends AbstractController
{
    /**
     * @Route("/ecoles", name="ecoles")
     */

    public function school(Request $request, EntityManagerInterface $manager) {
        $school = new School();

        $form = $this->createForm(SchoolType::class, $school);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            
            $manager->persist($school);
            $manager->flush();

        }
        return $this->render('school/school.html.twig', [
            'controller_name' => 'SchoolController',
            'form' => $form->createView()
        ]);
    }

}

<?php

// src/Controller/MileStoneController.php

namespace App\Controller;

use App\Entity\MileStone;
use App\Form\MileStoneFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MileStoneController extends AbstractController
{
    #[Route('/milestone/new', name: 'milestone_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $mileStone = new MileStone();
        $form = $this->createForm(MileStoneFormType::class, $mileStone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mileStone);
            $entityManager->flush();

            return $this->redirectToRoute('milestone_show', ['id' => $mileStone->getId()]);
        }

        return $this->render('mile_stone/index.html.twig', [
            'milestone_form' => $form->createView(),
        ]);
    }
}


<?php

// src/Controller/MileStoneController.php

namespace App\Controller;

use App\Entity\MileStone;
use App\Entity\BulletPoints;
use App\Form\MileStoneFormType;
use App\Form\BulletPointsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MileStoneController extends AbstractController
{
    #[Route('/milestone/new', name: 'milestone_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $mileStone = new MileStone();
        $bulletPoints = new BulletPoints();

        $mileStoneForm = $this->createForm(MileStoneFormType::class, $mileStone);
        $mileStoneForm->handleRequest($request);

        $bulletPointsForm = $this->createForm(BulletPointsType::class, $bulletPoints);
        $bulletPointsForm->handleRequest($request);

        if ($mileStoneForm->isSubmitted() && $mileStoneForm->isValid()) {
            $entityManager->persist($mileStone);
            $entityManager->flush();

            return $this->redirectToRoute('milestone_show', ['id' => $mileStone->getId()]);
        }

        return $this->render('mile_stone/index.html.twig', [
            'mileStoneForm' => $mileStoneForm->createView(),
            'bulletPointsForm' => $bulletPointsForm->createView(),
        ]);
    }
}


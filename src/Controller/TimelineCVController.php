<?php

namespace App\Controller;

use App\Entity\MileStone;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TimelineCVController extends AbstractController
{
    #[Route('/timeline', name: 'app_timeline')]
    public function index(EntityManagerInterface $entityManager): Response
    {   
        $experiences = $entityManager->getRepository(MileStone::class)->findAll();
        return $this->render('timeline_cv/index.html.twig', [
            'timeline_events' => $experiences,
        ]);
    }
}

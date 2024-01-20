<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        $timelineEvents = [
            '2024' => [
                [
                    'title' => 'Event 1',
                    'description' => 'Description of event 1',
                    'date' => '2024-01-01',
                ],
                [
                    'title' => 'Event 2',
                    'description' => 'Description of event 2',
                    'date' => '2024-02-01',
                ],
                // More events for 2024
            ],
            '2025' => [
                [
                    'title' => 'Event 3',
                    'description' => 'Description of event 3',
                    'date' => '2025-01-01',
                ],
                [
                    'title' => 'Event 4',
                    'description' => 'Description of event 4',
                    'date' => '2025-02-01',
                ],
                // More events for 2025
            ],
            // Add more years as needed
        ];
        
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'timeline_events' => $timelineEvents,
        ]);
    }
}

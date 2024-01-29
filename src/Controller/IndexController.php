<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;

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

    #[Route('/email', name: 'app_email')]
    public function handleContactForm(Request $request, MailerInterface $mailer): Response
    {
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $message = $request->request->get('message');
        
        // Build the email content
        $emailContent = "Name: $name\nEmail: $email\nMessage: $message";

        // Send the email
        $email = (new Email())
            ->from('your@example.com')
            ->to('your-email@example.com')
            ->subject('New Contact Form Submission')
            ->text($emailContent);

        $mailer->send($email);

        return new Response('Message sent successfully!');
    }
}

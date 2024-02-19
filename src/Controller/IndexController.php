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
        $experiences = [
            [
                'title' => 'Word Games | Unity Developer',
                'description' => [
                    'Implemented an event-driven input check system, optimizing performance and enabling precise actions detection.',
                    'Developed a frustum occlusion feature adjusted to the project needs, improving frame rate from 15 to 60 FPS.',
                    'Used technical solutions to achieve the game\'s artistic vision with post-processing, shaders, and asset management.',
                    'Implemented efficient animation systems using behavior scripts, parameters, layers, and blend trees.'
                ],
                'date' => '2022-10',
                'endDate' => '2023-09',
                'tags' => ['Unity', 'C#', 'NoSQL']
            ],
            [
                'title' => 'TagWizz | Unity Developer Apprenticeship',
                'description' => [
                    'Collaborated to develop a 3D platformer with shooter mechanics, featuring a customization and progression system.',
                    'Implemented a 4-player cooperative online multiplayer, enabling players to engage in the game together.',
                    'Designed and developed Enemy AI systems with varied roles, to ensure an engaging gameplay experience.',
                    'Integrated artistic and visual elements to achieve the desired artistic vision for the game.',
                    'Utilized Unity to implement gameplay mechanics, optimize performance, and ensure a smooth gaming experience.'
                ],
                'date' => '2022-08',
                'endDate' => '2022-12',
                'tags' => ['Unity', 'C#', 'SCRUM']
            ],
            [
                'title' => 'CORKBRICK EUROPE | Unity Developer Intern',
                'description' => [
                    'Designed and developed systems using standard design patterns to achieve the desired functionality.',
                    'Managed optimized visuals via 3D shaders, particles, LODs, Frustum rendering, and illumination and asset settings.',
                    'Implemented database services between Firebase and Unity to store relevant user data structures in JSON format.',
                    'Worked with a multicultural and multidisciplinary team on a daily basis using agile development communication tools.'
                ],
                'date' => '2022-02',
                'endDate' => '2022-09',
                'tags' => ['Unity', 'C#', 'SCRUM']
            ],
            [
                'title' => 'Movimiento STEM | Unity Developer Apprenticeship',
                'description' => [
                    'Successfully programmed mechanics via C# scripting ensuring a good modular SOLID design.',
                    'Mounted Django service database communication using Python ensuring communication with Unity.',
                    'Generated SQL DataBase service to store relevant user information using Unity\'s JSON.',
                    'Implemented Unit Tests to assure the quality of the system by testing the methods functionality.'
                ],
                'date' => '2021-02',
                'endDate' => '2021-06',
                'tags' => ['Unity', 'C#', 'SCRUM']
            ]
        ];        


        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'timeline_events' => $experiences,
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

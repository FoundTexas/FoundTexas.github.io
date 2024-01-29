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
            [
                'title' => 'GameTec',
                'description' => 'Company launches new product line aimed at eco-friendly consumers.',
                'date' => '2018-03-15',
                'tags' => ['business', 'product launch'],
            ],
            [
                'title' => 'International Conference on Climate Change',
                'description' => 'Keynote speakers discuss the latest research and policies related to climate change.',
                'date' => '2018-06-20',
                'tags' => ['environment', 'conference'],
            ],
            [
                'title' => 'Expansion into New Markets',
                'description' => 'Company announces expansion into Asian markets, targeting emerging economies.',
                'date' => '2018-02-10',
                'tags' => ['business', 'expansion'],
            ],
            [
                'title' => 'World Health Day Campaign',
                'description' => 'Global campaign promoting awareness about mental health and well-being.',
                'date' => '2019-04-07',
                'tags' => ['health', 'campaign'],
            ],
            [
                'title' => 'Olympic Games',
                'description' => 'Tokyo hosts the Summer Olympic Games with athletes from around the world competing.',
                'date' => '2020-07-24',
                'tags' => ['sports', 'international'],
            ],
            [
                'title' => 'COVID-19 Pandemic Declaration',
                'description' => 'World Health Organization declares COVID-19 outbreak a global pandemic.',
                'date' => '2020-03-11',
                'tags' => ['health', 'pandemic'],
            ],
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

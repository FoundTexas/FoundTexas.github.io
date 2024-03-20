<?php

namespace App\Controller;

use App\Entity\MileStone;
use App\Entity\Project;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(EntityManagerInterface $entityManager): Response
    {   
        $Project = $entityManager->getRepository(Project::class)->findAll();

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'Project' => $Project,
        ]);
    }

    #[Route('/email', name: 'app_email')]
    public function handleContactForm(Request $request, MailerInterface $mailer): Response
    {
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $message = $request->request->get('message');

        $sendmail = (new Email())
            ->from('rolega01@gmail.com')
            ->to('rolega01@gmail.com')
            ->subject('New Contact Form Submission')
            ->html("<html><body>
                        <img src='https://masoftcode.com/img/ico/MasoftcodeICO.png' alt='Masoftcode Icon' style='height: 300px; width: auto;' />
                        <h1>CONTACT FORM</h1>
                        <p>Name: $name</p>
                        <p>Email: $email</p>
                        <p>Message: $message</p>
                    </body></html>");

        $mailer->send($sendmail);

        return new Response('Message sent successfully!');
    }
}

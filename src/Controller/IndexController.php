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
        $queryBuilder1 = $entityManager->getRepository(Project::class)->createQueryBuilder('p1');
        $queryBuilder2 = $entityManager->getRepository(Project::class)->createQueryBuilder('p2');

        $results1 = $queryBuilder1
            ->select('p1.id, p1.name, p1.description, p1.fileref, p1.iconref, p1.type, p1.linkref')
            ->where('p1.type = :type1')
            ->setParameter('type1', 'game-main')
            ->getQuery()
            ->getResult();

        $results2 = $queryBuilder2
            ->select('p2.id, p2.name, p2.description, p2.fileref, p2.iconref, p2.type, p2.linkref')
            ->where('p2.type = :type2')
            ->setParameter('type2', 'web-main')
            ->getQuery()
            ->getResult();

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'games' => $results1, // Assuming this should be 'games' for game-main projects
            'projects' => $results2, // Assuming this should be 'projects' for web-main projects
        ]);
    }

    #[Route('/terms-of-service', name: 'app_terms_of_Service')]
    public function showTermsOfService(): Response
    {
        return $this->render('terms_of_service.html.twig', []);
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

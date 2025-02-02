<?php

namespace App\Controller;

use App\Entity\MileStone;
use App\Entity\Project;
use Doctrine\ORM\EntityManagerInterface;
use FontLib\Table\Type\name;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $query = $entityManager->createQuery(
            'SELECT p1.id, p1.name, p1.description, p1.fileref, p1.iconref, p1.type, p1.linkref
                FROM App\Entity\Project p1
                INNER JOIN p1.mileStone mile
                WHERE p1.type = :comparetype'
        );;

        $results1 = $query->setParameters(['comparetype' => 'game-main'])->setMaxResults(6)->getResult();
        $results2 = $query->setParameters(['comparetype' => 'web-main'])->setMaxResults(6)->getResult();

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
    public function handleContactForm(Request $request, MailerInterface $mailer, EntityManagerInterface $entityManager): Response
    {
        try {
            $name = $request->request->get('name');
            $email = $request->request->get('email');
            $message = $request->request->get('message');
            $subject = $request->request->get('subject');

            if ($name == "" || !$name) throw new \Exception("no name");
            if ($email == "" || !$email) throw new \Exception("no email");
            if ($message == "" || !$message) throw new \Exception("no message");
            if ($subject == "" || !$subject) throw new \Exception("no subject");

            $sendmail = (new Email())
                ->from('rolega01@gmail.com')
                ->to('rolega01@gmail.com')
                ->subject('Portfolio: ' . $subject)
                ->html("<html><body>
                    <img src='https://foundtexas.net/assets/foundtexaspandamail.svg' alt='Masoftcode Icon' style='height: 300px; width: auto;' />
                    <h1>CONTACT FORM</h1>
                    <p>Name: $name</p>
                    <p>Email: $email</p>
                    <p>Message: $message</p>
                </body></html>");

            $mailer->send($sendmail);
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'message' => $e->getMessage()], JsonResponse::HTTP_BAD_REQUEST);
        }

        return new JsonResponse(['success' => true, 'message' => 'Message sent successfully!'], JsonResponse::HTTP_OK);
    }
}

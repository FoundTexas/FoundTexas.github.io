<?php

// src/Controller/MileStoneController.php

namespace App\Controller;

use App\Entity\Project;
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

    #[Route('/event-load', name: 'event_load', methods: ['GET', 'POST'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Create a query builder to select only the IDs of milestones
        $queryBuilder = $entityManager->getRepository(MileStone::class)->createQueryBuilder('m');
        $queryBuilder->select('m.id, m.name');
        $queryBuilder->orderBy('m.startDate', 'ASC');
        $query = $queryBuilder->getQuery();

        // Get the IDs of milestones
        $milestoneIds = $query->getResult();

        return $this->render('EventLoading/index.html.twig', [
            'milestoneIds' => $milestoneIds
        ]);
    }

    #[Route('/new/milestone', name: 'milestone_new', methods: ['GET', 'POST'])]

    public function newMilestone(Request $request, EntityManagerInterface $entityManager): Response
    {
        $id = $request->get('id') ?? null;

        $mileStone = $id ? $entityManager->getRepository(MileStone::class)->find($id) : new MileStone();

        $mileStoneForm = $this->createForm(MileStoneFormType::class, $mileStone);
        $mileStoneForm->handleRequest($request);

        if ($mileStoneForm->isSubmitted() && $mileStoneForm->isValid()) {

            $updateID = $request->get('updateID') ?? null;
            $flushMileStone = $entityManager->getRepository(MileStone::class)->find($updateID) ?? new MileStone();

            $flushMileStone->setName($mileStone->getName())->setDescription($mileStone->getDescription())->setStartDate($mileStone->getStartDate())->setEndDate($mileStone->getEndDate())->setTags($mileStone->getTags())->setBullets($mileStone->getBullets());

            $entityManager->persist($flushMileStone);
            $entityManager->flush();
        }

        // Render only the form HTML
        $mileStoneFormView = $this->renderView('EventLoading/create_mileStone.twig', [
            'mileStoneForm' => $mileStoneForm->createView(),
            'mileStonecur' => $mileStone
        ]);

        return new Response($mileStoneFormView);
    }


    #[Route('/new/bulletPoints', name: 'bulletPoints_new', methods: ['GET', 'POST'])]
    public function newBulletPoints(Request $request, EntityManagerInterface $entityManager): Response
    {
        $bulletPoints = new BulletPoints();

        $bulletPointsForm = $this->createForm(BulletPointsType::class, $bulletPoints);
        $bulletPointsForm->handleRequest($request);

        if ($bulletPointsForm->isSubmitted() && $bulletPointsForm->isValid()) {
            $entityManager->persist($bulletPoints);
            $entityManager->flush();
            return $this->redirectToRoute('milestone_show', ['id' => $bulletPoints->getId()]);
        }

        return $this->render('EventLoading/create-mileStone.twig', [
            'bulletPointsForm' => $bulletPointsForm->createView(),
        ]);
    }
}

<?php

// src/Controller/MileStoneController.php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\MileStone;
use App\Form\ProjectType;
use App\Form\MileStoneFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class LoadEventsController extends AbstractController
{

    #[Route('/event-load', name: 'event_load', methods: ['GET', 'POST'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Create a query builder to select only the IDs of milestones
        $queryBuilder = $entityManager->getRepository(MileStone::class)->createQueryBuilder('m');
        $queryBuilder->select('m.id, m.name');
        $queryBuilder->orderBy('m.startDate', 'ASC');
        $query = $queryBuilder->getQuery();

        $milestoneIds = $query->getResult();

        // Create a query builder to select only the IDs of projects
        $queryBuilder = $entityManager->getRepository(Project::class)->createQueryBuilder('p');
        $queryBuilder->select('p.id, p.name');
        $queryBuilder->orderBy('p.id', 'DESC');
        $query = $queryBuilder->getQuery();

        // Get the IDs of milestones
        $projectsIds = $query->getResult();

        return $this->render('EventLoading/index.html.twig', [
            'milestoneIds' => $milestoneIds,
            'projectsIds' => $projectsIds
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


    #[Route('/new/project', name: 'project_new', methods: ['GET', 'POST'])]
    public function newBulletPoints(Request $request, EntityManagerInterface $entityManager): Response
    {
        $id = $request->get('id') ?? null;

        $project = $id ? $entityManager->getRepository(Project::class)->find($id) : new Project();

        $projectForm = $this->createForm(ProjectType::class, $project);
        $projectForm->handleRequest($request);

        if ($projectForm->isSubmitted() && $projectForm->isValid()) {

            $updateID = $request->get('updateID') ?? null;
            $flushProject = $entityManager->getRepository(Project::class)->find($updateID) ?? new Project();

            $flushProject->setName($project->getName())->setDescription($project->getDescription())->setFileref($project->getFileref())->setMileStone($project->getMileStone())->setIconref($project->getIconref());

            $entityManager->persist($flushProject);
            $entityManager->flush();
        }

        // Render only the form HTML
        $projectFormView = $this->renderView('EventLoading/create_Project.twig', [
            'projectForm' => $projectForm->createView(),
            'projectcur' => $project
        ]);

        return new Response($projectFormView);
    }
}
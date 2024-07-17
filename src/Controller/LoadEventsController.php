<?php

// src/Controller/MileStoneController.php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\MileStone;
use App\Form\ProjectType;
use App\Entity\BulletPoint;
use App\Entity\BulletPointTag;
use App\Form\MileStoneFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

#[Route('/admin')]
class LoadEventsController extends AbstractController
{

    #[Route('/event-load', name: 'event_load', methods: ['GET', 'POST'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Create a query builder to select only the IDs of milestones
        $queryBuilder = $entityManager->getRepository(MileStone::class)->createQueryBuilder('m');
        $queryBuilder->select('m.id, m.name, org.name as org_n');
        $queryBuilder->leftjoin('m.organization', 'org');
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

    #[Route('/new/milestone/{id}', name: 'milestone_new', methods: ['GET', 'POST'])]
    public function newMilestone(Request $request, EntityManagerInterface $entityManager, string $id = null): JsonResponse
    {
        try {
            $mileStone = $id ? $entityManager->getRepository(MileStone::class)->find($id) : new MileStone();

            $mileStoneForm = $this->createForm(MileStoneFormType::class, $mileStone);
            $mileStoneForm->handleRequest($request);

            if ($mileStoneForm->isSubmitted() && $mileStoneForm->isValid()) {
                $mileStoneupdate = $id ? $entityManager->getRepository(MileStone::class)->find($id) : new MileStone();

                // Persist the milestone
                $mileStoneupdate
                    ->setName($mileStone->getName())
                    ->setDescription($mileStone->getDescription())
                    ->setStartDate($mileStone->getStartDate())
                    ->setEndDate($mileStone->getEndDate());

                $entityManager->persist($mileStoneupdate);

                // Handle bullet points
                foreach ($mileStone->getBulletpoints() as $bulletPoint) {
                    $bulletPoint->setMileStone($mileStoneupdate);

                    $entityManager->persist($bulletPoint);

                    // Handle bullet point tags
                    foreach ($bulletPoint->getBulletPointTags() as $bulletPointTag) {
                        $bulletPointTag->setBulletpoint($bulletPoint);
                        $bulletPointTag->setTag($bulletPointTag->getTag());

                        $entityManager->persist($bulletPointTag);
                    }
                }

                $entityManager->flush();
            }

            // Render only the form HTML
            $mileStoneFormView = $this->renderView('EventLoading/create_mileStone.twig', [
                'mileStoneForm' => $mileStoneForm->createView(),
                'mileStonecur' => $id
            ]);

            return new JsonResponse([
                'status' => 'success',
                'html' => $mileStoneFormView
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'An error occurred: ' . $e->getMessage()
            ], 500);
        }
    }


    #[Route('/new/project/{id}', name: 'project_new', methods: ['GET', 'POST'])]
    public function newBulletPoints(Request $request, EntityManagerInterface $entityManager, LoggerInterface $logger, string $id = null): JsonResponse
    {
        $message = 'An error occurred: ';
        try {
            $project = $id ? $entityManager->getRepository(Project::class)->find($id) : new Project();

            $projectForm = $this->createForm(ProjectType::class, $project);
            $projectForm->handleRequest($request);
        } catch (\Exception $e) {
            $logger->error('Form handling error: ' . $e->getMessage());
            $message .= " FORM_ERROR: " . $e->getMessage();
            return new JsonResponse([
                'status' => 'error',
                'message' => $message,
            ], 500);
        }

        try {
            if ($projectForm->isSubmitted()) {
                $flushProject = $id ? $entityManager->getRepository(Project::class)->find($id) : new Project();

                $formGallery = $projectForm->get('gallery')->getData();
                $uploadedFiles = $projectForm->get('galleryuploads')->getData();
                $newGallery = [];

                // Handle new file uploads
                foreach ($uploadedFiles as $file) {
                    if ($file instanceof UploadedFile) {
                        $newFilename = md5(uniqid()) . '.' . $file->guessExtension();
                        try {
                            $file->move($this->getParameter('gallery_directory'), $newFilename);
                            $newGallery[] = $newFilename;
                        } catch (FileException $e) {
                            $logger->error('File upload error: ' . $e->getMessage());
                            $message .= " FILE_UPLOAD_ERROR: " . $e->getMessage();
                        }
                    }
                }

                $existingGallery = $flushProject->getGallery();

                // Merge new uploads with existing gallery
                $updatedGallery = array_merge($formGallery, $newGallery);

                // Remove files not in the updated gallery
                foreach ($existingGallery as $file) {
                    $filePath = $this->getParameter('gallery_directory') . '/' . $file;
                    if (file_exists($filePath) && !in_array($file, $updatedGallery)) {
                        unlink($filePath);
                    }
                }

                $flushProject->setGallery($updatedGallery)
                    ->setName($project->getName())
                    ->setDescription($project->getDescription())
                    ->setFileref($project->getFileref())
                    ->setMileStone($project->getMileStone())
                    ->setIconref($project->getIconref())
                    ->setType($project->getType())
                    ->setLinkref($project->getLinkref());

                // Save the project entity
                $entityManager->persist($flushProject);
                $entityManager->flush();
                // Optionally handle success response or redirect
            }

            // Render only the form HTML
            $projectFormView = $this->renderView('EventLoading/create_Project.twig', [
                'projectForm' => $projectForm->createView(),
                'projectcur' => $project,
            ]);

            return new JsonResponse([
                'status' => 'success',
                'message' => $message,
                'html' => $projectFormView,
            ]);
        } catch (\Exception $e) {
            $logger->error('Template rendering error: ' . $e->getMessage());
            $message .= " TEMPLATE_ERROR: " . $e->getMessage();
            return new JsonResponse([
                'status' => 'error',
                'message' => $message,
            ], 500);
        }
    }
}

<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Project;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;

class ProjectController extends AbstractController
{


    #[Route('/projects/{type}', name: 'app_game_projects')]
    public function gameProjects(Request $request, EntityManagerInterface $entityManager,string $type =null): Response
    {
        $projects = $entityManager->getRepository(Project::class)->findAll();

        return $this->render('projects/Projects.twig', [
            'controller_name' => 'IndexController',
            'projects' => $projects,
            'textRef'=> $type, 
            'headText'=> $type.' Portfolio'
        ]);
    }

    #[Route('/project/{id}', name: 'app_project_detail')]
    public function projectDetail(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {
        $project = $entityManager->getRepository(Project::class)->find($id);

        if (!$project) {
            throw $this->createNotFoundException('Project not found');
        }

        // Get all parent comments related to the project
        $qb = $entityManager->createQueryBuilder();

        $parentComments = $qb->select('c')
            ->from(Comment::class, 'c')
            ->where('c.project = :projectId')
            ->andWhere($qb->expr()->isNull('c.parentComment'))
            ->orderBy('c.id', 'ASC')
            ->setParameter('projectId', $project->getId())
            ->getQuery()
            ->getResult();

        // Get subcomments for each parent comment
        $commentsWithSubcomments = [];

        foreach ($parentComments as $parentComment) {
            // Create a new QueryBuilder instance for each subquery
            $qbSub = $entityManager->createQueryBuilder();

            $subComments = $qbSub->select('sc')
                ->from(Comment::class, 'sc')
                ->where('sc.parentComment = :parentCommentId')
                ->orderBy('sc.id', 'ASC')
                ->setParameter('parentCommentId', $parentComment->getId())
                ->getQuery()
                ->getResult();

            $commentsWithSubcomments[] = [
                'parentComment' => $parentComment,
                'subComments' => $subComments,
            ];
        }

        return $this->render('projects/projectDetail.twig', [
            'project' => $project,
            'commentsWithSubcomments' => $commentsWithSubcomments,
        ]);
    }

    #[Route('/comment/create/{projectId}', name: 'comment_create')]
    public function createComment(Request $request, EntityManagerInterface $entityManager, int $projectId): Response
    {
        // Retrieve the current user (assuming you have a user authentication system)
        $user = $this->getUser();

        // Fetch the project based on projectId
        $project = $entityManager->getRepository(Project::class)->find($projectId);

        // Check if the project exists
        if (!$project) {
            throw $this->createNotFoundException('Project not found');
        }

        // Create a new Comment instance
        $comment = new Comment();

        // Assuming your Comment entity setters are appropriately defined, set the comment properties
        $comment->setUser($user);
        $comment->setProject($project);
        $comment->setTextData($request->request->get('comment'));

        $parentId = $request->request->get('parentId');
        if ($parentId) {
            $parentComment = $entityManager->getRepository(Comment::class)->find($parentId);

            if ($parentComment) {
                $comment->setParentComment($parentComment);
            }
        }

        // Persist the new comment to the database
        $entityManager->persist($comment);
        $entityManager->flush();

        // Redirect back to the project detail page after commenting
        return $this->redirectToRoute('app_project_detail', ['id' => $projectId]);
    }
}

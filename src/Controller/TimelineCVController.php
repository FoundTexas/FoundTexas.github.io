<?php

namespace App\Controller;

use App\Entity\MileStone;
use App\Entity\Tag;
use App\Entity\BulletPoints;
use App\Entity\Project;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

use Dompdf\Dompdf;
use Dompdf\Options;

class TimelineCVController extends AbstractController
{
    #[Route('/timeline', name: 'app_timeline')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $tags = $entityManager->getRepository(Tag::class)->findAll();
        $query = $entityManager->createQuery(
            'SELECT DISTINCT 
            ms.id as id, 
            ms.name, 
            ms.description, 
            p.id as p_id, 
            p.name as p_nm, 
            p.iconref,
            t.name as tag, bp.id as b_id, bp.description as b_d, ms.endDate, ms.startDate
            FROM App\Entity\MileStone ms 
            LEFT JOIN App\Entity\Project p WITH p.mileStone = ms.id
            LEFT JOIN App\Entity\BulletPoint bp WITH bp.mileStone = ms.id 
            LEFT JOIN App\Entity\BulletPointTag bpt WITH bpt.bulletpoint = bp.id
            LEFT JOIN App\Entity\Tag t WITH t = bpt.tag

            ORDER BY ms.startDate ASC'
        );

        $values = $query->getResult();

        $experiences = [];

        foreach ($values as $milestone) {
            $id = $milestone['id'];

            if (!isset($experiences[$id])) {
                $experiences[$id] = [
                    'name' => $milestone['name'],
                    'description' => $milestone['description'],
                    'endDate' => $milestone['endDate'],
                    'startDate' => $milestone['startDate'],
                    'projects' => [],
                    'tags' => [],
                    'bullets' => []
                ];
            }

            if ($milestone['p_id'] && !isset($experiences[$id]['projects'][$milestone['p_id']])) {
                $experiences[$id]['projects'][$milestone['p_id']] = [
                    'name' => $milestone['p_nm'],
                    'iconref' => $milestone['iconref']
                ];
            }

            if ($milestone['tag'] && !in_array($milestone['tag'], $experiences[$id]['tags'])) {
                $experiences[$id]['tags'][] = $milestone['tag'];
            }

            if ($milestone['b_d'] && !in_array($milestone['b_d'], $experiences[$id]['bullets'])) {
                $experiences[$id]['bullets'][] = $milestone['b_d'];
            }
        }

        return $this->render('timeline_cv/index.html.twig', [
            'timeline_events' => $experiences,
            'tags' => $tags
        ]);
    }

    #[Route('/timeline-cv', name: 'app_timeline_cv')]
    public function getCV(EntityManagerInterface $entityManager, Request $request): Response
    {
        $tagsArray = $request->query->get('tags', []);

        $dql = 'SELECT DISTINCT 
                    ms.id as id, 
                    ms.name, 
                    ms.description, 
                    p.id as p_id, 
                    p.name as p_nm, 
                    p.iconref,
                    t.name as tag, 
                    bp.id as b_id, 
                    bp.description as b_d, 
                    ms.endDate, 
                    ms.startDate
                FROM App\Entity\MileStone ms 
                LEFT JOIN App\Entity\Project p WITH p.mileStone = ms.id
                LEFT JOIN App\Entity\BulletPoint bp WITH bp.mileStone = ms.id 
                LEFT JOIN App\Entity\BulletPointTag bpt WITH bpt.bulletpoint = bp.id
                LEFT JOIN App\Entity\Tag t WITH t = bpt.tag';

        if (!empty($tagsArray)) {
            $dql .= ' WHERE t.name IN (:tags)';
        }

        $dql .= ' ORDER BY ms.startDate ASC';

        $query = $entityManager->createQuery($dql);

        if (!empty($tagsArray)) {
            $query->setParameter('tags', $tagsArray);
        }

        $values = $query->getResult();

        $experiences = [];

        foreach ($values as $milestone) {
            $id = $milestone['id'];

            if (!isset($experiences[$id])) {
                $experiences[$id] = [
                    'name' => $milestone['name'],
                    'description' => $milestone['description'],
                    'endDate' => $milestone['endDate'],
                    'startDate' => $milestone['startDate'],
                    'projects' => [],
                    'tags' => [],
                    'bullets' => []
                ];
            }

            if ($milestone['p_id'] && !isset($experiences[$id]['projects'][$milestone['p_id']])) {
                $experiences[$id]['projects'][$milestone['p_id']] = [
                    'name' => $milestone['p_nm'],
                    'iconref' => $milestone['iconref']
                ];
            }

            if ($milestone['tag'] && !in_array($milestone['tag'], $experiences[$id]['tags'])) {
                $experiences[$id]['tags'][] = $milestone['tag'];
            }

            if ($milestone['b_d'] && !in_array($milestone['b_d'], $experiences[$id]['bullets'])) {
                $experiences[$id]['bullets'][] = $milestone['b_d'];
            }
        }

        // Render the HTML template
        $html = $this->renderView('timeline_cv/cv_template.twig', [
            'timeline_events' => $experiences,
            'tags' => $tagsArray
        ]);

        // Generate the PDF
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Output the generated PDF
        $pdfOutput = $dompdf->output();

        // Create and return the response
        return new Response($pdfOutput, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="timeline_cv.pdf"'
        ]);
    }
}

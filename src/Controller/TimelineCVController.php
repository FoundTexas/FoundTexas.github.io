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
            ms.id as id, ms.name, ms.description, 
            org.name as org_n, loc.name as loc_n,
            p.id as p_id, 
            p.name as p_nm, 
            p.iconref, 
            t.name as tag, 
            bp.id as b_id, bp.description as b_d, ms.endDate, ms.startDate
            FROM App\Entity\MileStone ms 
            LEFT JOIN ms.organization org
            LEFT JOIN org.location loc
            LEFT JOIN App\Entity\Project p WITH p.mileStone = ms.id
            LEFT JOIN App\Entity\BulletPoint bp WITH bp.mileStone = ms.id 
            LEFT JOIN App\Entity\BulletPointTag bpt WITH bpt.bulletpoint = bp.id
            LEFT JOIN App\Entity\Tag t WITH t = bpt.tag

            ORDER BY ms.startDate DESC'
        );

        $values = $query->getResult();
        $experiences = $this->formatExperiences($values);

        return $this->render('timeline_cv/index.html.twig', [
            'timeline_events' => $experiences,
            'tags' => $tags
        ]);
    }

    #[Route('/generate-cv', name: 'app_timeline_cv')]
    public function generateCv(EntityManagerInterface $entityManager, Request $request): Response
    {
        $tags = $request->query->all('tags');

        $query = $entityManager->createQuery(
            'SELECT DISTINCT 
            ms.id as id, ms.name, ms.description, ms.startDate,
            org.name as org_n, loc.name as loc_n,
            t.name as tag, 
            bp.id as b_id, bp.description as b_d, ms.endDate
            FROM App\Entity\MileStone ms 
            INNER JOIN ms.organization org
            INNER JOIN org.location loc
            INNER JOIN App\Entity\BulletPoint bp WITH bp.mileStone = ms.id 
            INNER JOIN App\Entity\BulletPointTag bpt WITH bpt.bulletpoint = bp.id
            INNER JOIN App\Entity\Tag t WITH t = bpt.tag

            WHERE t.name IN (:tagsvalues) AND ms.type = :mstype
            ORDER BY ms.startDate DESC'
        )->setParameter('tagsvalues', $tags);

        $queryWkexp = $query
            ->setParameter('mstype', 'wkexp')
            ->getResult();

        $queryLedac = $query
            ->setParameter('mstype', 'ledac')
            ->getResult();

        $values_wkexp = array_slice($this->formatExperiences($queryWkexp), 0, 3);
        $values_ledac = $this->formatExperiences($queryLedac);

        // Generate HTML content for the PDF
        $html = $this->renderView('timeline_cv/pdf.html.twig', [
            'values_wkexp' => $values_wkexp,
            'values_ledac' => $values_ledac,
            'tags' => $tags,
        ]);

        // Setup Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Output the generated PDF to Browser
        $response = new Response($dompdf->output());
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="cv.pdf"');

        return $response;
    }

    public function formatExperiences($values)
    {
        $experiences = [];

        foreach ($values as $milestone) {
            $id = $milestone['id'];

            if (!isset($experiences[$id])) {
                $experiences[$id] = [
                    'name' => $milestone['name'],
                    'description' => $milestone['description'],
                    'endDate' => $milestone['endDate'],
                    'startDate' => $milestone['startDate'],
                    'organization' => $milestone['org_n'] ?? '',
                    'location' => $milestone['loc_n'] ?? '',
                    'projects' => [],
                    'tags' => [],
                    'bullets' => []
                ];
            }

            if (isset($milestone['p_id']) && $milestone['p_id'] && !isset($experiences[$id]['projects'][$milestone['p_id']])) {
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

        return $experiences;
    }
}

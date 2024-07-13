<?php

namespace App\Controller;

use App\Entity\MileStone;
use App\Entity\Tag;
use App\Entity\BulletPoints;
use App\Entity\Project;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TimelineCVController extends AbstractController
{
    #[Route('/timeline', name: 'app_timeline')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $tags = $entityManager->getRepository(Tag::class)->findAll();
        $mileStones = $entityManager->getRepository(MileStone::class)->findBy([], ['startDate' => 'ASC']);

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

            $experiences[$milestone['id']]['name'] = $milestone['name'];
            $experiences[$milestone['id']]['description'] = $milestone['description'];
            
            $experiences[$milestone['id']]['endDate'] = $milestone['endDate'];
            $experiences[$milestone['id']]['startDate'] = $milestone['startDate'];
            

            if (!isset($experiences[$milestone['id']]['projects'])) {
                $experiences[$milestone['id']]['projects'] = [];
            }
            if (!in_array($milestone['p_id'], $experiences[$milestone['id']]['projects']) && $milestone['p_id']) {
                if ($milestone['p_nm']) {
                    $experiences[$milestone['id']]['projects']['p_id']['name'] = $milestone['p_nm'];
                }
                if ($milestone['iconref']) {
                    $experiences[$milestone['id']]['projects']['p_id']['iconref'] = $milestone['iconref'];
                }
            }

            if (!isset($experiences[$milestone['id']]['tags'])) {
                $experiences[$milestone['id']]['tags'] = [];
            }
            if (!in_array($milestone['tag'], $experiences[$milestone['id']]['tags']) && $milestone['tag']) {
                $experiences[$milestone['id']]['tags'][] = $milestone['tag'];
            }

            if (!isset($experiences[$milestone['id']]['bullets'])) {
                $experiences[$milestone['id']]['bullets'] = [];
            }
            if (!in_array($milestone['b_d'], $experiences[$milestone['id']]['bullets']) && $milestone['b_d']) {
                $experiences[$milestone['id']]['bullets'][] = $milestone['b_d'];
            }
        }

        return $this->render('timeline_cv/index.html.twig', [
            'timeline_events' => $experiences,
            'tags' => $tags
        ]);
    }
}

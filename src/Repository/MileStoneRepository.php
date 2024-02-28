<?php

namespace App\Repository;

use App\Entity\MileStone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MileStone>
 *
 * @method MileStone|null find($id, $lockMode = null, $lockVersion = null)
 * @method MileStone|null findOneBy(array $criteria, array $orderBy = null)
 * @method MileStone[]    findAll()
 * @method MileStone[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MileStoneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MileStone::class);
    }

//    /**
//     * @return MileStone[] Returns an array of MileStone objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MileStone
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

<?php

namespace App\Repository;

use App\Entity\MissionStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MissionStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method MissionStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method MissionStatus[]    findAll()
 * @method MissionStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MissionStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MissionStatus::class);
    }

    // /**
    //  * @return MissionStatus[] Returns an array of MissionStatus objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MissionStatus
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

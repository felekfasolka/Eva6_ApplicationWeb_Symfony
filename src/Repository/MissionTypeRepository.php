<?php

namespace App\Repository;

use App\Entity\MissionType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MissionType|null find($id, $lockMode = null, $lockVersion = null)
 * @method MissionType|null findOneBy(array $criteria, array $orderBy = null)
 * @method MissionType[]    findAll()
 * @method MissionType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MissionTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MissionType::class);
    }

    // /**
    //  * @return MissionType[] Returns an array of MissionType objects
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
    public function findOneBySomeField($value): ?MissionType
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

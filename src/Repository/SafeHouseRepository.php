<?php

namespace App\Repository;

use App\Entity\SafeHouse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SafeHouse|null find($id, $lockMode = null, $lockVersion = null)
 * @method SafeHouse|null findOneBy(array $criteria, array $orderBy = null)
 * @method SafeHouse[]    findAll()
 * @method SafeHouse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SafeHouseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SafeHouse::class);
    }

    // /**
    //  * @return SafeHouse[] Returns an array of SafeHouse objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SafeHouse
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

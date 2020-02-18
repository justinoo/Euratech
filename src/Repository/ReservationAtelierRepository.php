<?php

namespace App\Repository;

use App\Entity\ReservationAtelier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ReservationAtelier|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationAtelier|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationAtelier[]    findAll()
 * @method ReservationAtelier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationAtelierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationAtelier::class);
    }

    // /**
    //  * @return ReservationAtelier[] Returns an array of ReservationAtelier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReservationAtelier
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

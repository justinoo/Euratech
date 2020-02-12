<?php

namespace App\Repository;

use App\Entity\Euratech;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Euratech|null find($id, $lockMode = null, $lockVersion = null)
 * @method Euratech|null findOneBy(array $criteria, array $orderBy = null)
 * @method Euratech[]    findAll()
 * @method Euratech[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EuratechRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Euratech::class);
    }

    // /**
    //  * @return Euratech[] Returns an array of Euratech objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Euratech
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

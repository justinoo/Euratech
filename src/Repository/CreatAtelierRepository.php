<?php

namespace App\Repository;

use App\Entity\CreatAtelier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CreatAtelier|null find($id, $lockMode = null, $lockVersion = null)
 * @method CreatAtelier|null findOneBy(array $criteria, array $orderBy = null)
 * @method CreatAtelier[]    findAll()
 * @method CreatAtelier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreatAtelierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CreatAtelier::class);
    }

    // /**
    //  * @return CreatAtelier[] Returns an array of CreatAtelier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CreatAtelier
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

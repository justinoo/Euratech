<?php

namespace App\Repository;

use App\Entity\NomAtelier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method NomAtelier|null find($id, $lockMode = null, $lockVersion = null)
 * @method NomAtelier|null findOneBy(array $criteria, array $orderBy = null)
 * @method NomAtelier[]    findAll()
 * @method NomAtelier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NomAtelierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NomAtelier::class);
    }

    // /**
    //  * @return NomAtelier[] Returns an array of NomAtelier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NomAtelier
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

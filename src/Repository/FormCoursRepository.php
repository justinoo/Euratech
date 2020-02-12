<?php

namespace App\Repository;

use App\Entity\FormCoursType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FormCoursType|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormCoursType|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormCoursType[]    findAll()
 * @method FormCoursType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormCoursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormCoursType::class);
    }

    // /**
    //  * @return FormCours[] Returns an array of FormCours objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FormCours
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

<?php

namespace App\Repository;

use App\Entity\CreateAtelier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CreateAtelier|null find($id, $lockMode = null, $lockVersion = null)
 * @method CreateAtelier|null findOneBy(array $criteria, array $orderBy = null)
 * @method CreateAtelier[]    findAll()
 * @method CreateAtelier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreateAtelierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CreateAtelier::class);
    }

    public function findAteliers($atelier)
    {
        $atelier = $this->getDoctrine()->getRepository(CreateAtelier::class)->findAll();
        return $this->render('ateliers/ateliers.html.twig', [
            'atelier' => $atelier
        ]);

    }


    // /**
    //  * @return CreateAtelier[] Returns an array of CreateAtelier objects
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
    public function findOneBySomeField($value): ?CreateAtelier
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

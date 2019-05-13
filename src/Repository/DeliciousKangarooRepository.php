<?php

namespace App\Repository;

use App\Entity\DeliciousKangaroo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DeliciousKangaroo|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeliciousKangaroo|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeliciousKangaroo[]    findAll()
 * @method DeliciousKangaroo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeliciousKangarooRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DeliciousKangaroo::class);
    }

    // /**
    //  * @return DeliciousKangaroo[] Returns an array of DeliciousKangaroo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DeliciousKangaroo
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

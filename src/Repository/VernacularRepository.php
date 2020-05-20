<?php

namespace App\Repository;

use App\Entity\Vernacular;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Vernacular|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vernacular|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vernacular[]    findAll()
 * @method Vernacular[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VernacularRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vernacular::class);
    }

    // /**
    //  * @return Vernacular[] Returns an array of Vernacular objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Vernacular
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

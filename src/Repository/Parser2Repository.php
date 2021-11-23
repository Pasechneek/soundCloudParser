<?php

namespace App\Repository;

use App\Entity\Parser2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Parser2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Parser2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Parser2[]    findAll()
 * @method Parser2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Parser2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Parser2::class);
    }

    // /**
    //  * @return Parser2[] Returns an array of Parser2 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Parser2
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

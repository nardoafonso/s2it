<?php

namespace App\Repository;

use App\Entity\Shiporder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Shiporder|null find($id, $lockMode = null, $lockVersion = null)
 * @method Shiporder|null findOneBy(array $criteria, array $orderBy = null)
 * @method Shiporder[]    findAll()
 * @method Shiporder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShiporderRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Shiporder::class);
    }

//    /**
//     * @return Shiporder[] Returns an array of Shiporder objects
//     */
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
    public function findOneBySomeField($value): ?Shiporder
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

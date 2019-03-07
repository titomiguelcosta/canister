<?php

namespace App\Repository;

use App\Entity\Canister;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Canister|null find($id, $lockMode = null, $lockVersion = null)
 * @method Canister|null findOneBy(array $criteria, array $orderBy = null)
 * @method Canister[]    findAll()
 * @method Canister[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CanisterRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Canister::class);
    }

    // /**
    //  * @return Canister[] Returns an array of Canister objects
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
    public function findOneBySomeField($value): ?Canister
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

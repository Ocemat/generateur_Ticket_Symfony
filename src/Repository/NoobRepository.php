<?php

namespace App\Repository;

use App\Entity\Noob;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Noob|null find($id, $lockMode = null, $lockVersion = null)
 * @method Noob|null findOneBy(array $criteria, array $orderBy = null)
 * @method Noob[]    findAll()
 * @method Noob[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NoobRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Noob::class);
    }

    // /**
    //  * @return Noob[] Returns an array of Noob objects
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
    public function findOneBySomeField($value): ?Noob
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

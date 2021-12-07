<?php

namespace App\Repository;

use App\Entity\DepartmentFr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DepartmentFr|null find($id, $lockMode = null, $lockVersion = null)
 * @method DepartmentFr|null findOneBy(array $criteria, array $orderBy = null)
 * @method DepartmentFr[]    findAll()
 * @method DepartmentFr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepartmentFrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DepartmentFr::class);
    }

    // /**
    //  * @return DepartmentFr[] Returns an array of DepartmentFr objects
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
    public function findOneBySomeField($value): ?DepartmentFr
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

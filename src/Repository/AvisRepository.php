<?php

namespace App\Repository;

use App\Entity\Avis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Avis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Avis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Avis[]    findAll()
 * @method Avis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Avis::class);
    }

    // /**
    //  * @return Avis[] Returns an array of Avis objects
    //  */
    
    public function getAvgScoreGrouppedByHotel()
    {
        return $this->createQueryBuilder('a')->addSelect("AVG(a.avisScore) as value ")->addSelect("MAX(a.hotel) as label")
            ->groupBy('a.hotel')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function getSumScoreGrouppedByHotel()
    {
        return $this->createQueryBuilder('a')->addSelect("SUM(a.avisScore) as value ")->addSelect("MAX(a.hotel) as label")
            ->groupBy('a.hotel')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function checkIfUserRatedHotel($user , $hotel)
    {
        return $this->createQueryBuilder('a')
        ->andWhere('a.hotel = :h')
        ->andWhere('a.Utilisateur = :u')
        ->setParameter('h', $hotel)
        ->setParameter('u', $user)
        ->getQuery()
        ->getOneOrNullResult()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?Avis
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

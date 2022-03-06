<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    // /**
    //  * @return Reservation[] Returns an array of Reservation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reservation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */



    //*****************CONFIRMATION RESERVATION***********
    public function traiterres($idrs) {
        $em = $this->getEntityManager();
        $query = $em->createQueryBuilder(); // dql

        $etat = $query->update('App\Entity\Reservation','rs')
            ->set('rs.etat','?1')
            ->where('rs.id = ?2')
            ->setParameter(1,true)
            ->setParameter(2,$idrs)
            ->getQuery()->getResult();

    }


    //*************EFFACER ENCIEN RESERVATION************************

    public function mise_a_joure()
    {

        $conn = $this->getEntityManager()->getConnection();

        $sql = '
           DELETE FROM `Reservation` WHERE DQUITTE < CURRENT_DATE ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();


    }

}

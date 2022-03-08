<?php

namespace App\Repository;

use App\Entity\Hotel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Hotel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hotel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hotel[]    findAll()
 * @method Hotel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HotelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hotel::class);
    }

    // /**
    //  * @return Hotel[] Returns an array of Hotel objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hotel
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */



    //*****************RECHERCHE*****************




    public function findUser($valueemail,$order){
        $em = $this->getEntityManager();
        if($order=='DESC') {
            $query = $em->createQuery(
                'SELECT r FROM App\Entity\Hotel r   where r.nom like :nomm order by r.id DESC '
            );
            $query->setParameter('nomm', $valueemail . '%');
        }
        else{
            $query = $em->createQuery(
                'SELECT r FROM App\Entity\Hotel r   where r.nom like :nomm  order by r.id ASC '
            );
            $query->setParameter('nomm', $valueemail . '%');
        }
        return $query->getResult();
    }

//****************STAT*******************************




    public function find_Nb_hotel_Par_Etat($etat){

        $em = $this->getEntityManager();

        $query = $em->createQuery(
            'SELECT DISTINCT  count(h.id) FROM   App\Entity\Hotel h  where h.etat = :etat   '
        );
        $query->setParameter('etat', $etat);
        return $query->getResult();
    }





}

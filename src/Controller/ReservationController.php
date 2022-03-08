<?php

namespace App\Controller;

use App\Entity\Hotel;
use App\Entity\Reservation;
use http\Env\Request;
use Knp\Component\Pager\PaginatorInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }



    /**
     * @Route("/ListeReservationreservationbyidClint", name="reservationCLIENT")
     */
    public function listeresarvationClient(PaginatorInterface $paginator,\Symfony\Component\HttpFoundation\Request $request): Response
    {

        $requestsql = $this->getDoctrine()->getRepository(Reservation::class)->mise_a_joure();


        $res = $this->getDoctrine()->getManager()->getRepository(Reservation::class)->findAll();

        $reservation =$paginator->paginate(
            $res,
            $request->query->getInt('page',1),6
        );



        return $this->render('hotel/frontListeReservation.html.twig',array('rescl'=>$reservation));



    }


    /**
     * @Route("/ListeReservationreservationAdmin", name="reservationADMIN")
     */
    public function listeresarvationadmin(PaginatorInterface $paginator,\Symfony\Component\HttpFoundation\Request $request): Response
    {
        $res = $this->getDoctrine()->getManager()->getRepository(Reservation::class)->findAll();


        $reservation =$paginator->paginate(
            $res,
            $request->query->getInt('page',1),6
        );

        return $this->render('hotel/listeReservation.html.twig',array('res'=>$reservation));
    }


    /**
     * @Route("/supprimer_Reservation/{id}", name="suppressionReservation")
     */
    public function  supprimerReservation($id,FlashyNotifier $flashy) {
        $em= $this->getDoctrine()->getManager();
        $i = $em->getRepository(Reservation::class)->find($id);

        $em->remove($i);
        $em->flush();

        $flashy->error('Réservation bien Annulée', 'http://your-awesome-link.com');
        return $this->redirectToRoute("reservationCLIENT");

    }



    //traitment reservation

    /**
     * @Route("/traiterr/{idrs}", name="aaaa")
     */
    public function traiterReservation($idrs) {

        $em = $this->getDoctrine()->getManager();
        $etat = $em->getRepository(Reservation::class)->traiterres($idrs);
        $em->flush();
        return $this->redirectToRoute('reservationADMIN');
    }
//**********************************************


}

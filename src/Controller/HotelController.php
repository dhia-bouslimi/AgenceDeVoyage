<?php

namespace App\Controller;

use App\Entity\Hotel;
use App\Form\HotelType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HotelController extends AbstractController
{
    /**
     * @Route("/hotel", name="hotel")
     */
    public function index(): Response
    {
        return $this->render('hotel/hotels.html.twig', [
            'controller_name' => 'HotelController',
        ]);
    }



    /**
     * @Route("/ajouthotel", name="ajoutHotel")
     */
    public function addhotel(Request  $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $hotel = new Hotel();
        $form= $this->createForm(HotelType::class,$hotel);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {


            $em->persist($hotel);

            $em->flush();

            return  $this->redirectToRoute('hotel_list');

        }

        return $this->render('hotel/ajout.html.twig',array("f"=>$form->createView()));

    }


    /**
     * @Route("/listehotels", name="hotel_list")
     */
    public function listhotel(): Response
    {

        $res = $this->getDoctrine()->getManager()->getRepository(Hotel::class)->findAll();
        return $this->render('hotel/listehotel.html.twig',array('hotels'=>$res));
    }


    /**
     * @Route("/supprimer_hotel/{id}", name="suppression")
     */
    public function  supprimerhotel($id) {
        $em= $this->getDoctrine()->getManager();
        $i = $em->getRepository(Hotel::class)->find($id);

        $em->remove($i);
        $em->flush();

        return $this->redirectToRoute("hotel_list");

    }

    /**
     * @Route("/modifier_hotel/{id}", name="modification")
     */
    public function modifierProduit(\Symfony\Component\HttpFoundation\Request $req, $id) {
        $em= $this->getDoctrine()->getManager();
        $prod = $em->getRepository(Hotel::class)->find($id);
        $form = $this->createForm(HotelType::class,$prod);
        $form->handleRequest($req);

        if($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('hotel_list');

        }

        return $this->render('hotel/modifier_hotel.html.twig',array("f"=>$form->createView()));


    }


}

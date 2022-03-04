<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Entity\Hotel;
use App\Entity\Reservation;
use App\Form\HotelType;
use App\Form\ReservationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormTypeInterface;


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

            //upload image
            $uploadFile = $form['image']->getData(); // valeur  image
            $filename = md5(uniqid()) . '.' .$uploadFile->guessExtension();//crypter image

            $uploadFile->move($this->getParameter('kernel.project_dir').'/public/uploads/hotel_image',$filename);


            $hotel->setImage($filename);

            //-----------

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

            //upload image
            $uploadFile = $form['image']->getData(); // valeur  image
            $filename = md5(uniqid()) . '.' .$uploadFile->guessExtension();//crypter image

            $uploadFile->move($this->getParameter('kernel.project_dir').'/public/uploads/hotel_image',$filename);


            $prod->setImage($filename);

            //-----------
            $em->flush();

            return $this->redirectToRoute('hotel_list');

        }

        return $this->render('hotel/modifier_hotel.html.twig',array("f"=>$form->createView()));


    }



    /**
     * @Route("/detail_hotel/{id}", name="detailhotel")
     */
    public function detailHotel(\Symfony\Component\HttpFoundation\Request $req, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $hotel = $em->getRepository(Hotel::class)->find($id);


        return $this->render('hotel/detail_Hotel.html.twig', array(
            'id' => $hotel->getId(),
            'nom' => $hotel->getNom(),
            'address' => $hotel->getAddress(),
            'etoile' => $hotel->getEtoile(),
            'etat'=>$hotel->getEtat(),
            'nbrChambre'=>$hotel->getNbrChambre(),
            'image'=>$hotel->getImage(),
            'description'=>$hotel->getDescription(),

        ));
    }


    //------------------------front-------------------------------------------------
    /**
     * @Route("/frontListhotel", name="frontListhotel")
     */
    public function indexFrontHotel(): Response
    {

        $res = $this->getDoctrine()->getManager()->getRepository(Hotel::class)->findAll();
        return $this->render('hotel/frontListHotels.html.twig',array('hotels'=>$res));

    }



    // SHOW Rooms BY hotel ID BECAUES JJOINTURE:
     //FrontAfficheChambreByHotel.html.twig
    /**
     * @Route("/FrontAfficheChambreByHotel/{id}", name="showChambres")
     */
    public function showProducts(\Symfony\Component\HttpFoundation\Request $req, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $hotel = $em->getRepository(Hotel::class)->find($id);

       // var_dump($hotel); die();

        $chambres = $em->getRepository(Chambre::class)->findBy(['hotel'=>$hotel]);

      /*  foreach ($chambres as $p) {
             var_dump($chambres);

        }
        ; die();
*/

        //'namecar'=>$categorie->getName()

        return $this->render('hotel/FrontAfficheChambreByHotel.html.twig', array('chambres'=>$chambres,'hotelimg'=>$hotel->getImage()

        ));
    }




    //-----------------add-----Reservation------------------------------------------------
    /**
     * @Route("/notifajoutres", name="notifajoutres")
     */
    public function notifajoutres(): Response
    {
        return $this->render('hotel/notifAjout.html.twig');
    }


    /**
     * @Route("/addReservation/{idc}", name="addReservation")
     */
    public function addResevation(\Symfony\Component\HttpFoundation\Request  $request, $idc): Response
    {
        $em = $this->getDoctrine()->getManager();
        $reservation = new Reservation();
        $form= $this->createForm(ReservationType::class,$reservation);




        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {


            $em = $this->getDoctrine()->getManager();
            $chamb= $em->getRepository(Chambre::class)->find($idc);


           $reservation->setChambre($chamb);

           // var_dump($idc);die();

            //nbr jour de reservation
            $nbrjour =$reservation->getDquitte()->diff($reservation->getDarrive());

            //prix total statique pour le moment
            $reservation->setPrixTotal(500);






           // $date = new \DateTime('@'.strtotime('now'));

            /*
             * Add Category
             */
            $em->persist($reservation);
            /*
             * Commit
             */
           $em->flush();

          return  $this->redirectToRoute('notifajoutres');

        }

        return $this->render('hotel/frontReserverhotel.html.twig',array("f"=>$form->createView()));

    }



}

<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Entity\Hotel;
use App\Entity\Reservation;
use App\Form\HotelType;
use App\Form\ReservationType;
use App\Repository\HotelRepository;
use Knp\Component\Pager\PaginatorInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


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
    public function addhotel(Request  $request,FlashyNotifier $flashy): Response
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
    public function listhotel(PaginatorInterface $paginator,Request $request): Response
    {

        $res = $this->getDoctrine()->getManager()->getRepository(Hotel::class)->findAll();



        $hotels =$paginator->paginate(
            $res,
            $request->query->getInt('page',1),6
        );

        return $this->render('hotel/listehotel.html.twig',array('hotels'=>$hotels));
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
    public function indexFrontHotel(
        PaginatorInterface $paginator,
        Request $request

    ): Response
    {




        $res = $this->getDoctrine()->getManager()->getRepository(Hotel::class)->findAll();
         $hotels =$paginator->paginate(
             $res,
             $request->query->getInt('page',1),3
         );




        return $this->render('hotel/frontListHotels.html.twig',array('hotels'=>$hotels));



    }



    // SHOW Rooms BY hotel ID BECAUES JJOINTURE:
     //FrontAfficheChambreByHotel.html.twig
    /**
     * @Route("/FrontAfficheChambreByHotel/{id}", name="showChambres")
     */
    public function showProducts(\Symfony\Component\HttpFoundation\Request $req, $id,
     PaginatorInterface $paginator,
     Request $request
)
    {
        $em = $this->getDoctrine()->getManager();
        $hotel = $em->getRepository(Hotel::class)->find($id);

       // var_dump($hotel); die();

        $chambres = $em->getRepository(Chambre::class)->findBy(['hotel'=>$hotel]);


        $chamb =$paginator->paginate(
            $chambres,
            $request->query->getInt('page',1),4
        );

      /*  foreach ($chambres as $p) {
             var_dump($chambres);
        }
        ; die();
*/
        //'namecar'=>$categorie->getName()

        return $this->render('hotel/FrontAfficheChambreByHotel.html.twig', array('chambres'=>$chamb,'hotelimg'=>$hotel->getImage()

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
    public function addResevation(\Symfony\Component\HttpFoundation\Request  $request, $idc,
                                  FlashyNotifier $flashy
    ): Response
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
            $nbrjour=$nbrjour->format('%d');

            //get prix chambre
            $x=$chamb->getPrixParNuit();

           // var_dump( $x);die();

            //prix total statique pour le moment
            $reservation->setPrixTotal($nbrjour*$x+$x);

            $reservation->setEtat(0);






           // $date = new \DateTime('@'.strtotime('now'));

            /*
             * Add Category
             */
            $em->persist($reservation);
            /*
             * Commit
             */
           $em->flush();


            $flashy->success('reservation bien ajoute!', 'http://your-awesome-link.com');


            return  $this->redirectToRoute('reservationCLIENT');

        }

        return $this->render('hotel/frontReserverhotel.html.twig',array("f"=>$form->createView()));

    }



    //***********front***detals Reservation**************

  //  /**
    // * @Route("/detailsreservation", name="detailsreservation")
   //  */
   // public function detailsreservation(): Response
  // {
   //     return $this->render('hotel/frontDetailsReservation.html.twig');
   // }


    //*************************

    /**
     * @Route("/detailsreservation/{id}", name="detailsreservation")
     */
    public function detailsreservation(\Symfony\Component\HttpFoundation\Request $req, $id,
                                 PaginatorInterface $paginator,
                                 Request $request
    )
    {
        $em = $this->getDoctrine()->getManager();

        $reservation = $em->getRepository(Reservation::class)->find($id);

        $chambres = $em->getRepository(Chambre::class)->find($reservation->getChambre());

        $hotel = $em->getRepository(Hotel::class)->find($chambres->getHotel());





       // var_dump($hotel); die();

        return $this->render('hotel/frontDetailsReservation.html.twig',
            array('reservation'=>$reservation,
                  'chambres'=>$chambres,
                  'hotel'=>$hotel,
            ));
    }





//****************RECHERCHE*******








    /**
     * @Route("/r/search_user", name="search_user", methods={"GET"})
     */
    public function search_usere(Request $request,NormalizerInterface $Normalizer,HotelRepository $hrp ): Response
    {

        $requestString=$request->get('searchValue');
        $requestString3=$request->get('orderid');
        //dump($requestString);
        // dump($requestString2);
        $user = $hrp->findUser($requestString,$requestString3);
        //dump($Hotel);
        $jsoncontentc =$Normalizer->normalize($user,'json',['groups'=>'posts:read']); //jeson format
        //  dump($jsoncontentc);
        $jsonc=json_encode($jsoncontentc);
        //   dump($jsonc);
        if(  $jsonc == "[]" ) { return new Response(null); }
        else{ return new Response($jsonc); }

    }





//*****************STAT******************


    /**
     * @Route("/hotelStat", name="hotelstat", methods={"GET"})
     */
    public function Hotel_stat(HotelRepository $hotelRepository): Response
    {
        $nbrs[]=Array();

        $e1=$hotelRepository->find_Nb_hotel_Par_Etat("Disponible");
        dump($e1);
        $nbrs[]=$e1[0][1];


        $e2=$hotelRepository->find_Nb_hotel_Par_Etat("non Disponible");
        dump($e2);
        $nbrs[]=$e2[0][1];



        dump($nbrs);
        reset($nbrs);
        dump(reset($nbrs));
        $key = key($nbrs);
        dump($key);
        dump($nbrs[$key]);

        unset($nbrs[$key]);

        $nbrss=array_values($nbrs);
        dump(json_encode($nbrss));

        return $this->render('hotel/stathotel.html.twig', [
            'nbr' => json_encode($nbrss),
        ]);
    }





//**********************************************excell*******************




//liste des hotels dans la base
    public function getData() :array
    {
        /**
         * @var $Hotel Hotel[]
         */
        $list = [];

        $hotel = $this->getDoctrine()->getRepository(Hotel::class)->findAll();

        foreach ($hotel as $Hotel) {
            $list[] = [
                $Hotel->getId(),
                $Hotel->getNom(),
                $Hotel->getEtat(),
                $Hotel->getAddress(),
                $Hotel->getEtoile(),
            ];
        }
        return $list;
    }


    /**
     * @Route("/excel/export",  name="export")
     */
    public function export()
    {
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setTitle('Hotel List');

        $sheet->getCell('A1')->setValue('id');
        $sheet->getCell('B1')->setValue('nom');
        $sheet->getCell('C1')->setValue('etat');
        $sheet->getCell('D1')->setValue('address');
        $sheet->getCell('E1')->setValue('etoile');

        // Increase row cursor after header write
        $sheet->fromArray($this->getData(),null, 'A2', true);
        $writer = new Xlsx($spreadsheet);
        // $writer->save('ss.xlsx');
        $writer->save('Hotel'.date('m-d-Y_his').'.xlsx');
        return $this->redirectToRoute('hotel_list');

    }











}

<?php

namespace App\Controller;

use App\Entity\Billet;
use App\Repository\BilletRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use App\Form\VolType;
use App\Entity\Vol;
use Knp\Component\Pager\PaginatorInterface;

use Symfony\Component\HttpFoundation\File\File;


use Symfony\Component\HttpFoundation\Request;

class VolController extends Controller
{
    /**
     * @Route("/vol", name="vol")
     */
    public function index(): Response
    {
        return $this->render('vol/vol.html.twig', [
            'controller_name' => 'VolController',
        ]);
    }

    /**
     * @Route("/volList", name="volList")
     */
    public function readvol()
    {
        $repository = $this->getDoctrine()->getRepository(Vol::class);
        $Vols = $repository->findAll();

        return $this->render('vol/listeVol.html.twig', [
            'Vols' => $Vols,
        ]);
    }

    /**
     * @Route("/creat-vol", name="create")
     */
    public function create(Request $request)
    {
        $Vol = new Vol();
        $form = $this->createForm(VolType ::class, $Vol);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $Vol = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($Vol);
            $em->flush();
            return $this->redirectToRoute('volList');
        }
        return $this->render('vol/create.html.twig', [
            'formA' => $form->createView()
        ]);
    }

    /**
     * @Route("/edit_vol/{id}", name="edit_vol")
     */
    public function edit(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $Vol = $em->getRepository(Vol::class)->find($id);
        $form = $this->createForm(VolType::class, $Vol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('volList');

        }

        return $this->render('vol/modifierVol.html.twig', array("formA" => $form->createView()));


    }

    /**
     * @Route("/deletevol/{id}",name="delete_vol")
     */
    public function delete(Request $request, $id)
    {
        $Vol = $this->getDoctrine()->getRepository(Vol::class)->find($id);


        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($Vol);
        $entityManager->flush();

        $response = new Response();
        $response->send();
        return $this->redirectToRoute('volList');
    }

    /**
     * @Route("/detail_vol/{id}", name="detail")
     */
    public function detailVol(\Symfony\Component\HttpFoundation\Request $req, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $vol = $em->getRepository(Vol::class)->find($id);


        return $this->render('vol/detail.html.twig', array(
            'id' => $vol->getId(),
            'type' => $vol->getType(),
            'depart' => $vol->getDepart(),
            'arrive' => $vol->getArrive(),
            'duree' => $vol->getDuree(),
            'destination' => $vol->getDestination(),
            'place' => $vol->getPlace()
        ));
    }
//------------------------front-----------------------------------

    /**
     * @Route("/frontvol", name="frontvol")
     */
    public function indexFrontVol(Request $request, PaginatorInterface $paginator)
    {

        $repo = $this ->getDoctrine()->getRepository(Vol::class);
        $Vols=$repo->findAll();


        $Vols = $this->get('knp_paginator')->paginate(
        // Doctrine Query, not results
            $Vols,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
          3
        );


        return $this->render('Client/vol/listvol.html.twig', [
                'controller_name' => 'VolController',
            'Vols' => $Vols

        ]);


    }





    // show Billet By VOL ID  y'a une jointure




    /**
     * @Route("/show_billet_cat/{id}", name="show_billet")
     */
    public function ShowBillet(\Symfony\Component\HttpFoundation\Request $req, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $voll = $em->getRepository(Vol::class)->find($id);

        $billet = $em->getRepository(Billet::class)->findBy(['vol'=>$voll]);
        return $this->render('Client/vol/showBilletByVol.html.twig', array('billets'=>$billet,
        ));
    }


    // SEARCH

    /**
     * @Route("/ajax_search/", name="ajax_search")
     */
    public function chercherVol(\Symfony\Component\HttpFoundation\Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');// ooofkdokfdfdf
        $vols =  $em->getRepository(Vol::class)->rechercheAvance($requestString);
        if(!$vols) {
            $result['vols']['error'] = "Vol non trouvé :( ";
        } else {
            $result['vols'] = $this->getRealEntities($vols);
        }
        return new Response(json_encode($result));
    }

    public function getRealEntities($vols){
        foreach ($vols as $vols){
            $realEntities[$vols->getId()] = [$vols->getType(),$vols->getDestination(),$vols->getPlace()];

        }
        return $realEntities;
    }



    /**
     * @Route("/detailfront/{id}", name="detailfront")
     */
    public function detailVolFront(\Symfony\Component\HttpFoundation\Request $req, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $vol = $em->getRepository(Vol::class)->find($id);


        return $this->render('Client/vol/detailfront.html.twig', array(
            'id' => $vol->getId(),
            'type' => $vol->getType(),
            'depart' => $vol->getDepart(),
            'arrive' => $vol->getArrive(),
            'duree' => $vol->getDuree(),
            'destination' => $vol->getDestination(),
            'place' => $vol->getPlace()
        ));
    }






        /**
         * @Route("/show_billet_pdf/{id}", name="showpdf") win path ta3 show bileet fi view warinii
         */
        public function Showbilletpdf(\Symfony\Component\HttpFoundation\Request $req, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $billet = $em->getRepository(Billet::class)->find($id);



        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('Client/vol/mypdf.html.twig', [
            'type' => $billet->getType(),
            'prix' => $billet->getPrix(),
            'vol'=> $billet->getVol(),

        ]);


        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }










    }

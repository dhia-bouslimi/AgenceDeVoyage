<?php

namespace App\Controller;


use App\Form\LocationType;
use App\Entity\Location;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LocationController extends AbstractController
{
    /**
     * @Route("/location", name="location_list")
     */
    public function index(): Response
    {
        $res = $this->getDoctrine()->getManager()->getRepository(location::class)->findAll();
        return $this->render('location/ListLocation.html.twig', array('Locations' => $res));
    }

    /**
     * @Route("/addlocation", name="add_location")
     */
    public function addlocation(\Symfony\Component\HttpFoundation\Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $location = new Location();
        $form = $this->createForm(locationType::class, $location);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $em->persist($location);
            /*
             * Commit
             */
            $em->flush();

            return $this->redirectToRoute('location_front');

        }

        return $this->render('location/Addlocation.html.twig', array("f" => $form->createView()));

    }

    /**
     * @Route("/editlocation/{id}", name="edit_location")
     * Method({"GET", "POST"})
     */
    public function edit(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $location = new location();
        $location = $this->getDoctrine()->getRepository(location::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $location = $em->getRepository(location::class)->find($id);
        $form = $this->createForm(locationType::class, $location);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('location_list');

        }

        return $this->render('location/editLocation.html.twig', array("f" => $form->createView()));
    }

    /**
     * @Route("/deleteLocation/{id}",name="delete_Location")
     */
    public function deletelocation(Request $request, $id)
    {
        $location = $this->getDoctrine()->getRepository(location::class)->find($id);


        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($location);
        $entityManager->flush();

        $response = new Response();
        $response->send();
        return $this->redirectToRoute('location_list');
    }

    /**
     * @Route("/detailLocation/{id}", name="detail_Location")
     */
    public function detailLocation(\Symfony\Component\HttpFoundation\Request $req, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $location = $em->getRepository(location::class)->find($id);


        return $this->render('location/detailLocation.html.twig', array(
            'id' => $location->getId(),
            'voiture' => $location->getVoiture(),
            'date_debut' => $location->getdate_debut(),
            'date_fin' => $location->getdate_fin(),



        ));


    }

    //LOcation list front:

    /**
     * @Route("/location_front", name="location_front")
     */
    public function listLocationsFront(): Response
    {
        $res = $this->getDoctrine()->getManager()->getRepository(location::class)->findAll();
        return $this->render('location/ListLocationFront.html.twig', array('Locations' => $res));
    }

}
<?php

namespace App\Controller;

use App\Entity\Billet;
use App\Form\BilletType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;


class BilletController extends AbstractController
{
    /**
     * @Route("/billet", name="billet")
     */
    public function index(): Response
    {
        return $this->render('vol/billet.html.twig', [
            'controller_name' => 'BilletController',
        ]);
    }


    /**
     * @Route("/billetList", name="billetList")
     */
    public function readbillet()
    {
        $repository = $this->getDoctrine()->getRepository(Billet::class);
        $Billets = $repository->findAll();

        return $this->render('vol/listeBillet.html.twig', [
            'Billets' => $Billets,
        ]);
    }

    /**
     * @Route("/creat-billet", name="createbillet")
     */
    public function create(Request $request)
    {
        $Billet = new Billet();
        $form = $this->createForm(BilletType::class, $Billet);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $Billet = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($Billet);
            $em->flush();
            return $this->redirectToRoute('billetList');
        }
        return $this->render('vol/createB.html.twig', [
            'formB' => $form->createView()
        ]);
    }


    /**
     * @Route("/edit_billet/{id}", name="edit_billet")
     */
    public function edit(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $Billet = $em->getRepository(Billet::class)->find($id);
        $form = $this->createForm(BilletType::class, $Billet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('billetList');

        }

        return $this->render('vol/modifierBillet.html.twig', array("formB" => $form->createView()));


    }



    /**
     * @Route("/deletebillet/{id}",name="delete_billet")
     */
    public function delete(Request $request, $id) {
        $Billet= $this->getDoctrine()->getRepository(Billet::class)->find($id);


        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($Billet);
        $entityManager->flush();

        $response = new Response();
        $response->send();
        return $this->redirectToRoute('billetList');
    }


//front








    }




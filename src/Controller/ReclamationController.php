<?php

namespace App\Controller;

use App\Entity\Reclamation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationController extends AbstractController
{


    
    /**
     * @Route("/reclamationadmin", name="reclamationadmin")
     */
    public function index(): Response
    {
        return $this->render('reclamation/reclamationadmin.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }


}
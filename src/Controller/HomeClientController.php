<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeClientController extends AbstractController
{
    /**
     * @Route("/home/clientt", name="home_client")
     */
    public function index(): Response
    {
        return $this->render('base2.html.twig', [
            'controller_name' => 'HomeClientController',
        ]);
    }
}

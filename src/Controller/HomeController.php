<<<<<<< Updated upstream
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {

        //user connected
        $user = $this->container->get('security.token_storage')->getToken()->getUser()->getName();

        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController','user' =>$user
        ]);
    }
}
=======
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('base3.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
>>>>>>> Stashed changes

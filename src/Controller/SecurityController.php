<?php

namespace App\Controller;
<<<<<<< Updated upstream
use App\Form\UserType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
=======

use App\Form\UserType;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;


use Swift_Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;


>>>>>>> Stashed changes


class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
<<<<<<< Updated upstream
=======
     * @param AuthenticationUtils $authenticationUtils
     * @param $user
     * @return Response
>>>>>>> Stashed changes
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        $em = $this->getDoctrine()->getManager();


<<<<<<< Updated upstream

        // get the login error if there is one





=======
        // get the login error if there is one


>>>>>>> Stashed changes
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();


        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }



<<<<<<< Updated upstream
=======



>>>>>>> Stashed changes
    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
}


<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @Route("/register", name="registration")
     */
    public function index(Request $request)
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Encode the new users password
            $user->setPassword($this->passwordEncoder->encodePassword($user, $user->getPassword()));

            // Set their role

<<<<<<< Updated upstream
            $user->setRoles(['ROLE_USER']);
=======
            $user->setRoles(['ROLE_ADMIN']);
>>>>>>> Stashed changes


            // Save
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

<<<<<<< Updated upstream
            return $this->redirectToRoute('usersfront_list');
=======
            return $this->redirectToRoute('users_list');
>>>>>>> Stashed changes
        }

        return $this->render('registration/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
<<<<<<< Updated upstream
     * @Route("/registeration", name="registration_admin")
     */
    public function admin(Request $request)
=======
     * @Route("/addUsersfront", name="registration_client")
     */
    public function front(Request $request)
>>>>>>> Stashed changes
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Encode the new users password
            $user->setPassword($this->passwordEncoder->encodePassword($user, $user->getPassword()));

            // Set their role

<<<<<<< Updated upstream
            $user->setRoles(['ROLE_ADMIN']);
=======
            $user->setRoles(['ROLE_USER']);
>>>>>>> Stashed changes


            // Save
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

<<<<<<< Updated upstream
            return $this->redirectToRoute('users_list');
        }

        return $this->render('registration/admin.html.twig', [
=======
            return $this->redirectToRoute('home_client');
        }

        return $this->render('users/addUsersfront.html.twig', [
>>>>>>> Stashed changes
            'form' => $form->createView(),
        ]);
    }
}
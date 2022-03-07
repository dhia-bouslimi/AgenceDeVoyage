<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;





class UsersController extends AbstractController
{
    /**
     * @Route("/users", name="users_list")
     */
    public function index(): Response
    {

        $res = $this->getDoctrine()->getManager()->getRepository(User::class)->findAll();
        return $this->render('users/listUsers.html.twig',array('user'=>$res));
    }
    /**
     * @Route("/usersfront", name="usersfront_list")
     */
    public function affich(): Response
    {

        $res = $this->getDoctrine()->getManager()->getRepository(User::class)->findAll();
        return $this->render('users/listUsersfront.html.twig',array('user'=>$res));
    }


<<<<<<< Updated upstream
    /**
     * @Route("/addUsers", name="add")
     */
    public function addUsers(\Symfony\Component\HttpFoundation\Request  $request,UserPasswordEncoderInterface $encoder): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $form= $this->createForm(UserType::class,$user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {


            /*
             * Add product
             */
            $hash= $encoder->encodePassword($user,$user->getPassword());
            $user->setPassword($hash);
            $em->persist($user);
            /*
             * Commit
             */
            $em->flush();

            return  $this->redirectToRoute('login');

        }

        return $this->render('users/addUsers.html.twig',array("f"=>$form->createView()));

    }
=======


>>>>>>> Stashed changes
    /**
     * @Route("/updateUsers/{id}", name="update")
     */
    public function updateUsers(\Symfony\Component\HttpFoundation\Request $req, $id) {
        $em= $this->getDoctrine()->getManager();
        $prod = $em->getRepository(User::class)->find($id);
        $form = $this->createForm(UserType::class,$prod);
        $form->handleRequest($req);

        if($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('users_list');

        }

        return $this->render('users/updateUsers.html.twig',array("f"=>$form->createView()));


    }
    /**
     * @Route("/delete/{id}", name="suppression")
     */
    public function  supprimerProduit($id) {
        $em= $this->getDoctrine()->getManager();
        $i = $em->getRepository(User::class)->find($id);

        $em->remove($i);
        $em->flush();

        return $this->redirectToRoute("users_list");

    }
    /**
     * @Route("/detailUsers/{id}", name="detailUsers")
     */
    public function detailUsers(\Symfony\Component\HttpFoundation\Request $req, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);


        return $this->render('users/detailUsers.html.twig', array(
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'roles' => $user->getRoles(),
            'password' => $user->getPassword(),
            'name' => $user->getName()






        ));
    }
    /**
     * @Route("/users", name="users_list")
     */


    /**
     * @Route("/connexion", name="security_login")
     */

    public function login(){

        return $this->render('users/login.html.twig');
    }
    /**
     * @Route(" /logout ", name= "security_logout")
     */
    public function logout() { }



}

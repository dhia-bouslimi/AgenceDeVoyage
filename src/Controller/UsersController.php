<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UsersType;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class UsersController extends AbstractController
{
    /**
     * @Route("/users", name="users_list")
     */
    public function index(): Response
    {

        $res = $this->getDoctrine()->getManager()->getRepository(Users::class)->findAll();
        return $this->render('users/listUsers.html.twig',array('users'=>$res));
    }


    /**
     * @Route("/addUsers", name="add")
     */
    public function addUsers(\Symfony\Component\HttpFoundation\Request  $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $users = new Users();
        $form= $this->createForm(UsersType::class,$users);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $date = new \DateTime('@'.strtotime('now'));
            /*
             * Add product
             */
            $em->persist($users);
            /*
             * Commit
             */
            $em->flush();

            return  $this->redirectToRoute('users_list');

        }

        return $this->render('users/addUsers.html.twig',array("f"=>$form->createView()));

    }
    /**
     * @Route("/updateUsers/{id}", name="update")
     */
    public function updateUsers(\Symfony\Component\HttpFoundation\Request $req, $id) {
        $em= $this->getDoctrine()->getManager();
        $prod = $em->getRepository(Users::class)->find($id);
        $form = $this->createForm(UsersType::class,$prod);
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
        $i = $em->getRepository(Users::class)->find($id);

        $em->remove($i);
        $em->flush();

        return $this->redirectToRoute("users_list");

    }


}

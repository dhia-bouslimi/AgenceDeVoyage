<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Entity\Reclamation;
use App\Repository\ReponseRepository;
use App\Repository\ReclamationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReponseController extends AbstractController
{
  
     /**
     * @Route("/reponse/add/{id}", name="rep_add")
     */
    public function addResponse (Reclamation $recl,Request $req, ReclamationRepository $rep, $id,SessionInterface $session)
    {   
        $reclamation = $session->get("reclamation", $recl->getId());

        $idReclamation=$rep->find($id); 
        $reponses= new Reponse();
       
        $form=$this ->createForm(ReponseType::class,$reponses);
        $form->handleRequest($req);

        if($form->isSubmitted() && $form->isValid())
        {$em=$this->getDoctrine()->getManager();
            $em->persist($reponses);
            $em->flush();
            return $this->redirectToRoute('reponse_list');

        }

        return $this->render('reponse/addReponse.html.twig', [
            'formA'=>$form->createView(), 
            'reclamation' => $reclamation
            
        ]);
    }

     /**
     * @Route("reponse/list", name="reponse_list")
     */
    public function afficher_reponses(ReponseRepository $rep): Response
    {
        $reponses=$rep->findAll();
        return $this->render('reponse/listReponse.html.twig', [
            'tab1' => $reponses,
        ]);
    }

    /**
     * @Route("/delete-Reponse/{id}", name="delete_Reponse")
     */
        public function delete (int $id): Response
        {
            $entityManager = $this->getDoctrine()->getManager();
            $reposne = $entityManager->getRepository(Reponse::class)->find($id);
            $entityManager->remove($reposne);
            $entityManager->flush();

            return $this->redirectToRoute("reponse_list");
        }

        /**
         * @Route("/reponse/{id}", name="reponse")
         */
        public function show (int $id): Response
        {
            $Reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);

            return $this->render("reclamation/reclamation.html.twig", [
                "Reclamation" => $Reclamation,
            ]);
        }

        
     

}



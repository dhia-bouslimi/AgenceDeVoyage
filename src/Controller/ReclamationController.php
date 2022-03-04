<?php

namespace App\Controller;

use App\Form\ReclamationType;
use App\Entity\Reclamation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationController extends AbstractController
{


    /**
     * @Route("/reclamation", name="frontreclamation")
     */
    public function create (Request $request ,EntityManagerInterface $entityManager)
    { 
 
        $Reclamation = new Reclamation ();

        $form = $this ->createForm(ReclamationType::class,$Reclamation);
                     
       
      
                $form->handleRequest($request)  ;  
                
                if ($form->isSubmitted() && $form->isValid()) {
                  $Reclamation->setCreatedAt(new \DatetimeImmutable ());
                  $entityManager->persist($Reclamation);
                  $entityManager->flush();
       
                  
                  return $this->redirectToRoute('frontListhotel', ['id' => $Reclamation ->getId()]); 
        }
           
        return $this->render('reclamation/frontreclamation.html.twig', [
            'formReclamation' => $form->createView()
          
        ]);
 
    }
    
 
    

        /**
         * @Route("/Reclamation/{id}", name="Reclamation")
         */
        public function show (int $id): Response
        {
            $Reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);

            return $this->render("reclamation/reclamation.html.twig", [
                "Reclamation" => $Reclamation,
            ]);
        }

    
    /**
     * @Route("/reclamationadmin", name="reclamationadmin")
     */
    public function show2 (Request $request ,EntityManagerInterface $entityManager)
    {

        $repo = $this ->getDoctrine()->getRepository(Reclamation::class);
        $Reclamations=$repo->findAll();

        return $this->render('reclamation/reclamationadmin.html.twig', [
            'controller_name' => 'ReclamationController',
            'Reclamations' => $Reclamations
        ]);
    }




    /**
 * @Route("/delete-Reclamation/{id}", name="delete_Reclamation")
 */
public function delete (int $id): Response
{
    $entityManager = $this->getDoctrine()->getManager();
    $Reclamation = $entityManager->getRepository(Reclamation::class)->find($id);
    $entityManager->remove($Reclamation);
    $entityManager->flush();

    return $this->redirectToRoute("reclamationadmin");
}


}
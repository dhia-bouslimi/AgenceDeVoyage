<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Entity\Hotel;
use App\Form\ChambreType;
use App\Form\HotelType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChambreController extends AbstractController
{
    /**
     * @Route("/chambre", name="chambre")
     */
    public function index(): Response
    {
        return $this->render('chambre/index.html.twig', [
            'controller_name' => 'ChambreController',
        ]);
    }


    /**
     * @Route("/ajoutChambre", name="ajoutChambre")
     */
    public function addhotel(Request  $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $chambre = new Chambre();
        $form= $this->createForm(ChambreType::class,$chambre);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            //upload image
           // $uploadFile = $form['image']->getData(); // valeur  image
            //$filename = md5(uniqid()) . '.' .$uploadFile->guessExtension();//crypter image

            //$uploadFile->move($this->getParameter('kernel.project_dir').'/public/uploads/hotel_image',$filename);


            //$hotel->setImage($filename);

            //-----------

            $em->persist($chambre);

            $em->flush();

            return  $this->redirectToRoute('listeChambre');

        }

        return $this->render('hotel/ajoutchambre.html.twig',array("f"=>$form->createView()));

    }


    /**
     * @Route("/listeChambre", name="listeChambre")
     */
    public function listhotel(PaginatorInterface $paginator,Request $request ): Response
    {

        $res = $this->getDoctrine()->getManager()->getRepository(Chambre::class)->findAll();


        $chamb =$paginator->paginate(
            $res,
            $request->query->getInt('page',1),4
        );
        return $this->render('hotel/listeChambre.html.twig',array('chambres'=>$chamb));
    }




    /**
     * @Route("/modifier_Chambre/{id}", name="modifierChambre")
     */
    public function modifierProduit(\Symfony\Component\HttpFoundation\Request $req, $id) {
        $em= $this->getDoctrine()->getManager();
        $prod = $em->getRepository(Chambre::class)->find($id);
        $form = $this->createForm(ChambreType::class,$prod);
        $form->handleRequest($req);

        if($form->isSubmitted() && $form->isValid()) {

            //upload image
            //$uploadFile = $form['image']->getData(); // valeur  image
            //$filename = md5(uniqid()) . '.' .$uploadFile->guessExtension();//crypter image

           // $uploadFile->move($this->getParameter('kernel.project_dir').'/public/uploads/hotel_image',$filename);


            //$prod->setImage($filename);

            //-----------
            $em->flush();

            return $this->redirectToRoute('listeChambre');

        }

        return $this->render('hotel/modifierChambre.html.twig',array("f"=>$form->createView()));


    }

    /**
     * @Route("/supprimerChambre/{id}", name="supprimerChambre")
     */
    public function  supprimerchambre($id) {
        $em= $this->getDoctrine()->getManager();
        $i = $em->getRepository(Chambre::class)->find($id);

        $em->remove($i);
        $em->flush();

        return $this->redirectToRoute("listeChambre");

    }









}

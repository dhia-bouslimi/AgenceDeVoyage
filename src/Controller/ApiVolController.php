<?php

namespace App\Controller;

use App\Entity\Vol;
use App\Entity\Billet;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;

class ApiVolController extends  AbstractController
{


    /**
     * @Route("/api/addvol", name="addvol")
     */
    public function addVol(Request $request) {

        $em = $this->getDoctrine()->getManager();


        // $category_id = $request->get("category_id");
        $type = $request->get("type");
        $depart = $request->get("depart");
        $arrive = $request->get("arrive");
        $duree = $request->get("duree");
        $destination = $request->get("destination");
        $place = $request->get("place");



        // $category = $em->getRepository(Category::class)->find($category_id);
        $vol = new Vol();
        $vol->setType($type);
        $vol->setDepart($depart);
        $vol->setArrive($arrive);
        $vol->setDuree($duree);
        $vol->setDestination($destination);
        $vol->setPlace($place);



        $em->persist($vol);
        $em->flush();

        //RESPONSE JSON FROM OUR SERVER
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $serializer = new Serializer([$normalizer],[$encoder]);
        $formatted = $serializer->normalize($vol);

        return new JsonResponse($formatted);





    }

    /**
     * @Route("/api/modifvol", name="modifvol")
     */
    public function updateVol(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $idvol = $request->get("id");
        $vol= $em->getRepository(Vol::class)->find($idvol);

        $type = $request->get("type");
        $depart = $request->get("depart");
        $arrive = $request->get("arrive");
        $duree = $request->get("duree");
        $destination = $request->get("destination");
        $place = $request->get("place");


        // $category = $em->getRepository(Category::class)->find($category_id);


        $vol->setType($type);
        $vol->setDepart($depart);
        $vol->setArrive($arrive);
        $vol->setDuree($duree);
        $vol->setDestination($destination);
        $vol->setPlace($place);




        $em->persist($vol);
        $em->flush();

        //RESPONSE JSON FROM OUR SERVER
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        //  $serializer = new Serializer([$normalizer],[$encoder]);
        //$formatted = $serializer->normalize($prod);

        return new JsonResponse("Vol update with success");





    }

    /**
     * @Route("/api/deletevol/{id}", name="deletevol")
     */
    public function deletevol($id) {
        $em= $this->getDoctrine()->getManager();
        $vol = $em->getRepository(Vol::class)->find($id);
        $em->remove($vol);
        $em->flush();
        return new JsonResponse("Vol deleted .");

    }

    /**
     * @Route("/api/affichVol", name="affichVol")
     */
    public function afficheVol() {
        $em= $this->getDoctrine()->getManager();
        $vol = $em->getRepository(Vol::class)->findAll();

        //RESPONSE JSON FROM OUR SERVER
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();

        //JOIN ERROR
        $normalizer->setCircularReferenceLimit(1);
        $normalizer->setCircularReferenceHandler(function ($object) {
            if(method_exists($object, 'getId')){
                return $object->getId();
            }
        });


        $serializer = new Serializer([$normalizer],[$encoder]);
        $formatted = $serializer->normalize($vol);


        return new JsonResponse($formatted);


    }









}
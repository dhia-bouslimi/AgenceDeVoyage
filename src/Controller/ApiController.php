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

class ApiController extends  AbstractController
{
                                                                       //category--->vol
                                                                       //product---->billet


    /**
     * @Route("/api/addbillet", name="addbillet")
     */
    public function addBillet(Request $request) {

        $em = $this->getDoctrine()->getManager();


        // $category_id = $request->get("category_id");
        $type = $request->get("type");
        $prix = $request->get("prix");



        // $category = $em->getRepository(Category::class)->find($category_id);
        $billet = new Billet();
        $billet->setType($type);
        $billet->setPrix($prix);



        $em->persist($billet);
        $em->flush();

        //RESPONSE JSON FROM OUR SERVER
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $serializer = new Serializer([$normalizer],[$encoder]);
        $formatted = $serializer->normalize($billet);

        return new JsonResponse($formatted);





    }

    /**
     * @Route("/api/modifbillet", name="modifbillet")
     */
    public function updateBillet(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $idbillet = $request->get("id");
        $billet= $em->getRepository(Billet::class)->find($idbillet);

        $type = $request->get("type");
        $prix = $request->get("prix");


        // $category = $em->getRepository(Category::class)->find($category_id);


        $billet->setType($type);
        $billet->setPrix($prix);



        $em->persist($billet);
        $em->flush();

        //RESPONSE JSON FROM OUR SERVER
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        //  $serializer = new Serializer([$normalizer],[$encoder]);
        //$formatted = $serializer->normalize($prod);

        return new JsonResponse("Billet update with success");





    }

    /**
     * @Route("/api/deletebillet/{id}", name="deletebillet")
     */
    public function deletebillet($id) {
        $em= $this->getDoctrine()->getManager();
        $billet = $em->getRepository(Billet::class)->find($id);
        $em->remove($billet);
        $em->flush();
        return new JsonResponse("Billet deleted .");

    }

    /**
     * @Route("/api/affichBillet", name="affichBillet")
     */
    public function afficheBillet() {
        $em= $this->getDoctrine()->getManager();
        $billet = $em->getRepository(Billet::class)->findAll();

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
        $formatted = $serializer->normalize($billet);


        return new JsonResponse($formatted);


    }









}
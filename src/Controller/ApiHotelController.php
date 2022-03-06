<?php
namespace App\Controller;

use App\Entity\Hotel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;

class ApiHotelController extends AbstractController
{


    /**
     * @Route("/api/addHotel", name="addHotel")
     */
    public function addHotel(Request $request)
    {

        $em = $this->getDoctrine()->getManager();


        // $category_id = $request->get("category_id");
        $nom = $request->get("nom");
        $address = $request->get("address");
        $etoile = $request->get("etoile");
        $etat = $request->get("etat");
        $nbrChambre = $request->get("nbrChambre");
        $description = $request->get("description");
        $image = $request->get("image");


        //$dateCreation = new \DateTime(urldecode($request->get("dateCreation")));


        // $category = $em->getRepository(Category::class)->find($category_id);
        $product = new Hotel();
        $product->setNom($nom);
        $product->setAddress($address);
        $product->setEtoile($etoile);
        $product->setEtat($etat);
        $product->setNbrChambre($nbrChambre);
        $product->setDescription($description);



        $product->setImage($request->get("image"));


        if ($request->files->get("image") != null) {
            $file = $request->files->get("image");
            $fileName = $file->getClientOriginalName();

            $filename = md5(uniqid()) . '.' . $file->guessExtension();//crypté image

            $file->move($this->getParameter('kernel.project_dir') . '/public/uploads/hotel_image', $filename);


            $product->setImage($filename);


        }
        $em->persist($product);
        $em->flush();

        //RESPONSE JSON FROM OUR SERVER
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $serializer = new Serializer([$normalizer], [$encoder]);
        $formatted = $serializer->normalize($product);

        return new JsonResponse($formatted);


    }

    /**
     * @Route("/api/modifprod", name="modifprod")
     */
    public function updateHotel(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $idprod = $request->get("id");
        $prod = $em->getRepository(Hotel::class)->find($idprod);

        $nom = $request->get("nom");
        $address = $request->get("address");
        $etoile = $request->get("etoile");
        $etat = $request->get("etat");
        $nbrChambre = $request->get("nbrChambre");
        $description = $request->get("description");
        $image = $request->get("image");

        //$dateCreation = new \DateTime(urldecode($request->get("dateCreation")));


        // $category = $em->getRepository(Category::class)->find($category_id);


        $prod->setNom($nom);
        $prod->setAddress($address);
        $prod->setEtoile($etoile);
        $prod->setEtat($etat);
        $prod->setNbrChambre($nbrChambre);
        $prod->setDescription($description);
       // $prod->setDateCreation($image);


        $prod->setImage($request->get("image"));
        if ($request->files->get("image") != null) {
            $file = $request->files->get("image");
            $fileName = $file->getClientOriginalName();

            $filename = md5(uniqid()) . '.' . $file->guessExtension();//crypté image

            $file->move($this->getParameter('kernel.project_dir') . '/public/uploads/hotel_image', $filename);


            $prod->setImage($filename);


        }
        $em->persist($prod);
        $em->flush();

        //RESPONSE JSON FROM OUR SERVER
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        //  $serializer = new Serializer([$normalizer],[$encoder]);
        //$formatted = $serializer->normalize($prod);

        return new JsonResponse("Hotel update with success");


    }

    /**
     * @Route("/api/deleteHotel/{id}", name="deleteHotel")
     */
    public function deleteHotel($id)
    {
        $em = $this->getDoctrine()->getManager();
        $hotel = $em->getRepository(Hotel::class)->find($id);
        $em->remove($hotel);
        $em->flush();
        return new JsonResponse("hotel deleted .");

    }

    /**
     * @Route("/api/affichHotel", name="affichHotel")
     */
    public function afficheProd()
    {
        $em = $this->getDoctrine()->getManager();
        $prod = $em->getRepository(Hotel::class)->findAll();

        //RESPONSE JSON FROM OUR SERVER
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();

        //JOIN ERROR
        $normalizer->setCircularReferenceLimit(1);
        $normalizer->setCircularReferenceHandler(function ($object) {
            if (method_exists($object, 'getId')) {
                return $object->getId();
            }
        });


        $serializer = new Serializer([$normalizer], [$encoder]);
        $formatted = $serializer->normalize($prod);


        return new JsonResponse($formatted);


    }


}
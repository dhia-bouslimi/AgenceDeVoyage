<?php



namespace App\Controller;

use App\Entity\Category;
use App\Entity\Chambre;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;

class ApiChambreController extends AbstractController
{


    /**
     * @Route("/api/addChambre", name="addChambre")
     */
    public function addChambre(Request $request)
    {

        $em = $this->getDoctrine()->getManager();


        // $category_id = $request->get("category_id");

        $numChambre = $request->get("numChambre");
        $numEtage = $request->get("numEtage");
        $typeNbBLit = $request->get("typeNbBLit");
        $prixParNuit = $request->get("prixParNuit");


        $hotel = $request->get("hotel");
      //  var_dump($hotel);die();
        //$dateCreation = new \DateTime(urldecode($request->get("dateCreation")));


        // $category = $em->getRepository(Category::class)->find($category_id);

        $product = new Chambre();

        $product->setNumChambre($numChambre);
        $product->setNumEtage($numEtage);
        $product->setTypeNbBLit($typeNbBLit);
        $product->setPrixParNuit($prixParNuit);
        $product->setHotel($hotel);


/*
        $product->setImage($request->get("image"));
        if ($request->files->get("image") != null) {
            $file = $request->files->get("image");
            $fileName = $file->getClientOriginalName();

            $filename = md5(uniqid()) . '.' . $file->guessExtension();//crypté image

            $file->move($this->getParameter('kernel.project_dir') . '/public/uploads/produit_image', $filename);


            $product->setImage($filename);


        }

*/
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
     * @Route("/api/modifchambre", name="modifchambre")
     */
    public function updatechambre(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $idprod = $request->get("id");
        $prod = $em->getRepository(Chambre::class)->find($idprod);

        $numChambre = $request->get("numChambre");
        $numEtage = $request->get("numEtage");
        $typeNbBLit = $request->get("typeNbBLit");
        $prixParNuit = $request->get("prixParNuit");
        $hotel = $request->get("hotel");


        //$dateCreation = new \DateTime(urldecode($request->get("dateCreation")));


        // $category = $em->getRepository(Category::class)->find($category_id);

        $prod->setNumChambre($numChambre);
        $prod->setNumEtage($numEtage);
        $prod->setTypeNbBLit($typeNbBLit);
        $prod->setPrixParNuit($prixParNuit);
        $prod->setHotel($hotel);

       // $prod->setImage($request->get("image"));

  /*      if ($request->files->get("image") != null) {
            $file = $request->files->get("image");
            $fileName = $file->getClientOriginalName();

            $filename = md5(uniqid()) . '.' . $file->guessExtension();//crypté image

            $file->move($this->getParameter('kernel.project_dir') . '/public/uploads/produit_image', $filename);


            $prod->setImage($filename);


        }

        */
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

        return new JsonResponse("Chambre update with success");


    }

    /**
     * @Route("/api/deletechambre/{id}", name="deletechambre")
     */
    public function deleteChambre($id)
    {
        $em = $this->getDoctrine()->getManager();
        $chambre = $em->getRepository(Chambre::class)->find($id);
        $em->remove($chambre);
        $em->flush();
        return new JsonResponse("Chambre deleted .");

    }



    /**
     * @Route("/api/affichchambre", name="affichchambre")
     */
    public function afficheProd()
    {
        $em = $this->getDoctrine()->getManager();
        $prod = $em->getRepository(Chambre::class)->findAll();

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

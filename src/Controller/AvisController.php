<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use App\Repository\AvisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * @Route("/avis")
 */
class AvisController extends AbstractController
{

    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }


    /**
     * @Route("/", name="app_avis_index", methods={"GET"})
     */
    public function index(AvisRepository $avisRepository): Response
    {
        return $this->render('avis/index.html.twig', [
            'avis' => $avisRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_avis_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $avi = new Avis();
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        $user = $this->security->getUser();
        $avi->setUtilisateur($user);

        if ($form->isSubmitted() && $form->isValid()) {
            // testing bad words
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.apilayer.com/bad_words",
                CURLOPT_HTTPHEADER => array(
                    "Content-Type: text/plain",
                    "apikey: Y8VtGeSFl7x2KVoZmdV8YvuZYsBzsrTv"
                ),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS =>  $avi->getDescription()
            ));

            $response = json_decode(curl_exec($curl), true);

            curl_close($curl);

            if (isset($response['censored_content']))
                $avi->setDescription($response['censored_content']);
            else $avi->setDescription("api key expired");




            $this->getDoctrine()->getManager()->persist($avi);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/new.html.twig', [
            'avi' => $avi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/detail/{id}", name="app_avis_show", methods={"GET"})
     */
    public function show(Avis $avi): Response
    {
        return $this->render('avis/show.html.twig', [
            'avi' => $avi,
        ]);
    }

    /**
     * @Route("/edit/{id}/{idRes}", name="app_avis_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Avis $avi, $idRes): Response
    {
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // testing bad words using api
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.apilayer.com/bad_words",
                CURLOPT_HTTPHEADER => array(
                    "Content-Type: text/plain",
                    "apikey: Y8VtGeSFl7x2KVoZmdV8YvuZYsBzsrTv"
                ),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS =>  $avi->getDescription()
            ));

            $response = json_decode(curl_exec($curl), true);

            curl_close($curl);

            if (isset($response['censored_content']))
                $avi->setDescription($response['censored_content']);
            else $avi->setDescription( "api key expired");


            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('detailsreservation', ['id' => $idRes], Response::HTTP_SEE_OTHER);
        }


        return $this->render('avis/edit.html.twig', [
            'avi' => $avi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="app_avis_delete", methods={"POST"})
     */
    public function delete(Request $request, Avis $avi): Response
    {
        if ($this->isCsrfTokenValid('delete' . $avi->getId(), $request->request->get('_token'))) {
            $this->getDoctrine()->getManager()->remove($avi);
            $this->getDoctrine()->getManager()->flush();
        }

        return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/stats", name="app_avis_stats", methods={"GET"})
     */
    public function stats(AvisRepository $avisRepository): Response
    {
        $stats = $avisRepository->getAvgScoreGrouppedByHotel();
        $pieStats = $avisRepository->getSumScoreGrouppedByHotel();
        return $this->render('avis/stats.html.twig', [
            'avis' => $avisRepository->findAll(),
            'stats' => $stats,
            'pieStats' => $pieStats
        ]);
    }
}

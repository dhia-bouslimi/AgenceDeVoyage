<?php

namespace App\Controller;
use App\Entity\LigneCommande;
use App\Form\SearchcommandeType;
use App\Repository\LigneCommandeRepository;

use App\Entity\Commande;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/commande")
 */
class CommandeController extends AbstractController
{
    /**
     * @Route("/", name="commande_index")
     */
    public function index(CommandeRepository $commandeRepository): Response
    {
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandeRepository->findAll(),
        ]);
    }


    /**
     * @Route("/{id_com}", name="commande_delete", methods={"POST"})
     */
    public function delete(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getIdCom(), $request->request->get('_token'))) {
            $entityManager->remove($commande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('commande_index', [], Response::HTTP_SEE_OTHER);
    }



    /**
     * @Route("/admin/listcom", name="commande_list", methods={"GET"})
     * @noinspection PhpInconsistentReturnPointsInspection
     */
    public  function  listcom (CommandeRepository  $commandeRepository):Response{


        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');


        $dompdf = new Dompdf($pdfOptions);

        $commandes= $commandeRepository->findAll();


        $html = $this->renderView('commande/listecom.html.twig',['commandes'=>$commandes,
        ]);


        $dompdf->loadHtml($html);


        $dompdf->setPaper('A4', 'portrait');


        // Rendre le HTML au format PDF
        $dompdf->render();

        // Sortie du PDF généré dans le navigateur (téléchargement forcé)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);

    }


    /**
     * @Route("/admin/sortprix", name="sortprix")
     */
    public function triprix(): Response{
        $commande = $this->getDoctrine()->getRepository(Commande::class)->sortPrix();
        return $this->render('commande/SortedPrix.html.twig', [
            'controller_name' => 'CommandeController',
            'prixsorted' => $commande,
        ]);
    }







}

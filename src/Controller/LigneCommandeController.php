<?php

namespace App\Controller;

use App\Repository\CommmandeRepository;
use App\Repository\LigneCommandeRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Commande;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\LigneCommande;
use App\Entity\Product;


class LigneCommandeController extends AbstractController
{


    /**
     * @Route("/lignecommande", name="lignecommande")
     */
    public function show (LigneCommandeRepository $ligneCommandeRepository): Response
    {



        return $this->render('ligne_commande/back_lignecommande.html.twig', [
            'lignecommandes' => $ligneCommandeRepository->findAll(),
        ]);
    }


    /**
     * @Route("/panier1", name="panier1")
     * @param SessionInterface $session
     * @param ProductRepository $productRepository
     * @return Response
     */
    public function index(SessionInterface $session, ProductRepository $productRepository): Response
    {

        $panier = $session->get('panier',[]);
        $total= 0;

        foreach($panier as $item){
            $totalitem = $item ['produit'] -> getPrix() * $item['quantite_produit'];
            $total += $totalitem;
        }
        return $this-> render('ligne_commande/index.html.twig' , [
            'items' => $panier,
            'total'=> $total
        ]);

    }


    /**
     * @Route("/checkout", name="checkout")
     * @param SessionInterface $session
     * @param ProductRepository $productRepository
     * @return Response
     */
    public function checkout(Request $request,SessionInterface $session, ProductRepository $productRepository): Response
    {



        $panier = $session->get('panier',[]);
        $total= 0;
        foreach($panier as $item){
            $totalitem = $item ['produit'] -> getPrix() * $item['quantite_produit'];
            $total += $totalitem;
        }


        if(  $request->query->has('billing_firstname')) {

            $name = $request->query->get('billing_firstname');
            $last = $request->query->get('billing_lastname');


            $commande = new Commande();
            $commande->setPrixtotal($total);
            $commande->setEtatcommande("0");
            $commande->setDatecommande(new \DateTime('now'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($commande);
            $em->flush();

            foreach ($panier as $item) {
                $panierS = new  LigneCommande();
                $panierS->setIdCommande($commande);
                $panierS->setQuantitydemande($item['quantite_produit']);
                $panierS->setIdProduit($this->getDoctrine()->getRepository(Product::class)->find($item ['produit']->getId()));
                $em->persist($panierS);
                $em->flush();
            }

            $panier = $session->set('panier', []);

            return $this->redirectToRoute('panier1');


        }
        if($total==0){
            return $this->redirectToRoute('panier1');
        }

        return $this-> render('ligne_commande/chekout.html.twig' , [
            'items' => $panier,
            'total'=> $total
        ]);

    }


    /**
     * @Route("/panier/updateProdPanier/{id}/{nb}", name="updateProdPanier")
     * @param $id
     * @param SessionInterface $session
     */

    public function updateProdPanier($id, $nb,Request $req,SessionInterface $session, ProductRepository $productRepository) {


        $em = $this->getDoctrine()->getManager();
        $panier = $session->get('panier',[]);
        $produit=$productRepository->find($id);

       $user = $this->getUser();//Session user connected




        if(!$produit){
            return $this->redirectToRoute('panier1');
        }
        // dd($panier[$id]['produit']->getId_produit());
        if($req->get('qt')){
            $nb=intval($req->get('qt'));
            if($nb<0)
                $nb=0;
            if (!empty($panier[$id])) {

                $panier[$id]= [
                    'produit' => $productRepository->find($id),
                    'quantite_produit'=> $nb
                ];

            }else {
                $panier[$id] =[
                    'produit' => $productRepository->find($id),
                    'quantite_produit'=>$nb
                ];
            }
            $session -> set('panier',$panier);
            return $this->redirectToRoute('panier1');
        }
        if (!empty($panier[$id])) {
            $newqt=$panier[$id]['quantite_produit']+intval($nb);
            if($newqt<0)
                $newqt=0;

            $panier[$id]= [
                'produit' => $productRepository->find($id),
                'quantite_produit'=> $newqt
            ];

        }else {
            $newqt=intval($nb);
            if($newqt<0)
                $newqt=0;
            $panier[$id] =[
                'produit' => $productRepository->find($id),
                'quantite_produit'=>$newqt
            ];
        }

        $session -> set('panier',$panier);

        $produit->setUser($user);

        $em->persist($produit);
        /*
         * Commit
         */
        $em->flush();


        return $this->redirectToRoute('panier1');

    }


    /**
     * @Route("/clearpanier", name="emptypanier")
     * @param SessionInterface $session
     * @param ProductRepository $productRepository
     * @return Response
     */
    public function clear(SessionInterface $session): Response
    {
        $panier = $session->set('panier',[]);


        return $this->redirectToRoute('panier1');
    }

    /**
     * @Route("/panier/supprimerProd/{id}", name="panier_supprime")
     */

    public function supprimerProd($id, SessionInterface $session) {
        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $session->set('panier',$panier);

        return $this->redirectToRoute("panier1");

    }

    /**
     * @Route("/delete/{id}", name="lignecommande_delete", methods={"POST"})
     *
     */
    public function delete(Request $request, LigneCommande $ligneCommande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ligneCommande->getId(), $request->request->get('_token'))) {
            $entityManager->remove($ligneCommande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('lignecommande', [], Response::HTTP_SEE_OTHER);
    }



    /**
     * @Route("/StatCommande", name="StatCommande")
     */
    public function StatCommande(): Response
    {

        $commandes = $this->getDoctrine()->getRepository(LigneCommande::class)->findAll();
        $quantitydemande= [];
        $id = [];
        foreach ($commandes as $commande) {
            $quantitydemande[] = $commande->getQuantitydemande();
            $id_produit [] = $commande->getIdProduit()->getNom();
        }
        return $this->render('ligne_commande/statcom.html.twig', [
            'quantitydemande' => json_encode($quantitydemande),
            'id_produit' => json_encode($id_produit)
        ]);
    }

    /**
     * @Route("/admin/listcom", name="commande_liste", methods={"GET"})
     * @noinspection PhpInconsistentReturnPointsInspection
     */
    public  function  listcom (SessionInterface $session):Response{


        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', ' Garamond');


        $dompdf = new Dompdf($pdfOptions);

        $panier = $session->get('panier',[]);
        $total= 0;

        foreach($panier as $item){
            $totalitem = $item ['produit'] -> getPrix() * $item['quantite_produit'];
            $total += $totalitem;
        }
        $html =  $this-> render('ligne_commande/listcomm.html.twig' , [
            'items' => $panier,
            'total'=> $total
        ]);


        $dompdf->loadHtml($html->getContent());


        $dompdf->setPaper('A4', 'portrait');


        // Rendre le HTML au format PDF
        $dompdf->render();

        // Sortie du PDF généré dans le navigateur (téléchargement forcé)
        $dompdf->stream("facture.pdf", [
            "Attachment" => true
        ]);

    }



}
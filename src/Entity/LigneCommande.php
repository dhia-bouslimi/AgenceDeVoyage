<?php

namespace App\Entity;

use App\Repository\LigneCommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LigneCommandeRepository::class)
 */
class LigneCommande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantitydemande;

    /**
     * @ORM\ManyToOne(targetEntity=Commande::class, inversedBy="ligneCommandes" ,cascade={"remove"})
     *  @ORM\JoinColumn(name="id_commande", referencedColumnName="id_com" ,onDelete="CASCADE")
     */
    private $id_commande;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="ligneCommandes" ,cascade={"remove"})
     * @ORM\JoinColumn(name="id_produit", referencedColumnName="id" ,onDelete="CASCADE")
     */
    private $id_produit;
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantitydemande(): ?int
    {
        return $this->quantitydemande;
    }

    public function setQuantitydemande(int $quantitydemande): self
    {
        $this->quantitydemande = $quantitydemande;

        return $this;
    }

    public function getIdCommande(): ?Commande
    {
        return $this->id_commande;
    }

    public function setIdCommande(?Commande $id_commande): self
    {
        $this->id_commande = $id_commande;

        return $this;
    }

    public function getIdProduit(): ?Product
    {
        return $this->id_produit;
    }

    public function setIdProduit(?Product $id_produit): self
    {
        $this->id_produit = $id_produit;

        return $this;
    }

   
}

<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column( type="integer")
     */
    private $id_com;

    /**
     * @ORM\Column(type="boolean")
     */
    private $etatcommande;

    /**
     * @ORM\Column(type="date" ,nullable=false)
     */
    private $datecommande;

    /**
     *
     * @ORM\Column(type="float" ,nullable=false)
     */
    private $prixtotal;



    /**
     * @ORM\OneToMany(targetEntity=LigneCommande::class, mappedBy="id_commande")
     */
    private $ligneCommandes;

    public function __construct()
    {
        $this->ligneCommandes = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getIdCom()
    {
        return $this->id_com;
    }



    public function getEtatcommande(): ?bool
    {
        return $this->etatcommande;
    }

    public function setEtatcommande(bool $etatcommande): self
    {
        $this->etatcommande = $etatcommande;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatecommande()
    {
        return $this->datecommande;
    }

    /**
     * @param mixed $datecommande
     */
    public function setDatecommande($datecommande): void
    {
        $this->datecommande = $datecommande;
    }



    public function getPrixtotal(): ?float
    {
        return $this->prixtotal;
    }

    public function setPrixtotal(float $prixtotal): self
    {
        $this->prixtotal = $prixtotal;

        return $this;
    }

    

    /**
     * @return Collection|LigneCommande[]
     */
    public function getLigneCommandes(): Collection
    {
        return $this->ligneCommandes;
    }

    public function addLigneCommande(LigneCommande $ligneCommande): self
    {
        if (!$this->ligneCommandes->contains($ligneCommande)) {
            $this->ligneCommandes[] = $ligneCommande;
            $ligneCommande->setIdCommande($this);
        }

        return $this;
    }

    public function removeLigneCommande(LigneCommande $ligneCommande): self
    {
        if ($this->ligneCommandes->removeElement($ligneCommande)) {
            // set the owning side to null (unless already changed)
            if ($ligneCommande->getIdCommande() === $this) {
                $ligneCommande->setIdCommande(null);
            }
        }

        return $this;
    }

    public function __toString() {
        return (string) $this->id_com;
    }
}

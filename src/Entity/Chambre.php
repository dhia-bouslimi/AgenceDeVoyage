<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=ChambreRepository::class)
 */
class Chambre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @Assert\NotBlank(message="num chambre doit etre non vide")
     * @Assert\Positive
     * @Assert\Range(
     *      min = 1,
     *      max = 1000,
     *      notInRangeMessage = "le nun de chambre doit etre valid",
     *     )
     * @ORM\Column(type="integer")
     */
    private $numChambre;

    /**
     * @Assert\NotBlank(message="num etage doit etre non vide")
     * @Assert\Positive
     * @Assert\Choice({"1", "2", "3"})
     * @ORM\Column(type="integer")
     */
    private $numEtage;


    /**
     * @Assert\NotBlank(message="type lit doit etre non vide")
     * @Assert\Choice({"double", "single", "single"})
     * @ORM\Column(type="string", length=255)
     */
    private $typeNbBLit;



    /**
     * @Assert\NotBlank(message="num etage doit etre non vide")
     * @Assert\Positive
     * @Assert\Range(
     *      min = 40,
     *      max = 1000,
     *      notInRangeMessage = "le prix doit etre superieur a 40 dt",
     *     )
     * @ORM\Column(type="float")
     */
    private $prixParNuit;



    /**
     * @ORM\ManyToOne(targetEntity=Hotel::class, inversedBy="chambre")
     * @ORM\JoinColumn(nullable=false)
     */
    private $hotel;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="chambre", orphanRemoval=true)
     */
    private $reservation;

    public function __construct()
    {
        $this->reservation = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Chambre
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumChambre()
    {
        return $this->numChambre;
    }

    /**
     * @param mixed $numChambre
     * @return Chambre
     */
    public function setNumChambre($numChambre)
    {
        $this->numChambre = $numChambre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumEtage()
    {
        return $this->numEtage;
    }

    /**
     * @param mixed $numEtage
     * @return Chambre
     */
    public function setNumEtage($numEtage)
    {
        $this->numEtage = $numEtage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTypeNbBLit()
    {
        return $this->typeNbBLit;
    }

    /**
     * @param mixed $typeNbBLit
     * @return Chambre
     */
    public function setTypeNbBLit($typeNbBLit)
    {
        $this->typeNbBLit = $typeNbBLit;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrixParNuit()
    {
        return $this->prixParNuit;
    }

    /**
     * @param mixed $prixParNuit
     * @return Chambre
     */
    public function setPrixParNuit($prixParNuit)
    {
        $this->prixParNuit = $prixParNuit;
        return $this;
    }



    public function getHotel(): ?Hotel
    {
        return $this->hotel;
    }

    public function setHotel(?Hotel $hotel): self
    {
        $this->hotel = $hotel;

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservation(): Collection
    {
        return $this->reservation;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservation->contains($reservation)) {
            $this->reservation[] = $reservation;
            $reservation->setChambre($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservation->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getChambre() === $this) {
                $reservation->setChambre(null);
            }
        }

        return $this;
    }




}

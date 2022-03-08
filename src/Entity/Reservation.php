<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank(message="etat de hotel doit etre non vide")
     * @ORM\Column(type="string", length=255)
     */
    private $typePension;

    /**
     * @Assert\Date()
     * @Assert\Expression(
     *     "this.getDarrive() < this.getDquitte()",
     *     message="La date de depart ne doit pas être postérieure à la date d'arrive"
     * )
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $darrive;



    /**
     * @Assert\Date()
     * @Assert\Expression(
     *     "this.getDarrive() < this.getDquitte()",
     *     message="La date d'arrive ne doit pas être antérieure à la date début"
     * )
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dquitte;


    /**
     * @ORM\Column(type="float")
     */
    private $prixTotal;

    /**
     * @ORM\ManyToOne(targetEntity=Chambre::class, inversedBy="reservation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $chambre;

    /**
     * @ORM\Column(type="boolean")
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reservations")
     */
    private $user;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Reservation
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTypePension()
    {
        return $this->typePension;
    }

    /**
     * @param mixed $typePension
     * @return Reservation
     */
    public function setTypePension($typePension)
    {
        $this->typePension = $typePension;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDarrive(): ?\DateTimeInterface

    {
        return $this->darrive;
    }

    /**
     * @param mixed $darrive
     * @return Reservation
     */
    public function setDarrive(?\DateTimeInterface $darrive) : self
    {
        $this->darrive = $darrive;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDquitte() : ?\DateTimeInterface

    {
        return $this->dquitte;
    }

    /**
     * @param mixed $dquitte
     * @return Reservation
     */
    public function setDquitte(?\DateTimeInterface $dquitte) : self
    {
        $this->dquitte = $dquitte;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }

    /**
     * @param mixed $prixTotal
     * @return Reservation
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;
        return $this;
    }

    public function getChambre(): ?Chambre
    {
        return $this->chambre;
    }

    public function setChambre(?Chambre $chambre): self
    {
        $this->chambre = $chambre;

        return $this;
    }

    public function getEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }




}

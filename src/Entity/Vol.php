<?php

namespace App\Entity;

use App\Repository\VolRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=VolRepository::class)
 */
class Vol
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer" )
     * @Groups("vol")
     */
    private $id;



    /**
     * @Assert\NotBlank(message="type de vol doit etre non vide")
     * @Assert\Length(
     *      min = 5,
     *      minMessage=" Entrer une chaine au minimum de 5 caracteres"
     *
     *     )
     * @ORM\Column(type="string", length=40)
     *  @Groups("vol")
     */
    private $type;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @Assert\Date()
     * @Assert\Expression(
     *     "this.getDepart() < this.getArrive()",
     *     message="La date de depart ne doit pas être postérieure à la date d'arrive"
     * )
     * @ORM\Column(type="datetime", nullable=true)
     *  @Groups("vol")
     */
    private $depart;

    /**
     * @Assert\Date()
     * @Assert\Expression(
     *     "this.getDepart() < this.getArrive()",
     *     message="La date d'arrive ne doit pas être antérieure à la date début"
     * )
     * @ORM\Column(type="datetime", nullable=true)
     *  @Groups("vol")
     */
    private $arrive;

    /**
     * @Assert\NotBlank(message="duree de vol doit etre non vide")
     * @Assert\Length(
     *      min = 5,
     *      minMessage=" Entrer une chaine au minimum de 5 caracteres"
     *
     *     )
     * @ORM\Column(type="string", length=255, nullable="true")
     *  @Groups("vol")
     */
    private $duree;



    /**
     * @Assert\NotBlank(message="destination de vol doit etre non vide")
     * @Assert\Length(
     *      min = 5,
     *      minMessage=" Entrer une chaine au minimum de 5 caracteres"
     *
     *     )
     * @ORM\Column(type="string", length=255, nullable="true")
     *  @Groups("vol")
     */
    private $destination;

    /**
     * @Assert\NotBlank(message="nombre de place d'un vol doit etre non vide")
     * @Assert\NotEqualTo(
     *     value = 0,
     *  message = "le nombre de place d'un vol ne doit pas etre égale a 0"
     * )
     * @ORM\Column(type="integer")
     *  @Groups("vol")
     */
    private $place;

    /**
     * @ORM\OneToMany(targetEntity=Billet::class, mappedBy="vol", orphanRemoval=true)
     *  @Groups("vol")
     */
    private $billets;

    public function __construct()
    {
        $this->billets = new ArrayCollection();
    }
















    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }



    public function getDepart(): ?\DateTimeInterface
    {
        return $this->depart;
    }

    public function setDepart(?\DateTimeInterface $depart): self
    {
        $this->depart = $depart;

        return $this;
    }

    public function getArrive(): ?\DateTimeInterface
    {
        return $this->arrive;
    }

    public function setArrive(?\DateTimeInterface $arrive): self
    {
        $this->arrive = $arrive;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }



    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getPlace(): ?int
    {
        return $this->place;
    }

    public function setPlace(int $place): self
    {
        $this->place = $place;

        return $this;
    }

    /**
     * @return Collection|Billet[]
     */
    public function getBillets(): Collection
    {
        return $this->billets;
    }

    public function addBillet(Billet $billet): self
    {
        if (!$this->billets->contains($billet)) {
            $this->billets[] = $billet;
            $billet->setVol($this);
        }

        return $this;
    }

    public function removeBillet(Billet $billet): self
    {
        if ($this->billets->removeElement($billet)) {
            // set the owning side to null (unless already changed)
            if ($billet->getVol() === $this) {
                $billet->setVol(null);
            }
        }

        return $this;
    }























}

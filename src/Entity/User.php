<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
<<<<<<< Updated upstream
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;



use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;



/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity("email")
 *
=======
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="user")
 * @UniqueEntity(
 * fields = {"email"},
 * message ="Email déja utilisé !"
>>>>>>> Stashed changes
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
<<<<<<< Updated upstream
     * @ORM\Column(type="string", length=180,unique="true")
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];


    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
=======
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Name is required")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Last name is required")
     */
    private $fname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Gender is required")
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Num is required")
     * @Assert\Length(min="8",minMessage="Votre num de télèphone doit contenir 8 entiers")
     * @Assert\Length(max="8",maxMessage="Votre num de télèphone doit contenir 8 entiers")
     */
    private $num;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Email is required")
     * @Assert\Email(message = "The email '{{ value }}' is not a valid email")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Password is required")
     * @Assert\Length(min="6",minMessage="Votre mot de passe doit contenir au min 6 caractères")
>>>>>>> Stashed changes
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
<<<<<<< Updated upstream
     */
    private $name;
=======
     *@Assert\NotBlank(message="Confirmpassword is required")
     *@Assert\EqualTo(propertyPath="password",message="Vérifier votre password")
     */
    private $confirmpassword;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\NotBlank(message="Birthday is required")
     * @Assert\LessThan("today")
     */
    private $birthday;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Il faut insérer une image")
     */
    private $image;
>>>>>>> Stashed changes

    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< Updated upstream

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
=======
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFname(): ?string
    {
        return $this->fname;
    }

    public function setFname(?string $fname): self
    {
        $this->fname = $fname;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getNum(): ?string
    {
        return $this->num;
    }

    public function setNum(?string $num): self
    {
        $this->num = $num;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
>>>>>>> Stashed changes
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
<<<<<<< Updated upstream
        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
=======

        return $this;
    }

    public function getConfirmpassword(): ?string
    {
        return $this->confirmpassword;
    }

    public function setConfirmpassword(string $confirmpassword): self
    {
        $this->confirmpassword = $confirmpassword;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
>>>>>>> Stashed changes

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use App\Repository\UtilisateursRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\EqualTo;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=UtilisateursRepository::class)
 * @UniqueEntity("login", message = "Le login a déjà été pris. Veuillez choisir un autre.")
 */

class Utilisateurs implements UserInterface
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

/**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $formation;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_de_naissance;

/**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $civilite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $code_postal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $villes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=180, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $departement;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
* @ORM\Column(nullable=false)
*/
    private $login;

    /**
     * @Assert\Length(min=6, minMessage="Votre mot de passe doit avoir au moins 6 caractères !")
     * @var string The hashed password
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**

     */
    // private $confirmepassword;

    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=true)
     * @Gedmo\Slug(fields={"login"})
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
        private $status;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

    /**
     * @ORM\OneToMany(targetEntity=Messages::class, mappedBy="expediteur", orphanRemoval=true)
     */
    private $message_envoyer;


    /**
     * @ORM\OneToMany(targetEntity=Medias::class, mappedBy="utilisateurs")
     */
    private $medias;

    /**
     * @ORM\OneToMany(targetEntity=Contacts::class, mappedBy="utilisateur")
     */
    private $contacts;

    /**
     * @ORM\OneToMany(targetEntity=Activites::class, mappedBy="utilisateur")
     */
    private $activites;

    /**
     * @ORM\OneToMany(targetEntity=Messages::class, mappedBy="destinataire")
     */
    private $message_recu;

    public function __construct()
    {
        $this->message_envoyer = new ArrayCollection();
        $this->medias = new ArrayCollection();
        $this->contacts = new ArrayCollection();
        $this->activites = new ArrayCollection();
        $this->message_recu = new ArrayCollection();
        }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Un identifiant visuel qui représente cet utilisateur.
      *
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
        //garantir que chaque utilisateur a au moins ROLE_USER

         $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(?string $role): self
    {
        if(!$role) {
            return $this;
        }

        if ($this->roles) {
            array_push($this->roles, $role);
        } else {
            $this->roles = [$role];
        }

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     *Le retour d'un sel n'est nécessaire que si vous n'utilisez pas un
      *algorithme de hachage (par exemple bcrypt ou sodium) dans votre security.yaml.
      * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     *effacer les identifiants
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // Si vous stockez des données temporaires et sensibles sur l'utilisateur, effacez-les ici
         //
        // $this->Password = null;
    }

    public function getFormation(): ?string
    {
        return $this->formation;
    }

    public function setFormation(?string $formation): self
    {
        $this->formation = $formation;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->date_de_naissance;
    }

    public function setDateDeNaissance(?\DateTimeInterface $date_de_naissance): self
    {
        $this->date_de_naissance = $date_de_naissance;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->code_postal;
    }

    public function setCodePostal(?string $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getVilles(): ?string
    {
        return $this->villes;
    }

    public function setVilles(?string $villes): self
    {
        $this->villes = $villes;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(?string $civilite): self
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }


    /**
     * @return Collection<int, Messages>
     */
    public function getMessageEnvoyer(): Collection
    {
        return $this->message_envoyer;
    }

    public function addMessageEnvoyer(Messages $messageEnvoyer): self
    {
        if (!$this->message_envoyer->contains($messageEnvoyer)) {
            $this->message_envoyer[] = $messageEnvoyer;
            $messageEnvoyer->setExpediteur($this);
        }

        return $this;
    }

    public function removeMessageEnvoyer(Messages $messageEnvoyer): self
    {
        if ($this->message_envoyer->removeElement($messageEnvoyer)) {
            // set the owning side to null (unless already changed)
            if ($messageEnvoyer->getExpediteur() === $this) {
                $messageEnvoyer->setExpediteur(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection<int, Medias>
     */
    public function getMedias(): Collection
    {
        return $this->medias;
    }

    public function addMedia(Medias $media): self
    {
        if (!$this->medias->contains($media)) {
            $this->medias[] = $media;
            $media->setUtilisateurs($this);
        }

        return $this;
    }

    public function removeMedia(Medias $media): self
    {
        if ($this->medias->removeElement($media)) {
            // set the owning side to null (unless already changed)
            if ($media->getUtilisateurs() === $this) {
                $media->setUtilisateurs(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Contacts>
     */
    public function getContacts(): Collection
    {
        return $this->contacts;
    }

    public function addContact(Contacts $contact): self
    {
        if (!$this->contacts->contains($contact)) {
            $this->contacts[] = $contact;
            $contact->setUtilisateur($this);
        }

        return $this;
    }

    public function removeContact(Contacts $contact): self
    {
        if ($this->contacts->removeElement($contact)) {
            // set the owning side to null (unless already changed)
            if ($contact->getUtilisateur() === $this) {
                $contact->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Activites>
     */
    public function getActivites(): Collection
    {
        return $this->activites;
    }

    public function addActivite(Activites $activite): self
    {
        if (!$this->activites->contains($activite)) {
            $this->activites[] = $activite;
            $activite->setUtilisateur($this);
        }

        return $this;
    }

    public function removeActivite(Activites $activite): self
    {
        if ($this->activites->removeElement($activite)) {
            // set the owning side to null (unless already changed)
            if ($activite->getUtilisateur() === $this) {
                $activite->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Messages>
     */
    public function getMessageRecu(): Collection
    {
        return $this->message_recu;
    }

    public function addMessageRecu(Messages $messageRecu): self
    {
        if (!$this->message_recu->contains($messageRecu)) {
            $this->message_recu[] = $messageRecu;
            $messageRecu->setDestinataire($this);
        }

        return $this;
    }

    public function removeMessageRecu(Messages $messageRecu): self
    {
        if ($this->message_recu->removeElement($messageRecu)) {
            // set the owning side to null (unless already changed)
            if ($messageRecu->getDestinataire() === $this) {
                $messageRecu->setDestinataire(null);
            }
        }

        return $this;
    }



}

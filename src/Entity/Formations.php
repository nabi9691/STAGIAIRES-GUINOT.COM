<?php

namespace App\Entity;

use App\Repository\FormationsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormationsRepository::class)
 */
class Formations
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_formation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $objectif_formation;

        /**
     * @ORM\Column(type="date", length=255)
     */
    private $date_formation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $civilite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cout_formation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $preRequis;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre_professionnel;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sessions;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

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

    public function getNomFormation(): ?string
    {
        return $this->nom_formation;
    }

    public function setNomFormation(string $nom_formation): self
    {
        $this->nom_formation = $nom_formation;

        return $this;
    }

    public function getDateFormation(): ?\DateTimeInterface
    {
        return $this->date_formation;
    }

    public function setDateFormation(\DateTimeInterface $date_formation): self
    {
        $this->date_formation = $date_formation;

        return $this;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(string $civilite): self
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getObjectifFormation(): ?string
    {
        return $this->objectif_formation;
    }

    public function setObjectifFormation(string $objectif_formation): self
    {
        $this->objectif_formation = $objectif_formation;

        return $this;
    }

    public function getCoutFormation(): ?string
    {
        return $this->cout_formation;
    }

    public function setCoutFormation(string $cout_formation): self
    {
        $this->cout_formation = $cout_formation;

        return $this;
    }

    public function getTitreProfessionnel(): ?string
    {
        return $this->titre_professionnel;
    }

    public function setTitreProfessionnel(string $titre_professionnel): self
    {
        $this->titre_professionnel = $titre_professionnel;

        return $this;
    }


    public function getPreRequis(): ?string
    {
        return $this->preRequis;
    }

    public function setPreRequis(string $preRequis): self
    {
        $this->preRequis = $preRequis;

        return $this;
    }

    public function getSessions(): ?string
    {
        return $this->sessions;
    }

    public function setSessions(string $sessions): self
    {
        $this->sessions = $sessions;

        return $this;
    }






}
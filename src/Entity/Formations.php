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
    private $email;

        /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_formation;

  

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
    private $cout_formation;

   

    




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

   

  

    public function getCoutFormation(): ?string
    {
        return $this->cout_formation;
    }

    public function setCoutFormation(string $cout_formation): self
    {
        $this->cout_formation = $cout_formation;

        return $this;
    }

   

   







}
<?php

namespace App\Entity;

//use App\Entity\Formations;
use App\Repository\LangagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LangagesRepository::class)
 */
class Langages
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
    private $nom_langage;

            /**
     * @ORM\Column(type="date", length=255)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $objectif;

        /**
     * @ORM\Column(type="string", length=255)
     */
    private $cout_formation;

        /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

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

    public function getNomLangage(): ?string
    {
        return $this->nom_langage;
    }

    public function setNomLangage(string $nom_langage): self
    {
        $this->nom_langage = $nom_langage;

        return $this;
    }

    public function getObjectif(): ?string
    {
        return $this->objectif;
    }

    public function setObjectif(string $objectif): self
    {
        $this->objectif = $objectif;

        return $this;
    }
    
    public function getCoefficient(): ?string
    {
        return $this->coefficient;
    }

    public function setCoefficient(string $coefficient): self
    {
        $this->coefficient = $coefficient;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

}

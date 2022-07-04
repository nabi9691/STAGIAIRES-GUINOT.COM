<?php

namespace App\Entity;

//use App\Entity\Langages;
use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoursRepository::class)
 */
class Cours
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
    private $civilite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resume;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre_cours;

        /**
     * @ORM\Column(type="date", length=255)
     */
    private $date_cours;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_cours;

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

    public function getTitreCours(): ?string
    {
        return $this->titre_cours;
    }

    public function setTitreCours(string $titre_cours): self
    {
        $this->titre_cours = $titre_cours;

        return $this;
    }

    public function getTypeCours(): ?string
    {
        return $this->type_cours;
    }

    public function setTypeCours(string $type_cours): self
    {
        $this->type_cours = $type_cours;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getDateCours(): ?\DateTimeInterface
    {
        return $this->date_cours;
    }

    public function setDateCours(\DateTimeInterface $date_cours): self
    {
        $this->date_cours = $date_cours;

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

}

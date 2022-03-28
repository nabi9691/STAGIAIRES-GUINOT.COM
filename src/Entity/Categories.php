<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriesRepository::class)
 */
class Categories
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
    private $nom_categorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenu_categorie;

    /**
     * @ORM\OneToMany(targetEntity=Mediats::class, mappedBy="categories")
     */
    private $mediats;

    public function __construct()
    {
        $this->mediats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCategorie(): ?string
    {
        return $this->nom_categorie;
    }

    public function setNomCategorie(string $nom_categorie): self
    {
        $this->nom_categorie = $nom_categorie;

        return $this;
    }

    public function getContenuCategorie(): ?string
    {
        return $this->contenu_categorie;
    }

    public function setContenuCategorie(string $contenu_categorie): self
    {
        $this->contenu_categorie = $contenu_categorie;

        return $this;
    }

    /**
     * @return Collection<int, Mediats>
     */
    public function getMediats(): Collection
    {
        return $this->mediats;
    }

    public function addMediat(Mediats $mediat): self
    {
        if (!$this->mediats->contains($mediat)) {
            $this->mediats[] = $mediat;
            $mediat->setCategories($this);
        }

        return $this;
    }

    public function removeMediat(Mediats $mediat): self
    {
        if ($this->mediats->removeElement($mediat)) {
            // set the owning side to null (unless already changed)
            if ($mediat->getCategories() === $this) {
                $mediat->setCategories(null);
            }
        }

        return $this;
    }
}

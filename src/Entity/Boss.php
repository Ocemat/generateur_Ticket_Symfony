<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BossRepository")
 */
class Boss
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ticket", mappedBy="boss", orphanRemoval=true)
     */
    private $boss;

    public function __construct()
    {
        $this->boss = new ArrayCollection();
    }

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

    /**
     * @return Collection|Ticket[]
     */
    public function getBoss(): Collection
    {
        return $this->boss;
    }

    public function addBoss(Ticket $boss): self
    {
        if (!$this->boss->contains($boss)) {
            $this->boss[] = $boss;
            $boss->setBoss($this);
        }

        return $this;
    }

    public function removeBoss(Ticket $boss): self
    {
        if ($this->boss->contains($boss)) {
            $this->boss->removeElement($boss);
            // set the owning side to null (unless already changed)
            if ($boss->getBoss() === $this) {
                $boss->setBoss(null);
            }
        }

        return $this;
    }
}

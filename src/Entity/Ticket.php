<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TicketRepository")
 */
class Ticket
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Noob")
     * @ORM\JoinColumn(nullable=false)
     */
    private $noob;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Boss", inversedBy="boss")
     * @ORM\JoinColumn(nullable=false)
     */
    private $boss;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Reason")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reason;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Urgence")
     * @ORM\JoinColumn(nullable=false)
     */
    private $urgence;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getNoob(): ?Noob
    {
        return $this->noob;
    }

    public function setNoob(?Noob $noob): self
    {
        $this->noob = $noob;

        return $this;
    }

    public function getBoss(): ?Boss
    {
        return $this->boss;
    }

    public function setBoss(?Boss $boss): self
    {
        $this->boss = $boss;

        return $this;
    }

    public function getReason(): ?Reason
    {
        return $this->reason;
    }

    public function setReason(?Reason $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getUrgence(): ?Urgence
    {
        return $this->urgence;
    }

    public function setUrgence(?Urgence $urgence): self
    {
        $this->urgence = $urgence;
        

        return $this;
    }
}

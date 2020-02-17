<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservationAtelierRepository")
 */
class ReservationAtelier
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
    private $prenomDuResponsable;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomDuResponsable;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailDuResponsable;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telDuResponsable;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombreDeParticipants;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomDuParticipant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomDuParticipant;

    /**
     * @ORM\Column(type="integer")
     */
    private $ageDuParticipant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenomDuResponsable(): ?string
    {
        return $this->prenomDuResponsable;
    }

    public function setPrenomDuResponsable(string $prenomDuResponsable): self
    {
        $this->prenomDuResponsable = $prenomDuResponsable;

        return $this;
    }

    public function getNomDuResponsable(): ?string
    {
        return $this->nomDuResponsable;
    }

    public function setNomDuResponsable(string $nomDuResponsable): self
    {
        $this->nomDuResponsable = $nomDuResponsable;

        return $this;
    }

    public function getEmailDuResponsable(): ?string
    {
        return $this->emailDuResponsable;
    }

    public function setEmailDuResponsable(string $emailDuResponsable): self
    {
        $this->emailDuResponsable = $emailDuResponsable;

        return $this;
    }

    public function getTelDuResponsable(): ?string
    {
        return $this->telDuResponsable;
    }

    public function setTelDuResponsable(string $telDuResponsable): self
    {
        $this->telDuResponsable = $telDuResponsable;

        return $this;
    }

    public function getNombreDeParticipants(): ?string
    {
        return $this->nombreDeParticipants;
    }

    public function setNombreDeParticipants(string $nombreDeParticipants): self
    {
        $this->nombreDeParticipants = $nombreDeParticipants;

        return $this;
    }

    public function getPrenomDuParticipant(): ?string
    {
        return $this->prenomDuParticipant;
    }

    public function setPrenomDuParticipant(string $prenomDuParticipant): self
    {
        $this->prenomDuParticipant = $prenomDuParticipant;

        return $this;
    }

    public function getNomDuParticipant(): ?string
    {
        return $this->nomDuParticipant;
    }

    public function setNomDuParticipant(string $nomDuParticipant): self
    {
        $this->nomDuParticipant = $nomDuParticipant;

        return $this;
    }

    public function getAgeDuParticipant(): ?int
    {
        return $this->ageDuParticipant;
    }

    public function setAgeDuParticipant(int $ageDuParticipant): self
    {
        $this->ageDuParticipant = $ageDuParticipant;

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SchoolRepository")
 */
class School
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
    private $nomref;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomref;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $schoolname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nbrestudent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $message;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $classe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomref(): ?string
    {
        return $this->nomref;
    }

    public function setNomref(string $nomref): self
    {
        $this->nomref = $nomref;

        return $this;
    }

    public function getPrenomref(): ?string
    {
        return $this->prenomref;
    }

    public function setPrenomref(string $prenomref): self
    {
        $this->prenomref = $prenomref;

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

    public function getSchoolname(): ?string
    {
        return $this->schoolname;
    }

    public function setSchoolname(string $schoolname): self
    {
        $this->schoolname = $schoolname;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getNbrestudent(): ?string
    {
        return $this->nbrestudent;
    }

    public function setNbrestudent(string $nbrestudent): self
    {
        $this->nbrestudent = $nbrestudent;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getClasse(): ?string
    {
        return $this->classe;
    }

    public function setClasse(string $classe): self
    {
        $this->classe = $classe;

        return $this;
    }
}

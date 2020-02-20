<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 *  fields={"email"},
 *  message="L'email que vous avez indiqué est déjà utilisé"
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\Email
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *  min=8,
     *  minMessage = "Votre mot de passe doit contenir au moins 8 caractères"
     * )
     * @Assert\EqualTo(
     *  propertyPath="confirm_password",
     *  message = "Le mot de passe est différent"
     * )
     */
    private $password;

    /**
     * @Assert\EqualTo(propertyPath="confirm_password")
     */

    /**
     * @ORM\Column(type="json")
     */
     private $roles;

        public function getRoles(): array
        {
            if(empty($this->roles)){
                $this->roles[] = 'ROLE_USER';
            }
            return $this->roles;
        }

        public function setRoles($roles)
        {
            if (!is_array($roles)) {
                $this->roles[] = $roles;
                return;
            }

            $this->roles = $roles;
        }

    public $confirm_password;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

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
     * @see UserInterface
     */
    public function eraseCredentials()
    {    
        return null;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        return null;
    }

    public function __toString()
    {
        return $this->getEmail();
    }


}

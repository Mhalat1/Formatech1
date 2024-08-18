<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdminRepository::class)]
#[ORM\Table(name: '`admin`')]
class Admin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $LastName = null;

    #[ORM\Column(length: 255)]
    private ?string $FirstName = null;

    #[ORM\Column]
    private ?int $Email = null;

    #[ORM\Column]
    private ?int $Password = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): static
    {
        $this->LastName = $LastName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    public function setFirstName(string $FirstName): static
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    public function getEmail(): ?int
    {
        return $this->Email;
    }

    public function setEmail(int $Email): static
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPassword(): ?int
    {
        return $this->Password;
    }

    public function setPassword(int $Password): static
    {
        $this->Password = $Password;

        return $this;
    }
}

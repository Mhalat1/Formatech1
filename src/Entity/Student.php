<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $civ = null;

    #[ORM\Column(length: 255)]
    private ?string $LastName = null;

    #[ORM\Column(length: 255)]
    private ?string $FirstName = null;

    #[ORM\Column(length: 255)]
    private ?string $Email = null;

    #[ORM\Column]
    private ?int $Password = null;

    #[ORM\Column]
    private ?int $Phone = null;

    #[ORM\Column]
    private ?int $Birthday = null;

    #[ORM\Column(length: 255)]
    private ?string $Comment = null;

    #[ORM\Column]
    private ?int $Score = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCiv(): ?string
    {
        return $this->civ;
    }

    public function setCiv(string $civ): static
    {
        $this->civ = $civ;

        return $this;
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

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): static
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

    public function getPhone(): ?int
    {
        return $this->Phone;
    }

    public function setPhone(int $Phone): static
    {
        $this->Phone = $Phone;

        return $this;
    }

    public function getBirthday(): ?int
    {
        return $this->Birthday;
    }

    public function setBirthday(int $Birthday): static
    {
        $this->Birthday = $Birthday;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->Comment;
    }

    public function setComment(string $Comment): static
    {
        $this->Comment = $Comment;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->Score;
    }

    public function setScore(int $Score): static
    {
        $this->Score = $Score;

        return $this;
    }
}

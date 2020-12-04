<?php

namespace App\Entity;

use App\Repository\PersonasRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonasRepository::class)
 */
class Personas
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $documento;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $celular;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDocumento(): ?string
    {
        return $this->documento;
    }

    public function setDocumento(string $documento): self
    {
        $this->documento = $documento;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getCelular(): ?string
    {
        return $this->celular;
    }

    public function setCelular(string $celular): self
    {
        $this->celular = $celular;

        return $this;
    }
}

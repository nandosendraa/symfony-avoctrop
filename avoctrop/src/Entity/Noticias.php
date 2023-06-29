<?php

namespace App\Entity;

use App\Repository\NoticiasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NoticiasRepository::class)]
class Noticias
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 70)]
    private ?string $titulo = null;

    #[ORM\Column(length: 255)]
    private ?string $texto = null;

    #[ORM\Column(length: 50)]
    private ?string $img = null;

    #[ORM\Column]
    private ?bool $relevante = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): static
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getTexto(): ?string
    {
        return $this->texto;
    }

    public function setTexto(string $texto): static
    {
        $this->texto = $texto;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): static
    {
        $this->img = $img;

        return $this;
    }

    public function isRelevante(): ?bool
    {
        return $this->relevante;
    }

    public function setRelevante(bool $relevante): static
    {
        $this->relevante = $relevante;

        return $this;
    }
}

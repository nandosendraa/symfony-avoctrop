<?php

namespace App\Entity;

use App\Repository\ProductosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductosRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 40)]
    private ?string $nombre = null;

    #[ORM\Column(length: 40)]
    private ?string $familia = null;

    #[ORM\Column(length: 40)]
    private ?string $subfamilia = null;

    #[ORM\Column(length: 40)]
    private ?string $calibre = null;

    #[ORM\Column]
    private ?int $kg = null;

    #[ORM\Column]
    private ?int $precio = null;

    #[ORM\Column(length: 60)]
    private ?string $img = null;

    #[ORM\Column(length: 255)]
    private ?string $img_principal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getFamilia(): ?string
    {
        return $this->familia;
    }

    public function setFamilia(string $familia): static
    {
        $this->familia = $familia;

        return $this;
    }

    public function getSubfamilia(): ?string
    {
        return $this->subfamilia;
    }

    public function setSubfamilia(string $subfamilia): static
    {
        $this->subfamilia = $subfamilia;

        return $this;
    }

    public function getCalibre(): ?string
    {
        return $this->calibre;
    }

    public function setCalibre(string $calibre): static
    {
        $this->calibre = $calibre;

        return $this;
    }

    public function getKg(): ?int
    {
        return $this->kg;
    }

    public function setKg(int $kg): static
    {
        $this->kg = $kg;

        return $this;
    }

    public function getPrecio(): ?int
    {
        return $this->precio;
    }

    public function setPrecio(int $precio): static
    {
        $this->precio = $precio;

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

    public function getImgPrincipal(): ?string
    {
        return $this->img_principal;
    }

    public function setImgPrincipal(string $img_principal): static
    {
        $this->img_principal = $img_principal;

        return $this;
    }
}

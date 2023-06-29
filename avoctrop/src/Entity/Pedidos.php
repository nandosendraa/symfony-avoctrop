<?php

namespace App\Entity;

use App\Repository\PedidosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PedidosRepository::class)]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fechaPrevista = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $FechaPedido = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaPrevista(): ?\DateTimeInterface
    {
        return $this->fechaPrevista;
    }

    public function setFechaPrevista(\DateTimeInterface $fechaPrevista): static
    {
        $this->fechaPrevista = $fechaPrevista;

        return $this;
    }

    public function getFechaPedido(): ?\DateTimeInterface
    {
        return $this->FechaPedido;
    }

    public function setFechaPedido(\DateTimeInterface $FechaPedido): static
    {
        $this->FechaPedido = $FechaPedido;

        return $this;
    }
}

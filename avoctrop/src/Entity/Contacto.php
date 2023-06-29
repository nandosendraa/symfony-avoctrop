<?php

namespace App\Entity;

use App\Repository\ContactoRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ContactoRepository::class)]
class Contacto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'El nombre es obligatorio')]
    #[Assert\Length(
        min: 4,
        max: 20,
        minMessage: 'El nombre no puede tener menos de 4 carácteres',
        maxMessage: 'El nombre no puede tener mas de 20 carácteres',
    )]
    private ?string $nombre = null;

    #[ORM\Column(length: 70)]
    #[Assert\NotBlank(message: 'El correo es obligatorio')]
    #[Assert\Email(message: 'El correo electronico tiene que ser valido')]
    #[Assert\Length(
        min: 10,
        max: 70,
        minMessage: 'El correo no puede tener menos de 10 carácteres',
        maxMessage: 'El correo no puede tener mas de 70 carácteres',
    )]
    private ?string $email = null;

    #[ORM\Column(length: 80)]
    #[Assert\NotBlank(message: 'El motivo es obligatorio')]
    #[Assert\Length(
        min: 5,
        max: 80,
        minMessage: 'El motivo no puede tener menos de 5 carácteres',
        maxMessage: 'El motivo no puede tener mas de 80 carácteres',
    )]
    private ?string $motivo = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'El mensaje es obligatorio')]
    #[Assert\Length(
        min: 10,
        max: 255,
        minMessage: 'El mensaje no puede tener menos de 10 carácteres',
        maxMessage: 'El mensaje no puede tener mas de 255 carácteres',
    )]
    private ?string $mensaje = null;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getMotivo(): ?string
    {
        return $this->motivo;
    }

    public function setMotivo(string $motivo): static
    {
        $this->motivo = $motivo;

        return $this;
    }

    public function getMensaje(): ?string
    {
        return $this->mensaje;
    }

    public function setMensaje(string $mensaje): static
    {
        $this->mensaje = $mensaje;

        return $this;
    }
}

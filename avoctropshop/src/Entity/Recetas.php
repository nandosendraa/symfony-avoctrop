<?php

namespace App\Entity;

use App\Repository\RecetasRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[Vich\Uploadable]
#[ORM\Entity(repositoryClass: RecetasRepository::class)]
class Recetas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $ingredientes = null;

    #[ORM\Column(length: 255)]
    private ?string $pasos = null;

    #[Vich\UploadableField(mapping: 'recetas', fileNameProperty:'img')]
    private ?File $fileImg = null;

    #[ORM\Column(length: 150)]
    private ?string $img = null;

    #[ORM\Column]
    private ?bool $top = null;

    #[ORM\Column(length: 60)]
    private ?string $color = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $masIngredientes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $masPasos = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    public function getFileImg(): ?File
    {
        return $this->fileImg;
    }

    /**
     * @param File|null $fileProfile
     */
    public function setFileImg(?File $fileImg): void
    {
        $this->fileImg = $fileImg;

        if (null !== $fileImg) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

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

    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(string $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getIngredientes(): ?string
    {
        return $this->ingredientes;
    }

    public function setIngredientes(string $ingredientes): static
    {
        $this->ingredientes = $ingredientes;

        return $this;
    }

    public function getPasos(): ?string
    {
        return $this->pasos;
    }

    public function setPasos(string $pasos): static
    {
        $this->pasos = $pasos;

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

    public function isTop(): ?bool
    {
        return $this->top;
    }

    public function setTop(bool $top): static
    {
        $this->top = $top;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getMasIngredientes(): ?string
    {
        return $this->masIngredientes;
    }

    public function setMasIngredientes(?string $masIngredientes): static
    {
        $this->masIngredientes = $masIngredientes;

        return $this;
    }

    public function getMasPasos(): ?string
    {
        return $this->masPasos;
    }

    public function setMasPasos(?string $masPasos): static
    {
        $this->masPasos = $masPasos;

        return $this;
    }
}

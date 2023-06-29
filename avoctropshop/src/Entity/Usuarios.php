<?php

namespace App\Entity;

use App\Repository\UsuariosRepository;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsuariosRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface, \Serializable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 15)]
    private ?string $nombre = null;

    #[ORM\Column(length: 25)]
    private ?string $apellidos = null;

    #[ORM\Column(length: 60)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 25)]
    private ?string $telefono = null;

    #[ORM\Column(length: 60)]
    private ?string $profile = null;

    #[ORM\Column(length: 40)]
    private ?string $role = null;

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

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): static
    {
        $this->apellidos = $apellidos;

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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): static
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getProfile(): ?string
    {
        return $this->profile;
    }

    public function setProfile(string $profile): static
    {
        $this->profile = $profile;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getUserIdentifier():string
    {
        return $this->getNombre();
    }

    public function serialize()
    {
        return serialize([
            $this->getId(),
            $this->getPassword()
        ]);    }

    /**
     * @param string $data
     * @return void
     */
    public function unserialize(string $data)
    {
        list( $this->id, $this->nombre, $this->password) =
            unserialize($data, ['allowed_classes' => false]);
    }

    
    public function getRoles(): array
    {
        return [$this->getRole()];
    }

    public function getSalt(): string
    {
        return "";
    }

    public function eraseCredentials()
    {

    }
}

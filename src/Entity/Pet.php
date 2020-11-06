<?php

namespace App\Entity;

use App\Repository\PetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PetRepository::class)
 */
class Pet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="date")
     */
    private $dateBorn;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $photoUrls = [];

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDateBorn(): ?\DateTimeInterface
    {
        return $this->dateBorn;
    }

    public function setDateBorn(\DateTimeInterface $dateBorn): self
    {
        $this->dateBorn = $dateBorn;

        return $this;
    }

    public function getPhotoUrls(): ?array
    {
        return $this->photoUrls;
    }

    public function setPhotoUrls(?array $photoUrls): self
    {
        $this->photoUrls = $photoUrls;

        return $this;
    }
}

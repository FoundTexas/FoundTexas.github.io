<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $fileref = null;

    #[ORM\ManyToOne(inversedBy: 'asociatedproject')]
    private ?MileStone $mileStone = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getFileref(): ?string
    {
        return $this->fileref;
    }

    public function setFileref(string $fileref): static
    {
        $this->fileref = $fileref;

        return $this;
    }

    public function getMileStone(): ?MileStone
    {
        return $this->mileStone;
    }

    public function setMileStone(?MileStone $mileStone): static
    {
        $this->mileStone = $mileStone;

        return $this;
    }
}

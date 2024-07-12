<?php

namespace App\Entity;

use App\Repository\BulletPointTagRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BulletPointTagRepository::class)]
class BulletPointTag
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'bulletPointTags')]
    #[ORM\JoinColumn(nullable: false)]
    private ?BulletPoint $bulletpoint = null;

    #[ORM\ManyToOne(inversedBy: 'bulletPointTags')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Tag $tag = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBulletpoint(): ?BulletPoint
    {
        return $this->bulletpoint;
    }

    public function setBulletpoint(?BulletPoint $bulletpoint): static
    {
        $this->bulletpoint = $bulletpoint;

        return $this;
    }

    public function getTag(): ?Tag
    {
        return $this->tag;
    }

    public function setTag(?Tag $tag): static
    {
        $this->tag = $tag;

        return $this;
    }
}

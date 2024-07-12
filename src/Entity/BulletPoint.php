<?php

namespace App\Entity;

use App\Repository\BulletPointRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BulletPointRepository::class)]
class BulletPoint
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'bulletpoints')]
    #[ORM\JoinColumn(nullable: false)]
    private ?MileStone $mileStone = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    /**
     * @var Collection<int, BulletPointTag>
     */
    #[ORM\OneToMany(mappedBy: 'bulletpoint', targetEntity: BulletPointTag::class)]
    private Collection $bulletPointTags;

    public function __construct()
    {
        $this->bulletPointTags = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, BulletPointTag>
     */
    public function getBulletPointTags(): Collection
    {
        return $this->bulletPointTags;
    }

    public function addBulletPointTag(BulletPointTag $bulletPointTag): static
    {
        if (!$this->bulletPointTags->contains($bulletPointTag)) {
            $this->bulletPointTags->add($bulletPointTag);
            $bulletPointTag->setBulletpoint($this);
        }

        return $this;
    }

    public function removeBulletPointTag(BulletPointTag $bulletPointTag): static
    {
        if ($this->bulletPointTags->removeElement($bulletPointTag)) {
            // set the owning side to null (unless already changed)
            if ($bulletPointTag->getBulletpoint() === $this) {
                $bulletPointTag->setBulletpoint(null);
            }
        }

        return $this;
    }
}

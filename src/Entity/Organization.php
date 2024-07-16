<?php

namespace App\Entity;

use App\Repository\OrganizationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrganizationRepository::class)]
class Organization
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 350)]
    private ?string $name = null;

    /**
     * @var Collection<int, MileStone>
     */
    #[ORM\OneToMany(mappedBy: 'organization', targetEntity: MileStone::class)]
    private Collection $mileStones;

    #[ORM\ManyToOne(inversedBy: 'organizations')]
    private ?Location $location = null;

    public function __construct()
    {
        $this->mileStones = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, MileStone>
     */
    public function getMileStones(): Collection
    {
        return $this->mileStones;
    }

    public function addMileStone(MileStone $mileStone): static
    {
        if (!$this->mileStones->contains($mileStone)) {
            $this->mileStones->add($mileStone);
            $mileStone->setOrganization($this);
        }

        return $this;
    }

    public function removeMileStone(MileStone $mileStone): static
    {
        if ($this->mileStones->removeElement($mileStone)) {
            // set the owning side to null (unless already changed)
            if ($mileStone->getOrganization() === $this) {
                $mileStone->setOrganization(null);
            }
        }

        return $this;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): static
    {
        $this->location = $location;

        return $this;
    }
}

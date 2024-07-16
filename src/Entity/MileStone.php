<?php

namespace App\Entity;

use App\Repository\MileStoneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MileStoneRepository::class)]
class MileStone
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $endDate = null;

    /**
     * @var Collection<int, Project>
     */
    #[ORM\OneToMany(mappedBy: 'mileStone', targetEntity: Project::class)]
    private Collection $asociatedprojects;

    /**
     * @var Collection<int, BulletPoint>
     */
    #[ORM\OneToMany(mappedBy: 'mileStone', targetEntity: BulletPoint::class, cascade: ["persist"])]
    private Collection $bulletpoints;

    #[ORM\ManyToOne(inversedBy: 'mileStones')]
    private ?Organization $organization = null;

    public function __construct()
    {
        $this->asociatedprojects = new ArrayCollection();
        $this->bulletpoints = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
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

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return Collection<int, Project>
     */
    public function getAsociatedproject(): Collection
    {
        return $this->asociatedprojects;
    }

    public function addAsociatedproject(Project $asociatedproject): static
    {
        if (!$this->asociatedprojects->contains($asociatedproject)) {
            $this->asociatedprojects->add($asociatedproject);
            $asociatedproject->setMileStone($this);
        }

        return $this;
    }

    public function removeAsociatedproject(Project $asociatedproject): static
    {
        if ($this->asociatedprojects->removeElement($asociatedproject)) {
            // set the owning side to null (unless already changed)
            if ($asociatedproject->getMileStone() === $this) {
                $asociatedproject->setMileStone(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BulletPoint>
     */
    public function getBulletpoints(): Collection
    {
        return $this->bulletpoints;
    }

    public function addBulletpoint(BulletPoint $bulletpoint): static
    {
        if (!$this->bulletpoints->contains($bulletpoint)) {
            $this->bulletpoints->add($bulletpoint);
            $bulletpoint->setMileStone($this);
        }

        return $this;
    }

    public function removeBulletpoint(BulletPoint $bulletpoint): static
    {
        if ($this->bulletpoints->removeElement($bulletpoint)) {
            // set the owning side to null (unless already changed)
            if ($bulletpoint->getMileStone() === $this) {
                $bulletpoint->setMileStone(null);
            }
        }

        return $this;
    }

    public function getOrganization(): ?Organization
    {
        return $this->organization;
    }

    public function setOrganization(?Organization $organization): static
    {
        $this->organization = $organization;

        return $this;
    }
}

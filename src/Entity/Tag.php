<?php

namespace App\Entity;

use App\Entity\BulletPointTag;
use App\Repository\TagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TagRepository::class)]
class Tag
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $name = null;

    /**
     * @var Collection<int, BulletPointTag>
     */
    #[ORM\OneToMany(mappedBy: 'tag', targetEntity: BulletPointTag::class)]
    private Collection $bulletPointTags;

    public function __construct()
    {
        $this->bulletPointTags = new ArrayCollection();
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
            $bulletPointTag->setTag($this);
        }

        return $this;
    }

    public function removeBulletPointTag(BulletPointTag $bulletPointTag): static
    {
        if ($this->bulletPointTags->removeElement($bulletPointTag)) {
            // set the owning side to null (unless already changed)
            if ($bulletPointTag->getTag() === $this) {
                $bulletPointTag->setTag(null);
            }
        }

        return $this;
    }
}

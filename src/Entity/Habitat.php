<?php

namespace App\Entity;

use App\Repository\HabitatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Trait\CreatedAtTrait;
use App\Entity\Trait\SlugTrait;

#[ORM\Entity(repositoryClass: HabitatRepository::class)]
class Habitat
{
    use CreatedAtTrait;
    use SlugTrait;
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\OneToMany(targetEntity: Image::class, mappedBy: 'Habitat', orphanRemoval: true, cascade:['persist'])]
    private Collection $images;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Animal $animal_ids = null;

    public function __construct()
    {
        $this->images = new ArrayCollection();
        $this->created_at = new \DateTimeImmutable();

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

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
     * @return Collection<int, Image>
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): static
    {
        if (!$this->images->contains($image)) {
            $this->images->add($image);
            $image->setHabitat($this);
        }

        return $this;
    }

    public function removeImage(Image $image): static
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getHabitat() === $this) {
                $image->setHabitat(null);
            }
        }

        return $this;
    }

    public function getAnimalIds(): ?Animal
    {
        return $this->animal_ids;
    }
    public function setAnimalIds(Animal $animal_ids): static
    {
        $this->animal_ids = $animal_ids;

        return $this;
    }
}

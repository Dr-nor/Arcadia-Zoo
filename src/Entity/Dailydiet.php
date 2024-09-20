<?php

namespace App\Entity;

use App\Entity\Trait\CreatedAtTrait;
use App\Entity\Trait\SlugTrait;
use App\Repository\DailydietRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DailydietRepository::class)]
class Dailydiet
{
    use SlugTrait;
    use CreatedAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
   

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $diet = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $qty = null;


    #[ORM\ManyToOne]
    private ?Animal $animal_id = null;



    public function __construct()
    {
        $this->created_at = new \DateTimeImmutable();

    }


    public function getId(): ?int
    {
        return $this->id;
    }

    


    public function getDiet(): ?string
    {
        return $this->diet;
    }

    public function setDiet(?string $diet): static
    {
        $this->diet = $diet;

        return $this;
    }

    public function getQty(): ?string
    {
        return $this->qty;
    }

    public function setQty(?string $qty): static
    {
        $this->qty = $qty;

        return $this;
    }

   


    public function getAnimalId(): ?Animal
    {
        return $this->animal_id;
    }

    public function setAnimalId(?Animal $animal_id): static
    {
        $this->animal_id = $animal_id;

        return $this;
    }
    
}

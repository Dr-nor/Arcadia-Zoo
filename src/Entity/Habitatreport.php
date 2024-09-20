<?php

namespace App\Entity;

use App\Entity\Trait\CreatedAtTrait;
use App\Repository\HabitatreportRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HabitatreportRepository::class)]
class Habitatreport
{
    use CreatedAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
   

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $report = null;

    #[ORM\ManyToOne]
    private ?Habitat $habitat_id = null;
    
    #[ORM\ManyToOne]
    private ?User $user = null;

    public function __construct()
    {
        $this->created_at = new \DateTimeImmutable();

    }


    public function getId(): ?int
    {
        return $this->id;
    }

    
    public function getReport(): ?string
    {
        return $this->report;
    }

    public function setReport(?string $report): static
    {
        $this->report = $report;

        return $this;
    }


    public function getHabitatId(): ?Habitat
    {
        return $this->habitat_id;
    }

    public function setHabitatId(?Habitat $habitat_id): static
    {
        $this->habitat_id = $habitat_id;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
    
}

<?php

namespace App\Entity;

use App\Repository\OpeningRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


#[ORM\Entity(repositoryClass: OpeningRepository::class)]
#[UniqueEntity('weekday')]
#[UniqueEntity(
    fields: ['weekday'],
    message: 'This day is already in use.',
)]
class Opening
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(unique: true)]
    private ?string $weekday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE , nullable: true)]
    private ?\DateTimeInterface $start_time = null;

    #[ORM\Column(type: Types::TIME_MUTABLE , nullable: true)]
    private ?\DateTimeInterface $end_time = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $pause_start = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $pause_end = null;

    #[ORM\Column]
    private ?bool $is_closed = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWeekday(): ?string
    {
        return $this->weekday;
    }

    public function setWeekday(string $weekday): static
    {
        $this->weekday = $weekday;

        return $this;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->start_time;
    }

    public function setStartTime(\DateTimeInterface $start_time = null) : static
    {
        $this->start_time = $start_time;

        return $this;
    }

    public function getEndTime(): ?\DateTimeInterface
    {
        return $this->end_time;
    }

    public function setEndTime(\DateTimeInterface $end_time = null): static
    {
        $this->end_time = $end_time;

        return $this;
    }

    public function getPauseStart(): ?\DateTimeInterface
    {
        return $this->pause_start;
    }

    public function setPauseStart(\DateTimeInterface $pause_start = null): static
    {
        $this->pause_start = $pause_start;

        return $this;
    }

    public function getPauseEnd(): ?\DateTimeInterface
    {
        return $this->pause_end;
    }

    public function setPauseEnd(?\DateTimeInterface $pause_end = null): static
    {
        $this->pause_end = $pause_end;

        return $this;
    }

    public function isIs_closed(): ?bool
    {
        return $this->is_closed;
    }
    public function getIsClosed(): ?bool
    {
        return $this->is_closed;
    }

    public function setIsClosed(bool $is_closed): static
    {
        $this->is_closed = $is_closed;

        return $this;
    }

}

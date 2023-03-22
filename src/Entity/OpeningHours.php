<?php

namespace App\Entity;

use App\Repository\OpeningHoursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OpeningHoursRepository::class)]
class OpeningHours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $blocOne = null;

    #[ORM\Column(length: 255)]
    private ?string $blocTwo = null;

    #[ORM\Column(length: 255)]
    private ?string $BlocThree = null;

    #[ORM\column(type: 'datetime_immutable', options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $created_at = null;
//    #[ORM\Column]
//    private ?\DateTimeImmutable $created_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBlocOne(): ?string
    {
        return $this->blocOne;
    }

    public function setBlocOne(string $blocOne): self
    {
        $this->blocOne = $blocOne;

        return $this;
    }

    public function getBlocTwo(): ?string
    {
        return $this->blocTwo;
    }

    public function setBlocTwo(string $blocTwo): self
    {
        $this->blocTwo = $blocTwo;

        return $this;
    }

    public function getBlocThree(): ?string
    {
        return $this->BlocThree;
    }

    public function setBlocThree(string $BlocThree): self
    {
        $this->BlocThree = $BlocThree;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
}

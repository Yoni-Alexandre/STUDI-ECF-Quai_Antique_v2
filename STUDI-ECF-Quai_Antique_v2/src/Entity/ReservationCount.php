<?php

namespace App\Entity;

use App\Repository\ReservationCountRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationCountRepository::class)]
class ReservationCount
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $maximunNumberOfReservation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMaximunNumberOfReservation(): ?int
    {
        return $this->maximunNumberOfReservation;
    }

    public function setMaximunNumberOfReservation(int $maximunNumberOfReservation): self
    {
        $this->maximunNumberOfReservation = $maximunNumberOfReservation;

        return $this;
    }
}

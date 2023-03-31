<?php

namespace App\Entity;

use App\Repository\MenusRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MenusRepository::class)]
class Menus
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $subtitle = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $optionOne = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $optionTwo = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $optionThree = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $optionFour = null;

    #[ORM\Column]
    private ?float $price = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(string $subtitle): self
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getOptionOne(): ?string
    {
        return $this->optionOne;
    }

    public function setOptionOne(?string $optionOne): self
    {
        $this->optionOne = $optionOne;

        return $this;
    }

    public function getOptionTwo(): ?string
    {
        return $this->optionTwo;
    }

    public function setOptionTwo(?string $optionTwo): self
    {
        $this->optionTwo = $optionTwo;

        return $this;
    }

    public function getOptionThree(): ?string
    {
        return $this->optionThree;
    }

    public function setOptionThree(?string $optionThree): self
    {
        $this->optionThree = $optionThree;

        return $this;
    }

    public function getOptionFour(): ?string
    {
        return $this->optionFour;
    }

    public function setOptionFour(?string $optionFour): self
    {
        $this->optionFour = $optionFour;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
}

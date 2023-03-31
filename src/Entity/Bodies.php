<?php

namespace App\Entity;

use App\Repository\BodiesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BodiesRepository::class)]
class Bodies
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $imageTitleOne = null;

    #[ORM\Column(length: 255)]
    private ?string $imageOne = null;

    #[ORM\Column(length: 255)]
    private ?string $imagePropertyOne = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contentImageOne = null;

    #[ORM\Column(length: 255)]
    private ?string $imageTitleTwo = null;

    #[ORM\Column(length: 255)]
    private ?string $imageTwo = null;

    #[ORM\Column(length: 255)]
    private ?string $imagePropertyTwo = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contentImageTwo = null;

    #[ORM\Column(length: 255)]
    private ?string $imageTitleThree = null;

    #[ORM\Column(length: 255)]
    private ?string $imageThree = null;

    #[ORM\Column(length: 255)]
    private ?string $imagePropertyThree = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contentImageThree = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageTitleOne(): ?string
    {
        return $this->imageTitleOne;
    }

    public function setImageTitleOne(string $imageTitleOne): self
    {
        $this->imageTitleOne = $imageTitleOne;

        return $this;
    }

    public function getImageOne(): ?string
    {
        return $this->imageOne;
    }

    public function setImageOne(string $imageOne): self
    {
        $this->imageOne = $imageOne;

        return $this;
    }

    public function getImagePropertyOne(): ?string
    {
        return $this->imagePropertyOne;
    }

    public function setImagePropertyOne(string $imagePropertyOne): self
    {
        $this->imagePropertyOne = $imagePropertyOne;

        return $this;
    }

    public function getContentImageOne(): ?string
    {
        return $this->contentImageOne;
    }

    public function setContentImageOne(string $contentImageOne): self
    {
        $this->contentImageOne = $contentImageOne;

        return $this;
    }

    public function getImageTitleTwo(): ?string
    {
        return $this->imageTitleTwo;
    }

    public function setImageTitleTwo(string $imageTitleTwo): self
    {
        $this->imageTitleTwo = $imageTitleTwo;

        return $this;
    }

    public function getImageTwo(): ?string
    {
        return $this->imageTwo;
    }

    public function setImageTwo(string $imageTwo): self
    {
        $this->imageTwo = $imageTwo;

        return $this;
    }

    public function getImagePropertyTwo(): ?string
    {
        return $this->imagePropertyTwo;
    }

    public function setImagePropertyTwo(string $imagePropertyTwo): self
    {
        $this->imagePropertyTwo = $imagePropertyTwo;

        return $this;
    }

    public function getContentImageTwo(): ?string
    {
        return $this->contentImageTwo;
    }

    public function setContentImageTwo(string $contentImageTwo): self
    {
        $this->contentImageTwo = $contentImageTwo;

        return $this;
    }

    public function getImageTitleThree(): ?string
    {
        return $this->imageTitleThree;
    }

    public function setImageTitleThree(string $imageTitleThree): self
    {
        $this->imageTitleThree = $imageTitleThree;

        return $this;
    }

    public function getImageThree(): ?string
    {
        return $this->imageThree;
    }

    public function setImageThree(string $imageThree): self
    {
        $this->imageThree = $imageThree;

        return $this;
    }

    public function getImagePropertyThree(): ?string
    {
        return $this->imagePropertyThree;
    }

    public function setImagePropertyThree(string $imagePropertyThree): self
    {
        $this->imagePropertyThree = $imagePropertyThree;

        return $this;
    }

    public function getContentImageThree(): ?string
    {
        return $this->contentImageThree;
    }

    public function setContentImageThree(string $contentImageThree): self
    {
        $this->contentImageThree = $contentImageThree;

        return $this;
    }
}

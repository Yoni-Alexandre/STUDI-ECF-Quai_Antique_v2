<?php

namespace App\Entity;

use App\Repository\HomeIllustrationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HomeIllustrationsRepository::class)]
class HomeIllustrations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $illustrationCircleOne = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contentIllustrationCircleOne = null;

    #[ORM\Column(length: 255)]
    private ?string $titleCircleOne = null;

    #[ORM\Column(length: 255)]
    private ?string $btnCircleOne = null;

    #[ORM\Column(length: 255)]
    private ?string $btnUrlCircleOne = null;

    #[ORM\Column(length: 255)]
    private ?string $illustrationCircleTwo = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contentIllustrationCircleTwo = null;

    #[ORM\Column(length: 255)]
    private ?string $titleCircleTwo = null;

    #[ORM\Column(length: 255)]
    private ?string $btnCircleTwo = null;

    #[ORM\Column(length: 255)]
    private ?string $btnUrlCircleTwo = null;

    #[ORM\Column(length: 255)]
    private ?string $illustrationCircleThree = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contentIllustrationCircleThree = null;

    #[ORM\Column(length: 255)]
    private ?string $titleCircleThree = null;

    #[ORM\Column(length: 255)]
    private ?string $btnCircleThree = null;

    #[ORM\Column(length: 255)]
    private ?string $btnUrlCircleThree = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIllustrationCircleOne(): ?string
    {
        return $this->illustrationCircleOne;
    }

    public function setIllustrationCircleOne(string $illustrationCircleOne): self
    {
        $this->illustrationCircleOne = $illustrationCircleOne;

        return $this;
    }

    public function getContentIllustrationCircleOne(): ?string
    {
        return $this->contentIllustrationCircleOne;
    }

    public function setContentIllustrationCircleOne(string $contentIllustrationCircleOne): self
    {
        $this->contentIllustrationCircleOne = $contentIllustrationCircleOne;

        return $this;
    }

    public function getTitleCircleOne(): ?string
    {
        return $this->titleCircleOne;
    }

    public function setTitleCircleOne(string $titleCircleOne): self
    {
        $this->titleCircleOne = $titleCircleOne;

        return $this;
    }

    public function getBtnCircleOne(): ?string
    {
        return $this->btnCircleOne;
    }

    public function setBtnCircleOne(string $btnCircleOne): self
    {
        $this->btnCircleOne = $btnCircleOne;

        return $this;
    }

    public function getBtnUrlCircleOne(): ?string
    {
        return $this->btnUrlCircleOne;
    }

    public function setBtnUrlCircleOne(string $btnUrlCircleOne): self
    {
        $this->btnUrlCircleOne = $btnUrlCircleOne;

        return $this;
    }

    public function getIllustrationCircleTwo(): ?string
    {
        return $this->illustrationCircleTwo;
    }

    public function setIllustrationCircleTwo(string $illustrationCircleTwo): self
    {
        $this->illustrationCircleTwo = $illustrationCircleTwo;

        return $this;
    }

    public function getContentIllustrationCircleTwo(): ?string
    {
        return $this->contentIllustrationCircleTwo;
    }

    public function setContentIllustrationCircleTwo(string $contentIllustrationCircleTwo): self
    {
        $this->contentIllustrationCircleTwo = $contentIllustrationCircleTwo;

        return $this;
    }

    public function getTitleCircleTwo(): ?string
    {
        return $this->titleCircleTwo;
    }

    public function setTitleCircleTwo(string $titleCircleTwo): self
    {
        $this->titleCircleTwo = $titleCircleTwo;

        return $this;
    }

    public function getBtnCircleTwo(): ?string
    {
        return $this->btnCircleTwo;
    }

    public function setBtnCircleTwo(string $btnCircleTwo): self
    {
        $this->btnCircleTwo = $btnCircleTwo;

        return $this;
    }

    public function getBtnUrlCircleTwo(): ?string
    {
        return $this->btnUrlCircleTwo;
    }

    public function setBtnUrlCircleTwo(string $btnUrlCircleTwo): self
    {
        $this->btnUrlCircleTwo = $btnUrlCircleTwo;

        return $this;
    }

    public function getIllustrationCircleThree(): ?string
    {
        return $this->illustrationCircleThree;
    }

    public function setIllustrationCircleThree(string $illustrationCircleThree): self
    {
        $this->illustrationCircleThree = $illustrationCircleThree;

        return $this;
    }

    public function getContentIllustrationCircleThree(): ?string
    {
        return $this->contentIllustrationCircleThree;
    }

    public function setContentIllustrationCircleThree(string $contentIllustrationCircleThree): self
    {
        $this->contentIllustrationCircleThree = $contentIllustrationCircleThree;

        return $this;
    }

    public function getTitleCircleThree(): ?string
    {
        return $this->titleCircleThree;
    }

    public function setTitleCircleThree(string $titleCircleThree): self
    {
        $this->titleCircleThree = $titleCircleThree;

        return $this;
    }

    public function getBtnCircleThree(): ?string
    {
        return $this->btnCircleThree;
    }

    public function setBtnCircleThree(string $btnCircleThree): self
    {
        $this->btnCircleThree = $btnCircleThree;

        return $this;
    }

    public function getBtnUrlCircleThree(): ?string
    {
        return $this->btnUrlCircleThree;
    }

    public function setBtnUrlCircleThree(string $btnUrlCircleThree): self
    {
        $this->btnUrlCircleThree = $btnUrlCircleThree;

        return $this;
    }
}

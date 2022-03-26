<?php

namespace App\Entity;

use App\Repository\MobileRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MobileRepository::class)
 */
class Mobile
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="float")
     */
    private $Price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Brand;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Chip;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $OS;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Screen_size;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Screen_tech;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CPU;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Back_cam;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Front_cam;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Memory;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->Price;
    }

    public function setPrice(float $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->Brand;
    }

    public function setBrand(string $Brand): self
    {
        $this->Brand = $Brand;

        return $this;
    }

    public function getChip(): ?string
    {
        return $this->Chip;
    }

    public function setChip(string $Chip): self
    {
        $this->Chip = $Chip;

        return $this;
    }

    public function getOS(): ?string
    {
        return $this->OS;
    }

    public function setOS(string $OS): self
    {
        $this->OS = $OS;

        return $this;
    }

    public function getScreenSize(): ?string
    {
        return $this->Screen_size;
    }

    public function setScreenSize(string $Screen_size): self
    {
        $this->Screen_size = $Screen_size;

        return $this;
    }

    public function getScreenTech(): ?string
    {
        return $this->Screen_tech;
    }

    public function setScreenTech(string $Screen_tech): self
    {
        $this->Screen_tech = $Screen_tech;

        return $this;
    }

    public function getCPU(): ?string
    {
        return $this->CPU;
    }

    public function setCPU(string $CPU): self
    {
        $this->CPU = $CPU;

        return $this;
    }

    public function getBackCam(): ?string
    {
        return $this->Back_cam;
    }

    public function setBackCam(string $Back_cam): self
    {
        $this->Back_cam = $Back_cam;

        return $this;
    }

    public function getFrontCam(): ?string
    {
        return $this->Front_cam;
    }

    public function setFrontCam(string $Front_cam): self
    {
        $this->Front_cam = $Front_cam;

        return $this;
    }

    public function getMemory(): ?string
    {
        return $this->Memory;
    }

    public function setMemory(string $Memory): self
    {
        $this->Memory = $Memory;

        return $this;
    }
}

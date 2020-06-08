<?php

namespace App\Entity;

use App\Repository\WodRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WodRepository::class)
 */
class Wod
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $wod_begginer;

    /**
     * @ORM\Column(type="text")
     */
    private $wod_intermediate;

    /**
     * @ORM\Column(type="text")
     */
    private $wod_difficult;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     */
    private $video;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWodBegginer(): ?string
    {
        return $this->wod_begginer;
    }

    public function setWodBegginer(string $wod_begginer): self
    {
        $this->wod_begginer = $wod_begginer;

        return $this;
    }

    public function getWodIntermediate(): ?string
    {
        return $this->wod_intermediate;
    }

    public function setWodIntermediate(string $wod_intermediate): self
    {
        $this->wod_intermediate = $wod_intermediate;

        return $this;
    }

    public function getWodDifficult(): ?string
    {
        return $this->wod_difficult;
    }

    public function setWodDifficult(string $wod_difficult): self
    {
        $this->wod_difficult = $wod_difficult;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(string $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}

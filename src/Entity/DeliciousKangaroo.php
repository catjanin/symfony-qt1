<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DeliciousKangarooRepository")
 */
class DeliciousKangaroo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $australia;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAustralia(): ?string
    {
        return $this->australia;
    }

    public function setAustralia(string $australia): self
    {
        $this->australia = $australia;

        return $this;
    }
}

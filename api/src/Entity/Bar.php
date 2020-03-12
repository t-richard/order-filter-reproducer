<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable()
 */
class Bar
{
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $luckyNumber;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $secondLuckyNumber;

    public function getLuckyNumber(): ?int
    {
        return $this->luckyNumber;
    }

    public function setLuckyNumber(?int $luckyNumber): self
    {
        $this->luckyNumber = $luckyNumber;

        return $this;
    }

    public function getSecondLuckyNumber(): ?int
    {
        return $this->secondLuckyNumber;
    }

    public function setSecondLuckyNumber(?int $secondLuckyNumber): self
    {
        $this->secondLuckyNumber = $secondLuckyNumber;

        return $this;
    }
}

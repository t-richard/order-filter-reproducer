<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\FooRepository")
 *
 * @ApiFilter(OrderFilter::class, properties = {
 *     "bar.luckyNumber" : { "nulls_comparison" : OrderFilter::NULLS_SMALLEST },
 *     "bar.secondLuckyNumber"
 * })
 */
class Foo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Embedded(class="App\Entity\Bar")
     */
    private $bar;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBar(): ?Bar
    {
        return $this->bar;
    }

    public function setBar(Bar $bar): self
    {
        $this->bar = $bar;

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Swagger\Annotations as SWG;
use Nelmio\ApiDocBundle\Annotation\Model;
use App\Model\Ship;
use App\Model\Item;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShiporderRepository")
 */
class Shiporder
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Person")
     * @ORM\JoinColumn(nullable=false)
     */
    private $person;

    /**
     * @ORM\Column(type="array")
     * @SWG\Property(ref=@Model(type=Item::class))
     */
    private $items;

    /**
     * @ORM\Column(type="object")
     */
    private $shipto;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPerson(): ?Person
    {
        return $this->person;
    }

    public function setPerson(?Person $person): self
    {
        $this->person = $person;

        return $this;
    }

    public function getItems(): ?array
    {
        return $this->items;
    }

    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function getShipto()
    {
        return $this->shipto;
    }

    public function setShipto($shipto): ?object
    {
        $this->shipto = $shipto;

        return $this;
    }
}

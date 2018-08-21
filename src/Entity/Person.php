<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Swagger\Annotations as SWG;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonRepository")
 */
class Person
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
    private $personname;

    /**
     * @ORM\Column(type="array", nullable=true)
     * @SWG\Property(type="string[]")
     */
    private $phones;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonname()
    {
        return $this->personname;
    }

    public function setPersonname($personname)
    {
            $this->personname = $personname;
    }

    public function getPhones(): ?array
    {
        return $this->phones;
    }

    public function setPhones(?array $phones): self
    {
        $this->phones = $phones;

        return $this;
    }
}

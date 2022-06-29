<?php

namespace App\Entity;

use App\Repository\CityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CityRepository::class)]
class City
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\ManyToMany(targetEntity: Competent::class, mappedBy: 'city')]
    private $competents;

    public function __construct()
    {
        $this->competents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection<int, Competent>
     */
    public function getCompetents(): Collection
    {
        return $this->competents;
    }

    public function addCompetent(Competent $competent): self
    {
        if (!$this->competents->contains($competent)) {
            $this->competents[] = $competent;
            $competent->addCity($this);
        }

        return $this;
    }

    public function removeCompetent(Competent $competent): self
    {
        if ($this->competents->removeElement($competent)) {
            $competent->removeCity($this);
        }

        return $this;
    }
}

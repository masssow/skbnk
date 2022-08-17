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
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'city', targetEntity: Competent::class)]
    private Collection $competent;

    public function __construct()
    {
        $this->competent = new ArrayCollection();
    }

   

    public function __toString()
    {
        return $this->name;
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
    public function getCompetent(): Collection
    {
        return $this->competent;
    }

    public function addCompetent(Competent $competent): self
    {
        if (!$this->competent->contains($competent)) {
            $this->competent[] = $competent;
            $competent->setCity($this);
        }

        return $this;
    }

    public function removeCompetent(Competent $competent): self
    {
        if ($this->competent->removeElement($competent)) {
            // set the owning side to null (unless already changed)
            if ($competent->getCity() === $this) {
                $competent->setCity(null);
            }
        }

        return $this;
    }

}

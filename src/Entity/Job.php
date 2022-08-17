<?php

namespace App\Entity;

use App\Repository\JobRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JobRepository::class)]
class Job
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\ManyToOne(inversedBy: 'job')]
    private ?Category $category = null;

    #[ORM\ManyToMany(targetEntity: Competent::class, inversedBy: 'jobs')]
    private Collection $competent;

    public function __construct()
    {
        $this->competent = new ArrayCollection();
    }


    public function __toString()
    {
        return $this->getName();
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

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

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
        }

        return $this;
    }

    public function removeCompetent(Competent $competent): self
    {
        $this->competent->removeElement($competent);

        return $this;
    }

}

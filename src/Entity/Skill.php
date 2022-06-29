<?php

namespace App\Entity;

use App\Repository\SkillRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkillRepository::class)]
class Skill
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\ManyToMany(targetEntity: Competent::class, mappedBy: 'skill')]
    private $competents;

    public function __construct()
    {
        $this->competents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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
            $competent->addSkill($this);
        }

        return $this;
    }

    public function removeCompetent(Competent $competent): self
    {
        if ($this->competents->removeElement($competent)) {
            $competent->removeSkill($this);
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\CompetentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompetentRepository::class)]
class Competent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $firstName;

    #[ORM\Column(type: 'string', length: 255)]
    private $lastName;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $occupation;

    #[ORM\Column(type: 'float')]
    private $rate;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $experience;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $studies;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $certificate;

    #[ORM\Column(type: 'text', nullable: true)]
    private $recommendation;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $language;

    #[ORM\ManyToMany(targetEntity: City::class, inversedBy: 'competents')]
    private $city;

    #[ORM\OneToMany(mappedBy: 'competent', targetEntity: Mission::class)]
    private $mission;

    #[ORM\ManyToMany(targetEntity: Skill::class, inversedBy: 'competents')]
    private $skill;

    public function __construct()
    {
        $this->city = new ArrayCollection();
        $this->mission = new ArrayCollection();
        $this->skill = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getOccupation(): ?string
    {
        return $this->occupation;
    }

    public function setOccupation(?string $occupation): self
    {
        $this->occupation = $occupation;

        return $this;
    }

    public function getRate(): ?float
    {
        return $this->rate;
    }

    public function setRate(float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getExperience(): ?string
    {
        return $this->experience;
    }

    public function setExperience(?string $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getStudies(): ?string
    {
        return $this->studies;
    }

    public function setStudies(?string $studies): self
    {
        $this->studies = $studies;

        return $this;
    }

    public function getCertificate(): ?string
    {
        return $this->certificate;
    }

    public function setCertificate(?string $certificate): self
    {
        $this->certificate = $certificate;

        return $this;
    }

    public function getRecommendation(): ?string
    {
        return $this->recommendation;
    }

    public function setRecommendation(?string $recommendation): self
    {
        $this->recommendation = $recommendation;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return Collection<int, City>
     */
    public function getCity(): Collection
    {
        return $this->city;
    }

    public function addCity(City $city): self
    {
        if (!$this->city->contains($city)) {
            $this->city[] = $city;
        }

        return $this;
    }

    public function removeCity(City $city): self
    {
        $this->city->removeElement($city);

        return $this;
    }

    /**
     * @return Collection<int, Mission>
     */
    public function getMission(): Collection
    {
        return $this->mission;
    }

    public function addMission(Mission $mission): self
    {
        if (!$this->mission->contains($mission)) {
            $this->mission[] = $mission;
            $mission->setCompetent($this);
        }

        return $this;
    }

    public function removeMission(Mission $mission): self
    {
        if ($this->mission->removeElement($mission)) {
            // set the owning side to null (unless already changed)
            if ($mission->getCompetent() === $this) {
                $mission->setCompetent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Skill>
     */
    public function getSkill(): Collection
    {
        return $this->skill;
    }

    public function addSkill(Skill $skill): self
    {
        if (!$this->skill->contains($skill)) {
            $this->skill[] = $skill;
        }

        return $this;
    }

    public function removeSkill(Skill $skill): self
    {
        $this->skill->removeElement($skill);

        return $this;
    }

}

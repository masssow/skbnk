<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CompetentRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\DependencyInjection\Reference;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


#[ORM\Entity(repositoryClass: CompetentRepository::class)]
/**
 * @Vich\Uploadable
 */

class Competent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;


    #[ORM\Column(nullable: true)]
    private ?float $tarif = null;

    #[ORM\Column(nullable: true)]
    private ?int $experience = null;

    #[ORM\Column(length: 255)]
    private ?string $sectorActivity = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $formation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $diplomes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $certification = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $langues = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageName = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\ManyToOne(inversedBy: 'competent')]
    private ?City $city = null;

    #[ORM\ManyToMany(targetEntity: Job::class, mappedBy: 'competent')]
    private Collection $jobs;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="competent", fileNameProperty="imageName", size="imageSize")
     * 
     * @var File|null
     */
    private $imageFile;

    #[ORM\OneToOne(mappedBy: 'competent', cascade: ['persist', 'remove'])]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTarif(): ?float
    {
        return $this->tarif;
    }

    public function setTarif(?float $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getExperience(): ?int
    {
        return $this->experience;
    }

    public function setExperience(?int $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getSectorActivity(): ?string
    {
        return $this->sectorActivity;
    }

    public function setSectorActivity(string $sectorActivity): self
    {
        $this->sectorActivity = $sectorActivity;

        return $this;
    }

    public function getFormation(): ?string
    {
        return $this->formation;
    }

    public function setFormation(?string $formation): self
    {
        $this->formation = $formation;

        return $this;
    }

    public function getDiplomes(): ?string
    {
        return $this->diplomes;
    }

    public function setDiplomes(?string $diplomes): self
    {
        $this->diplomes = $diplomes;

        return $this;
    }

    public function getCertification(): ?string
    {
        return $this->certification;
    }

    public function setCertification(?string $certification): self
    {
        $this->certification = $certification;

        return $this;
    }

    public function getLangues(): ?string
    {
        return $this->langues;
    }

    public function setLangues(?string $langues): self
    {
        $this->langues = $langues;

        return $this;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }

    public function setImageSize(?int $imageSize): self
    {
        $this->imageSize = $imageSize;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    
    public function getCity(): ?City
    {
        return $this->city;
    }

    public function setCity(?City $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return Collection<int, Job>
     */
    public function getJobs(): Collection
    {
        return $this->jobs;
    }

    public function addJob(Job $job): self
    {
        if (!$this->jobs->contains($job)) {
            $this->jobs[] = $job;
            $job->addCompetent($this);
        }

        return $this;
    }

    public function removeJob(Job $job): self
    {
        if ($this->jobs->removeElement($job)) {
            $job->removeCompetent($this);
        }

        return $this;
    }
    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        // unset the owning side of the relation if necessary
        if ($user === null && $this->user !== null) {
            $this->user->setCompetent(null);
        }

        // set the owning side of the relation if necessary
        if ($user !== null && $user->getCompetent() !== $this) {
            $user->setCompetent($this);
        }

        $this->user = $user;

        return $this;
    }
}

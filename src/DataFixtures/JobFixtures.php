<?php

namespace App\DataFixtures;

use App\Entity\Job;
use App\Entity\Category;
use App\Entity\Competent;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class JobFixtures extends Fixture
{
    public const CAVISTE            = 'Caviste';
    public const ARBORICULTEUR      = 'Arboriculteur / Arboricultrice';
    public const ELEVEUR_VOLAILLE   = 'Eléveur volailles';
    public const BIJOUTIER          = 'Bijoutier / Bijoutière-joallière';
    public const DESIGNER           = 'Designer / Designeuse automobile';
    public const AGENT_ASSURANCE    = 'Agent / Agente général d\'assurances';
    public const ANALISTE_CREDIT    = 'Analiste de credit';
    public const ANALISTE_FINANCE   = 'Analiste financier';
    public const ANALISTE_FUSION_A  = 'Analyste fusions acquisitions';
    public function load(ObjectManager $manager): void
    {
        $job = new Job();
        $job->getId(1);
        $job->setName('caviste');
        $job->setCategory($this->getReference(Categoryfixtures::AGRICULTURE));
        $manager->persist($job);

        $job = new Job();
        $job->getId(2);
        $job->setName('Arboriculteur / Arboricultrice');
        $job->setCategory($this->getReference(Categoryfixtures::AGRICULTURE));
        $manager->persist($job);

        $job = new Job();
        $job->getId(3);
        $job->setName('Eléveur volailles');
        $job->setCategory($this->getReference(Categoryfixtures::AGRICULTURE));
        $manager->persist($job);

        $job = new Job();
        $job->getId(4);
        $job->setName('Bijoutier / Bijoutière-joallière');
        $job->setCategory($this->getReference(Categoryfixtures::ARTDESINGMODE));
        $manager->persist($job);

        
        $job = new Job();
        $job->getId(4);
        $job->setName('Designer / Designeuse automobile');
        $job->setCategory($this->getReference(Categoryfixtures::ARTDESINGMODE));
        $manager->persist($job);

        $job = new Job();
        $job->getId(5);
        $job->setName('Designer / Designeuse de produit de lunetterie');
        $job->setCategory($this->getReference(Categoryfixtures::ARTDESINGMODE));
        $manager->persist($job);

        $job = new Job();
        $job->getId(6);
        $job->setName('Agent / Agente général d\'assurances');
        $job->setCategory($this->getReference(Categoryfixtures::BANQUEFINANCEASSU));
        $manager->persist($job);

        $job = new Job();
        $job->getId(7);
        $job->setName('Analyste de crédit');
        $job->setCategory($this->getReference(Categoryfixtures::BANQUEFINANCEASSU));
        $manager->persist($job);

        $job = new Job();
        $job->getId(8);
        $job->setName('Analyste financier / financière');
        $job->setCategory($this->getReference(Categoryfixtures::BANQUEFINANCEASSU));
        $manager->persist($job);

        $job = new Job();
        $job->getId(9 );
        $job->setName('Analyste fusions acquisitions');
        $job->setCategory($this->getReference(Categoryfixtures::BANQUEFINANCEASSU));
        $manager->persist($job);
        
        $job = new Job();
        $job->getId(10);
        $job->setName('Eleveur de Bobines');
        $job->setCategory($this->getReference(Categoryfixtures::AGRICULTURE));
        $manager->persist($job);

        $job = new Job();
        $job->getId(11);
        $job->setName('Aquaculteur');
        $job->setCategory($this->getReference(Categoryfixtures::AGRICULTURE));
        $manager->persist($job);

        $job = new Job();
        $job->getId(12);
        $job->setName('Eléveur volailles');
        $job->setCategory($this->getReference(Categoryfixtures::AGRICULTURE));
        $manager->persist($job);

        $job = new Job();
        $job->getId(13);
        $job->setName('Céramiste');
        $job->setCategory($this->getReference(Categoryfixtures::ARTDESINGMODE));
        $manager->persist($job);

        
        $job = new Job();
        $job->getId(14);
        $job->setName('Coutelier');
        $job->setCategory($this->getReference(Categoryfixtures::ARTDESINGMODE));
        $manager->persist($job);

        $job = new Job();
        $job->getId(15);
        $job->setName('Architecte Big Data');
        $job->setCategory($this->getReference(Categoryfixtures::INFORMATIQUEWEBRESEAUX));
        $manager->persist($job);

        $job = new Job();
        $job->getId(16);
        $job->setName('Chef de projet informatique');
        $job->setCategory($this->getReference(Categoryfixtures::INFORMATIQUEWEBRESEAUX));
        $manager->persist($job);

        $job = new Job();
        $job->getId(17);
        $job->setName('consultant CyberSécurité');
        $job->setCategory($this->getReference(Categoryfixtures::INFORMATIQUEWEBRESEAUX));
        $manager->persist($job);

        $job = new Job();
        $job->getId(18);
        $job->setName('consultant SEO');
        $job->setCategory($this->getReference(Categoryfixtures::INFORMATIQUEWEBRESEAUX));
        $manager->persist($job);

        $job = new Job();
        $job->getId(19 );
        $job->setName('Analyste KYC (Know your costumer)');
        $job->setCategory($this->getReference(Categoryfixtures::INFORMATIQUEWEBRESEAUX));
        $manager->persist($job);
        $manager->flush();
    }
}

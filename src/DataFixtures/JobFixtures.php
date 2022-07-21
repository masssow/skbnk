<?php

namespace App\DataFixtures;

use App\Entity\Job;
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
        $job->getSubCategory(SubCategorieFixtures::VITICULTURE);
        $manager->persist($job);

        $job = new Job();
        $job->getId(2);
        $job->setName('Arboriculteur / Arboricultrice');
        $job->getSubCategory(SubCategorieFixtures::AGRICULTURE);
        $manager->persist($job);

        $job = new Job();
        $job->getId(3);
        $job->setName('Eléveur volailles');
        $job->getSubCategory(SubCategorieFixtures::ELEVAGE);
        $manager->persist($job);

        $job = new Job();
        $job->getId(4);
        $job->setName('Bijoutier / Bijoutière-joallière');
        $job->getSubCategory(SubCategorieFixtures::ART);
        $manager->persist($job);

        
        $job = new Job();
        $job->getId(4);
        $job->setName('Designer / Designeuse automobile');
        $job->getSubCategory(SubCategorieFixtures::DESIGN);
        $manager->persist($job);

        $job = new Job();
        $job->getId(5);
        $job->setName('Designer / Designeuse de produit de lunetterie');
        $job->getSubCategory(SubCategorieFixtures::DESIGN);
        $manager->persist($job);

        $job = new Job();
        $job->getId(6);
        $job->setName('Agent / Agente général d\'assurances');
        $job->getSubCategory(SubCategorieFixtures::ASSURANCE);
        $manager->persist($job);

        $job = new Job();
        $job->getId(7);
        $job->setName('Analyste de crédit');
        $job->getSubCategory(SubCategorieFixtures::BANQUE);
        $manager->persist($job);

        $job = new Job();
        $job->getId(8);
        $job->setName('Analyste financier / financière');
        $job->getSubCategory(SubCategorieFixtures::FINANCE);
        $manager->persist($job);

        $job = new Job();
        $job->getId(9 );
        $job->setName('Analyste fusions acquisitions');
        $job->getSubCategory(SubCategorieFixtures::BANQUE);
        $manager->persist($job);
        

        $manager->flush();
    }
}

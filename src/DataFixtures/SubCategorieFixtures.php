<?php

namespace App\DataFixtures;

use App\Entity\SubCategory;
use App\DataFixtures\Categoryfixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class SubCategorieFixtures extends Fixture
{
        public const VITICULTURE            = 'Viticulture';
        public const ELEVAGE                = 'Elevage';
        public const AGRICULTURE            = 'Agriculture';
        public const RESEAUX_TELECOM        = 'Réseaux telecom';
        public const METIERS_DU_WEB         = 'Métiers du web';
        public const INFORMATIQUE           = 'Informatique';
        public const BANQUE                 = 'Banque';
        public const ASSURANCE              = 'Assurance';
        public const FINANCE                = 'Finance';
        public const ART                    = 'Art';
        public const DESIGN                 = 'Design';


    public function load(ObjectManager $manager): void
    {
        $subCategory = new SubCategory();
        $subCategory->getId(1);
        $subCategory->getCategory(Categoryfixtures::AGRICULTURE);
        $subCategory->setName('Ouvrier caviste');
        $manager->persist($subCategory);
        $subCategory = new SubCategory();
        $subCategory->getId(2);
        $subCategory->getCategory(Categoryfixtures::AGRICULTURE);
        $subCategory->setName('Agriculture Urbaine');
        $manager->persist($subCategory);
        $subCategory = new SubCategory();
        $subCategory->getId(3);
        $subCategory->getCategory(Categoryfixtures::AGRICULTURE);
        $subCategory->setName('Aquaculteur');
        $subCategory = new SubCategory();
        $subCategory->getId(5);
        $subCategory->getCategory(Categoryfixtures::AGRICULTURE);
        $subCategory->setName   ('Arboriculteur');
        $manager->persist($subCategory);
        $subCategory = new SubCategory();
        $subCategory->getId(5);
        $subCategory->getCategory(Categoryfixtures::AGRICULTURE);
        $subCategory->setName('Horticulture');
        $manager->persist($subCategory);

        $subCategory = new SubCategory();
        $subCategory->getId(6);
        $subCategory->getCategory(Categoryfixtures::INFORMATIQUEWEBRESEAUX);
        $subCategory->setName('Administrateur de base de données');
        $manager->persist($subCategory);
        $subCategory = new SubCategory();
        $subCategory->getId(7);
        $subCategory->getCategory(Categoryfixtures::INFORMATIQUEWEBRESEAUX);
        $subCategory->setName('Analyste SOC (security operation)');
        $manager->persist($subCategory);

        $subCategory = new SubCategory();
        $subCategory->getId(8);
        $subCategory->getCategory(Categoryfixtures::INFORMATIQUEWEBRESEAUX);
        $subCategory->setName('Architecte Big Data');
        $manager->persist($subCategory);

        $subCategory = new SubCategory();
        $subCategory->getId(9);
        $subCategory->getCategory(Categoryfixtures::INFORMATIQUEWEBRESEAUX);
        $subCategory->setName('Chef de projet Web');
        $manager->persist($subCategory);

        $subCategory = new SubCategory();
        $subCategory->getId(10);
        $subCategory->getCategory(Categoryfixtures::INFORMATIQUEWEBRESEAUX);
        $subCategory->setName('Community Manager');
        $manager->persist($subCategory);

        $subCategory = new SubCategory();
        $subCategory->getId(11);
        $subCategory->getCategory(Categoryfixtures::BANQUEFINANCEASSU);
        $subCategory->setName('Agent général d\'assurances');
        $subCategory = new SubCategory();
        $subCategory->getId(12);
        $subCategory->getCategory(Categoryfixtures::BANQUEFINANCEASSU);
        $subCategory->setName('Analyste de crédit');
        $subCategory = new SubCategory();
        $subCategory->getId(13);
        $subCategory->getCategory(Categoryfixtures::BANQUEFINANCEASSU);
        $subCategory->setName('Analyste financier');
        $subCategory = new SubCategory();
        $subCategory->getId(14);
        $subCategory->setName('Comptable');
        $subCategory->getCategory(Categoryfixtures::BANQUEFINANCEASSU);
        $subCategory = new SubCategory();
        $subCategory->getId(15);
        $subCategory->getCategory(Categoryfixtures::BANQUEFINANCEASSU);
        $subCategory->setName('auditeur/Auditrice externe');
        $manager->persist($subCategory);

        $subCategory = new SubCategory();
        $subCategory->getId(16);
        $subCategory->setName('Antiquaire');
        $subCategory->getCategory(Categoryfixtures::ARTDESINGMODE);
        $subCategory = new SubCategory();
        $subCategory->getId(17);
        $subCategory->setName('Bijoutier - joaillier');
        $subCategory->getCategory(Categoryfixtures::ARTDESINGMODE);
        $subCategory = new SubCategory();
        $subCategory->getId(18);
        $subCategory->setName('Directeur/ Directrice artistique mode');
        $subCategory->getCategory(Categoryfixtures::ARTDESINGMODE);
        $subCategory = new SubCategory();
        $subCategory->getId(19);
        $subCategory->setName('Cordonnier');
        $subCategory->getCategory(Categoryfixtures::ARTDESINGMODE);
        $subCategory = new SubCategory();
        $subCategory->getId(20);
        $subCategory->setName('Ebéniste');
        $subCategory->getCategory(Categoryfixtures::ARTDESINGMODE);
        $manager->persist($subCategory);

        $manager->flush();
    }
}

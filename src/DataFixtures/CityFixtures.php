<?php

namespace App\DataFixtures;

use App\Entity\City;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CityFixtures extends Fixture
{
        public const ABLON      = 'Ablon';
        public const BACONNES   = 'Baconnes';
        public const CACHAN     = 'Cachan';
        public const CAEN       = 'Caen';
        public const DAMMARIE_EN_PUISAYE = 'Damarie-en-Puisaye';
        public const ECHENAY    = 'Echenay';
        public const GAILLON    = 'Gaillon';
        public const JANVILLE   = 'Janville';
        public const LYON       = 'Lyon';
        public const METZ       = 'Metz';
        public const ODARS      = 'Odars';
        public const PARIS      = 'Paris';
        Public const NANTES     = 'Nantes';
        Public const MARSEILLE  = 'Marseille';
        public const TOULOUSE   = 'Toulouse';
        public const STRASBOURG = 'STRASBOURG';
        public const LILLE      = 'Lille';

    public function load(ObjectManager $manager): void
    {
        $city = new City();
        $city->setName('Ablon');
        $this->addReference(self::ABLON, $city);
        $manager->persist($city);
        $city = new City();
        $city->setName('Baconnes');
        $this->addReference(self::BACONNES, $city);
        $manager->persist($city);
        $city = new City();
        $city->setName('Cachan');
        $this->addReference(self::CACHAN, $city);
        $manager->persist($city);
        $city = new City();
        $city->setName('Caen');
        $this->addReference(self::CAEN, $city);
        $manager->persist($city);
        $city = new City();
        $city->setName('Damarie-en-Puisaye');
        $this->addReference(self::DAMMARIE_EN_PUISAYE, $city);
        $manager->persist($city);
        $city = new City();
        $city->setName('Echenay');
        $this->addReference(self::ECHENAY, $city);
        $manager->persist($city);
        $city = new City();
        $city->setName('Gaillon');
        $this->addReference(self::GAILLON, $city);

        $manager->persist($city);
        $city = new City();
        $city->setName('Janville');
        $this->addReference(self::JANVILLE, $city);
        $manager->persist($city);
        $city = new City();
        $city->setName('Lyon');
        $this->addReference(self::LYON, $city);
        $manager->persist($city);
        $city = new City();
        $city->setName('Lille');
        $this->addReference(self::LILLE, $city);
        $manager->persist($city);
        $city = new City();
        $city->setName('Metz');
        $this->addReference(self::METZ, $city);
        $manager->persist($city);
        $city = new City();
        $city->setName('Odars');
        $this->addReference(self::ODARS, $city);
        $manager->persist($city);
        $city = new City();
        $city->setName('Paris');
        $this->addReference(self::PARIS, $city);
        $manager->persist($city);
        $city = new City();
        $city->setName('Nantes');
        $this->addReference(self::NANTES, $city);
        $manager->persist($city);
        $city = new City();
        $city->setName('Toulouse');
        $this->addReference(self::TOULOUSE, $city);
        $manager->persist($city);
        $city = new City();
        $city->setName('Marseille');
        $this->addReference(self::MARSEILLE, $city);
        $manager->persist($city);



        $manager->flush();
    }
}

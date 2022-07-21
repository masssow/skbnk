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
        public const TOULOUSE   = 'Toulouse';
        public const STRASBOURG = 'STRASBOURG';
        public const LILLE      = 'Lille';

    public function load(ObjectManager $manager): void
    {
        $city = new City();
        $city->setName('Ablon');
        $manager->persist($city);
        $city = new City();
        $city->setName('Baconnes');
        $manager->persist($city);
        $city = new City();
        $city->setName('Cachan');
        $manager->persist($city);
        $city = new City();
        $city->setName('Caen');
        $manager->persist($city);
        $city = new City();
        $city->setName('Damarie-en-Puisaye');
        $manager->persist($city);
        $city = new City();
        $city->setName('Echenay');
        $manager->persist($city);
        $city = new City();
        $city->setName('Gaillon');
        $manager->persist($city);
        $city = new City();
        $city->setName('Janville');
        $manager->persist($city);
        $city = new City();
        $city->setName('Lyon');
        $manager->persist($city);
        $city = new City();
        $city->setName('Metz');
        $manager->persist($city);
        $city = new City();
        $city->setName('Odars');
        $manager->persist($city);
        $city = new City();
        $city->setName('Paris');
        $manager->persist($city);
        $city = new City();
        $city->setName('Nantes');
        $manager->persist($city);
        $city = new City();
        $city->setName('Toulouse');
        $manager->persist($city);
        $city = new City();
        $city->setName('Damarie-en-Puisaye');
        $manager->persist($city);



        $manager->flush();
    }
}

<?php

namespace App\DataFixtures;

use App\Entity\Competent;
use App\Entity\Job;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CompetentFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {

        $date = new DateTimeImmutable();
        $job = new JobFixtures;
        $competent = new Competent();
        $competent->getId(1);
        $competent->setCity(CityFixtures::ABLON);
        $competent->setLastName('Jane');
        $competent->setFirstName('Cooper');
        $competent->setPassword('pass');
        $competent->setJob(JobFixtures::ANALISTE_FUSION_A);
        $competent->setEmail('Jane@cooper.com');
        $competent->setCertification('Assurance ISO certificate');
        $competent->setDiplomes('Master responsabilité civil');
        $competent->setDiplomes('Licence d\'histoire et géographie');
        $competent->setLangues('Espagnol');
        $competent->setLangues('Allemand');
        $competent->setImageName('figma-female_16.jpg');
        $competent->setImageSize(50);
        $competent->setUpdatedAt($date);
        $manager->persist($competent);

        $competent = new Competent();
        $competent->getId(2);
        $competent->setCity(CityFixtures::TOULOUSE);
        $competent->setLastName('Wade');
        $competent->setFirstName('Abdoulaye');
        $competent->setPassword('pass');
        $competent->setJob(JobFixtures::ANALISTE_CREDIT);
        $competent->setEmail('wade@abdou.com');
        $competent->setCertification('Banque ISO certificate');
        $competent->setDiplomes('Master Financial time');
        $competent->setDiplomes('Licence d\'economie');
        $competent->setLangues('Anglais');
        $competent->setLangues('Arab');
        $competent->setImageName('figma-Frame_2002.png');
        $competent->setImageSize(50);
        $competent->setUpdatedAt($date);
        $manager->persist($competent);

        $competent = new Competent();
        $competent->getId(3);
        $competent->setCity(CityFixtures::CACHAN);
        $competent->setLastName('Broolyn');
        $competent->setFirstName('Simmons');
        $competent->setPassword('pass');
        $competent->setJob(JobFixtures::ANALISTE_FINANCE);
        $competent->setEmail('B@simmons.com');
        $competent->setCertification('Financial ISO certificate');
        $competent->setDiplomes('Master Finance');
        $competent->setDiplomes('Licence Tourisme');
        $competent->setLangues('Espagnol');
        $competent->setLangues('Anglais');
        $competent->setImageName('figma-female_19.jpg');
        $competent->setImageSize(50);
        $competent->setUpdatedAt($date);
        $manager->persist($competent);

        $competent = new Competent();
        $competent->getId(4);
        $competent->setCity(CityFixtures::CAEN);
        $competent->setLastName('Jenny');
        $competent->setFirstName('Lopez');
        $competent->setPassword('pass');
        $competent->setJob(JobFixtures::ARBORICULTEUR);
        $competent->setEmail('Jenny@lopez1.com');
        $competent->setCertification('Paysagiste ISO certificate');
        $competent->setDiplomes('Master ecosystemes');
        $competent->setDiplomes('Licence d\'histoire et géographie');
        $competent->setLangues('Italien');
        $competent->setImageName('figma-female_18.jpg');
        $competent->setImageSize(50);
        $competent->setUpdatedAt($date);
        $manager->persist($competent);

        $competent = new Competent();
        $competent->getId(5);
        $competent->setCity(CityFixtures::LYON);
        $competent->setLastName('Douma');
        $competent->setFirstName('Faye');
        $competent->setPassword('pass');
        $competent->setJob(JobFixtures::ANALISTE_FUSION_A);
        $competent->setEmail('Douma@faye.com');
        $competent->setCertification('Assurance ISO certificate');
        $competent->setDiplomes('Master responsabilité civil');
        $competent->setDiplomes('Licence d\'histoire et géographie');
        $competent->setLangues('Japonais');
        $competent->setLangues('Allemand');
        $competent->setImageName('figma-Frame_2010.png');
        $competent->setImageSize(50);
        $competent->setUpdatedAt($date);
        $manager->persist($competent);

        $competent = new Competent();
        $competent->getId(6);
        $competent->setCity(CityFixtures::ECHENAY);
        $competent->setLastName('Robert');
        $competent->setFirstName('Fox');
        $competent->setPassword('pass');
        $competent->setJob(JobFixtures::BIJOUTIER);
        $competent->setEmail('Robert@Fox.com');
        $competent->setCertification('Artisanale ISO certificate');
        $competent->setDiplomes('Master artistique');
        $competent->setDiplomes('Licence d\'histoire et géographie');
        $competent->setLangues('Wolof');
        $competent->setLangues('Français');
        $competent->setImageName('figma-Frame_2010.png');
        $competent->setImageSize(50);
        $competent->setUpdatedAt($date);
        $manager->persist($competent);

        $competent = new Competent();
        $competent->getId(7);
        $competent->setCity(CityFixtures::LILLE);
        $competent->setLastName('Guy');
        $competent->setFirstName('Hawkins');
        $competent->setPassword('pass');
        $competent->setJob(JobFixtures::CAVISTE);
        $competent->setEmail('guy@hawkins.com');
        $competent->setCertification('Assurance ISO certificate');
        $competent->setDiplomes('Master responsabilité civil');
        $competent->setDiplomes('Licence d\'histoire et géographie');
        $competent->setLangues('Japonais');
        $competent->setLangues('Allemand');
        $competent->setImageName('figma-Frame_2010.png');
        $competent->setImageSize(50);
        $competent->setUpdatedAt($date);
        $manager->persist($competent);

        $competent = new Competent();
        $competent->getId(8);
        $competent->setCity(CityFixtures::PARIS);
        $competent->setLastName('Leslie');
        $competent->setFirstName('Alexandre');
        $competent->setPassword('pass');
        $competent->setJob(JobFixtures::BIJOUTIER);
        $competent->setEmail('Alex@leslie.com');
        $competent->setCertification('Assurance ISO certificate');
        $competent->setDiplomes('Master responsabilité civil');
        $competent->setDiplomes('Licence d\'histoire et géographie');
        $competent->setLangues('Japonais');
        $competent->setLangues('Allemand');
        $competent->setImageName('figma-Frame_2010.png');
        $competent->setImageSize(50);
        $competent->setUpdatedAt($date);
        $manager->persist($competent);

        $manager->flush();
    }
}

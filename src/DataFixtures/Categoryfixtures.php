<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class Categoryfixtures extends Fixture
{
    public const AGRICULTURE = 'Agriculture';
    public const BANQUEFINANCEASSU = 'banque - finances - assurances';
    public const ARTDESINGMODE = 'artisanat dart - design - mode';
    public const INFORMATIQUEWEBRESEAUX = 'informatiquee - web - reseaux';


    public function load(ObjectManager $manager): void
    {
        $category = new Category('Agriculture');
        $category->getId(1);
        // $this->addReference(self::AGRICULTURE, $category);
        $category->setName('Agriculture');
        $manager->persist($category);

        $category = new Category();
        $category->getId(2);
        // $this->addReference(self::ARTDESINGMODE, $category);
        $category->setName('Art - Design - Mode');
        $manager->persist($category);
        

        $category = new Category();
        $category->getId(3);
        // $this->addReference(self::BANQUEFINANCEASSU, $category);
        $category->setName('Banque - finance - Assurance');
        $manager->persist($category);

        $category = new Category();
        $category->getId(4);
        // $this->addReference(self::INFORMATIQUEWEBRESEAUX, $category);
        $category->setName('Informatique - Web - Reseaux');
        $manager->persist($category);

        $manager->flush();
}
}
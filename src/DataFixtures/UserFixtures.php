<?php

namespace App\DataFixtures;

use App\Entity\Company;
use App\Entity\Competent;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $company = new Company();
         // On reseigne la propiété à l'aide du setter
        $company->setEmail('company1@user.com');
        $company->setFirstName('roots');
        $company->setLastName('boy');
        $plainPassword = "pass";// le mot de passe en clair que l'on veut encoder
        $company->setPassword($plainPassword);
        // $company->setIsVerified(1);
        $company->setRoles(["ROLE_ADMIN"]);
        $manager->persist($company);

        $company2 = new Company();
        // On reseigne la propiété à l'aide du setter
        $company2->setEmail('company2@user.com');
        $company2->setFirstName('roots');
        $company2->setLastName('boy');
        $plainPassword = "pass";// le mot de passe en clair que l'on veut encoder
        $company2->setPassword($plainPassword);
        // $company2->setIsVerified(1);
        $company2->setRoles(["ROLE_USER"]);
        $manager->persist($company2);

        $competent = new Competent();
        // On reseigne la propiété à l'aide du setter
        $competent->setEmail('competent1@user.com');
        $competent->setFirstName('doe');
        $competent->setLastName('Jhon');
        $plainPassword = "pass";// le mot de passe en clair que l'on veut encoder
        $competent->setPassword($plainPassword);
        // $competent->setIsVerified(1);
        $competent->setRoles(["ROLE_USER"]);
        $manager->persist($competent);

        $competent2 = new Competent();
        $competent2->setEmail('competent2@user.com');
        $competent2->setFirstName('doe');
        $competent2->setLastName('Jhon');
        $plainPassword = "pass";// le mot de passe en clair que l'on veut encoder
        $competent2->setPassword($plainPassword);
        // $competent2->setIsVerified(1);
        $competent2->setRoles(["ROLE_USER"]);// On affecte un role à l'utilisateur
        $manager->persist($competent2);

       
        $manager->flush();
    }
}

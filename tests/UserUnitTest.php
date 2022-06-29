<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $user = new User();

        $user->setEmail('true@email.com')
                ->setFirstName('Jhon')    
                ->setLastName('Doe')
                ->setPassword('pass');
                
        $this->assertTrue($user->getEmail() === 'true@email.com');
        $this->assertTrue($user->getFirstName() === 'Jhon');
        $this->assertTrue($user->getLastName() === 'Doe');
        $this->assertTrue($user->getPassword() === 'pass');



    }

    public function testIsFalse(): void
    {
        $user = new User();

        $user->setEmail('true@email.com')
                ->setFirstName('Jhon')    
                ->setLastName('Doe')
                ->setPassword('pass');
                
        $this->assertFalse($user->getEmail() === 'false@email.com');
        $this->assertFalse($user->getFirstName() === 'false');
        $this->assertFalse($user->getLastName() === 'falseNa');
        $this->assertFalse($user->getPassword() === 'false-pass');


    }

    public function testIsEmpty(): void
    {
        $user = new User();

        
                
        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getFirstName());
        $this->assertEmpty($user->getLastName());
    }
}

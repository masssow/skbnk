<?php

namespace App\Tests;

use App\Entity\Category;
use App\Entity\SubCategory;
use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
    public function testIsTrue(): void
    {
        $category = new Category();
        $subCategory = new SubCategory;
        $category->setName('Digital')
        $subCategory->SubCategory('Web Developer'); 
            
        $this->assertTrue($category->getName() === 'Digital');
        $this->assertTrue($category->getsubCategory() === 'Web Developer');



    }

    public function testIsFalse(): void
    {
        $category = new Category();

        $category->setName('true@Name.com')
            ->addSubCategory('Jhon'); 
                
        $this->assertFalse($category->getName() === 'false@Name.com');
        $this->assertFalse($category->getSubCategory() === 'false');
  

    }

    public function testIsEmpty(): void
    {
        $category = new Category();

        
                
        $this->assertEmpty($category->getName());
        $this->assertEmpty($category->getSubCategory());
    }
}

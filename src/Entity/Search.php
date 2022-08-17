<?php
namespace App\Entity;

use App\Entity\Job;
use App\Entity\Category;
use App\Entity\Competent;



class Search
{

    /**
     * @var int
     */
    public $page = 1;

    /**
     * @var string
     */
    public $string = '';

    /**
     * @var Job[]
     */
    public $job = [];

    /**
     * @var Category[]
     */
    public $categories;

    /**
     * @var Competent[]
     */
    public $competent;

}

<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Competent;
use App\Entity\Job;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BankskillsController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/banque-de-competences', name: 'app_bankskills')]
    public function index(): Response
    {
        $category = $this->entityManager->getRepository(Category::class)->findAll();
        $job      = $this->entityManager->getRepository(Job::class)->findAll();
        $competent = $this->entityManager->getRepository(Competent::class)->findAll();
        return $this->render('bankskills/index.html.twig', [
            'category' => $category,
            'job'      => $job,
            'competent' => $competent
        ]);
    }
}

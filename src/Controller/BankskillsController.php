<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BankskillsController extends AbstractController
{
    #[Route('/banque-de-competences', name: 'app_bankskills')]
    public function index(): Response
    {
        return $this->render('bankskills/index.html.twig', [
        ]);
    }
}

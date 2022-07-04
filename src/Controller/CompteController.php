<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompteController extends AbstractController
{
    #[Route('/mon-compte-entreprise', name: 'app_company_account')]
    public function index(): Response
    {
        return $this->render('company/dashboard.html.twig', [
        ]);
    }
   
}

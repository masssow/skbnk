<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompanyDashboardController extends AbstractController
{
    #[Route('/dashboard/chercheur', name: 'app_company_dashboard')]
    public function index(): Response
    {
        return $this->render('company/dashboard.html.twig', [
        ]);
    }
}

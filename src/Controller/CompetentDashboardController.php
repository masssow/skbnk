<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompetentDashboardController extends AbstractController
{
    #[Route('/competent/dashboard', name: 'app_competent_dashboard')]
    public function index(): Response
    {
        return $this->render('competent/dashboard.html.twig', [
        ]);
    }
}

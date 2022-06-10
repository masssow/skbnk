<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompanyRegistrationController extends AbstractController
{
    #[Route('/inscription-chercheur', name: 'app_company_registration')]
    public function index(): Response
    {
        return $this->render('company/registration.html.twig', [
        ]);
    }
}

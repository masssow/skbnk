<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompetentRegistrationController extends AbstractController
{
    #[Route('/competent/registration', name: 'app_competent_registration')]
    public function index(): Response
    {
        return $this->render('competent/registration.html.twig', [
        ]);
    }
}

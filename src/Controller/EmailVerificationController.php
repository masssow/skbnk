<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmailVerificationController extends AbstractController
{
    #[Route('/email/verification', name: 'app_email_verification')]
    public function index(): Response
    {
        return $this->render('email_verification/index.html.twig', [
        ]);
    }
}

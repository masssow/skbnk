<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompetentController extends AbstractController
{
    #[Route('/offreur-de-competences', name: 'app_competent')]
    public function index(): Response
    {
        return $this->render('competent/index.html.twig', [
            'controller_name' => 'CompetentController',
        ]);
    }
}

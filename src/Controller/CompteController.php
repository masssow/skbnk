<?php

namespace App\Controller;

use App\Repository\CompanyRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CompteController extends AbstractController
{
    #[Route('/compte', name: 'app_compte')]
    public function index(CompanyRepository $repository): Response
    {
        $company = $repository->find($this->getUser());
        $competent = $repository->find($this->getUser());


        return $this->render('compte/index.html.twig', [
            'company' => $company,
            'competent' => $competent

        ]);
    }
}

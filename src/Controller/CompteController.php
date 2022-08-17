<?php

namespace App\Controller;

<<<<<<< HEAD
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
   
=======
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
>>>>>>> system
}

<?php

namespace App\Controller;

use App\Entity\Company;
use App\Form\CompanyType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CompanyController extends AbstractController
{
    #[Route('/info-entreprise', name: 'app_company')]
    public function index(): Response
    {
        return $this->render('company/index.html.twig', [
        ]);
    }

    #[Route('/company/add', name: 'app_company_add')]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $company = new Company();
        $form = $this->createForm(CompanyType::class, $company);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $company->setUser($this->getUser());
            $entityManager->persist($company);
            $entityManager->flush();
            return $this->redirectToRoute('app_company_dashboard'); 

        }

        
        return $this->render('company/add.html.twig', [
            'form' => $form->createView()
        ]);
    }
}

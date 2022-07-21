<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Company;
use App\Form\CompanyType;
use App\Repository\CompanyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CompanyRegistrationController extends AbstractController
{

    private $entityManager;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager =  $entityManager;
    }
    #[Route('/mon-entreprise', name: 'app_company')]
    public function index(CompanyRepository $companyRepository): Response
    {
        $company = $this->entityManager->getRepository(Company::class)->findAll($this->getUser());
        return $this->render('company/myCompanies.html.twig', [
            'company' => $company
        ]);
        
    }

    #[Route('/mon-entreprise/creer', name: 'app_company_add')]
    public function add(EntityManagerInterface $entityManager, Request $request): Response
    {
        $company = new Company();
        $user   = new User();
        $form = $this->createForm(CompanyType::class, $company);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            // $user = $form->getData();
            $company->setUser($this->getUser());
            $entityManager->persist($company);
            $entityManager->flush();

            return $this->redirectToRoute('app_company');
        }
        return $this->render('company/company_form.html.twig', [
            'form' => $form->createView(),
            // 'user' => $user
        ]);
    }

    #[Route('/mon-espace-entreprise-modifier/{id}', name: 'app_company_edit')]
    public function edit(Request $request, $id): Response
    {
        $company = $this->entityManager->getRepository(Company::class)->find($id);
        
        if($company || $company->getUser() != $this->getUser())
        
        {
            // return $this->redirectToRoute('app_company');
        }

        $form = $this->createForm(CompanyType::class, $company);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            return $this->redirectToRoute('app_company');
        }
        return $this->render('company/company_form.html.twig', [
            'form' => $form->createView(),
            // 'user' => $user
        ]);
    
    }

    #[Route('/mon-espace-entreprise-supprimer/{id}', name: 'app_company_remove')]
    public function remove($id): Response
    {
        $company = $this->entityManager->getRepository(Company::class)->find($id);
        
        if($company && $company->getUser() == $this->getUser())
        
        {
            $this->entityManager->remove($company);
            $this->entityManager->flush();
        }
        return $this->redirectToRoute('app_company');
    }
}

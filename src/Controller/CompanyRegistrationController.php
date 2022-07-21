<?php

namespace App\Controller;

<<<<<<< HEAD
use App\Entity\User;
use App\Entity\Company;
use App\Form\CompanyType;
use App\Repository\CompanyRepository;
use Doctrine\ORM\EntityManagerInterface;
=======
use App\Entity\Representing;
use App\Entity\User;
use App\Form\RepresentType;
use Doctrine\Persistence\ManagerRegistry;
>>>>>>> 76104d9b80678b8e76a27ef2411b2426f09387ba
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CompanyRegistrationController extends AbstractController
{

<<<<<<< HEAD
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
=======
    #[Route('/inscription-chercheur', name: 'app_company_registration')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $representing = new Representing();
        $form = $this->createForm(RepresentType::class, $representing);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() )
        {
            $representing = $form->getData();
            // $representing->setUser();
            // $representing->setRoles(['ROLE_USER']);
            $entityManager->persist($representing);
            dd($form);
        }
        return $this->render('company/registration.html.twig', [
            'form'=> $form->createView()
>>>>>>> 76104d9b80678b8e76a27ef2411b2426f09387ba
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

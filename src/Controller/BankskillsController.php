<?php

namespace App\Controller;

use App\Entity\Job;
use App\Entity\Search;
use App\Entity\Category;
use App\Entity\City;
use App\Entity\Company;
use App\Form\SearchType;
use App\Entity\Competent;
use App\Repository\CompanyRepository;
use App\Repository\CompetentRepository;
use App\Repository\JobRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BankskillsController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    #[Route('/banque-de-competences', name: 'app_bankskills')]
    public function index(Request $request, CompanyRepository $repository): Response
    {
        $category = $this->entityManager->getRepository(Category::class)->findAll();
        $job      = $this->entityManager->getRepository(Job::class)->findAll();
        $competent = $this->entityManager->getRepository(Competent::class)->findAll();
    
        $search =  new Search();
        $form = $this->createForm(SearchType::class, $search);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $job = $this->entityManager->getRepository(Job::class)->findWithFilter($search);
            

        }
        // 
            // dd($search);
        return $this->render('bankskills/index.html.twig', [
            'category' => $category,
            'job'      => $job,
            'competent' => $competent,
            'form'      => $form->createView()

        ]);
    }

    #[Route('/banque-de-competences/{slug}', name: 'app_bankskills_single')]
    public function single(Request $request, CompetentRepository $competentRepository): Response
    {


            // dd($search);
        return $this->render('bankskills/index.html.twig', [
            
        
        ]);
    }

}

<?php

namespace App\Controller;

use App\Entity\Company;
use App\Repository\UserRepository;
use App\Repository\CompanyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Collections\Expr\Value;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CompanyDashboardController extends AbstractController
{
    private $entityManager;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager =  $entityManager;
    }
    #[Route('/company/dashboard', name: 'app_company_dashboard')]
    public function index(CompanyRepository $repository, UserRepository $userRepository, Request $request): Response
    {
        $user = $this->getUser();
        return $this->render('company/dashboard.html.twig', [
            'user'   =>     $user,
        ]);
    }


}

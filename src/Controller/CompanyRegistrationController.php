<?php

namespace App\Controller;

use App\Entity\Representing;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CompanyRegistrationController extends AbstractController
{

    #[Route('/mon-compte', name: 'app_company_account')]
    public function index(): Response
    {
    
        return $this->render('company/registration.html.twig', [
            // 'form'=> $form->createView()
        ]);
    }
}

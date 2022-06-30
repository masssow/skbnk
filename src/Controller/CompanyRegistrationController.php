<?php

namespace App\Controller;

use App\Entity\Representing;
use App\Entity\User;
use App\Form\RepresentType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CompanyRegistrationController extends AbstractController
{

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
        ]);
    }
}

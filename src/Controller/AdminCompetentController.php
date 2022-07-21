<?php

namespace App\Controller;

use App\Entity\Competent;
use App\Form\Competent2Type;
use App\Repository\CompetentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/competent')]
class AdminCompetentController extends AbstractController
{
    #[Route('/', name: 'app_admin_competent_index', methods: ['GET'])]
    public function index(CompetentRepository $competentRepository): Response
    {
        return $this->render('admin_competent/index.html.twig', [
            'competents' => $competentRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_competent_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CompetentRepository $competentRepository): Response
    {
        $competent = new Competent();
        $form = $this->createForm(Competent2Type::class, $competent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $competentRepository->add($competent, true);

            return $this->redirectToRoute('app_admin_competent_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_competent/new.html.twig', [
            'competent' => $competent,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_competent_show', methods: ['GET'])]
    public function show(Competent $competent): Response
    {
        return $this->render('admin_competent/show.html.twig', [
            'competent' => $competent,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_competent_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Competent $competent, CompetentRepository $competentRepository): Response
    {
        $form = $this->createForm(Competent2Type::class, $competent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $competentRepository->add($competent, true);

            return $this->redirectToRoute('app_admin_competent_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_competent/edit.html.twig', [
            'competent' => $competent,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_competent_delete', methods: ['POST'])]
    public function delete(Request $request, Competent $competent, CompetentRepository $competentRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$competent->getId(), $request->request->get('_token'))) {
            $competentRepository->remove($competent, true);
        }

        return $this->redirectToRoute('app_admin_competent_index', [], Response::HTTP_SEE_OTHER);
    }
}

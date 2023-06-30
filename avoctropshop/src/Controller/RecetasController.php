<?php

namespace App\Controller;

use App\Entity\Recetas;
use App\Form\RecetasType;
use App\Repository\RecetasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/panel/recetas')]
class RecetasController extends AbstractController
{
    #[Route('/new', name: 'app_recetas_new', methods: ['GET', 'POST'])]
    public function new(Request $request, RecetasRepository $recetasRepository, SluggerInterface $slugger): Response
    {
        $receta = new Recetas();
        $form = $this->createForm(RecetasType::class, $receta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $recetasRepository->save($receta, true);
            return $this->redirectToRoute('recetas', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('recetas/new.html.twig', [
            'receta' => $receta,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_recetas_show', methods: ['GET'])]
    public function show(Recetas $receta): Response
    {
        return $this->render('recetas/show.html.twig', [
            'receta' => $receta,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_recetas_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Recetas $receta, RecetasRepository $recetasRepository): Response
    {
        $form = $this->createForm(RecetasType::class, $receta);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $receta->setImg('');
            $recetasRepository->save($receta, true);
            return $this->redirectToRoute('recetas', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('recetas/edit.html.twig', [
            'receta' => $receta,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'recetas_delete', methods: ['POST'])]
    public function delete(Request $request, Recetas $receta, RecetasRepository $recetasRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$receta->getId(), $request->request->get('_token'))) {
            $receta->setImg('');
            $recetasRepository->remove($receta, true);
        }

        return $this->redirectToRoute('recetas', [], Response::HTTP_SEE_OTHER);
    }
}

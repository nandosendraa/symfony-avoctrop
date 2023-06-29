<?php

namespace App\Controller;

use App\Repository\NoticiasRepository;
use App\Repository\RecetasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/panel')]
class BOController extends AbstractController
{
    #[Route('/', name: 'panel')]
    public function panel(): Response
    {
        return $this->render('backoffice/bohome.html.twig', []);
    }

    #[Route('/productos', name: 'productos')]
    public function productos(): Response
    {
        return $this->render('backoffice/productos.html.twig', []);
    }

    #[Route('/pedidos', name: 'pedidos')]
    public function pedidos(): Response
    {
        return $this->render('backoffice/pedidos.html.twig', []);
    }

    #[Route('/usuarios', name: 'usuarios')]
    public function usuarios(): Response
    {
        return $this->render('backoffice/usuarios.html.twig', []);
    }

    #[Route('/recetas', name: 'recetas')]
    public function recetas(RecetasRepository $recetasRepository): Response
    {
        return $this->render('backoffice/recetas.html.twig', [
            'recetas' => $recetasRepository->findAll()
        ]);
    }

    #[Route('/noticias', name: 'noticias')]
    public function noticias(NoticiasRepository $noticiasRepository): Response
    {
        return $this->render('backoffice/noticias.html.twig', [
            'noticias' => $noticiasRepository->findAll()
        ]);
    }

    #[Route('/galeria', name: 'galeria')]
    public function galeria(): Response
    {
        return $this->render('backoffice/galeria.html.twig', []);
    }
}

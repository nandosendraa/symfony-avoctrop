<?php

namespace App\Controller;

use App\Repository\RecetasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function home(RecetasRepository $recetasRepository): Response
    {
        $recetas = $recetasRepository->findAll();
        dump($recetas);
        return $this->render('default/index.html.twig', [
            'recetas'=>$recetas
        ]);
    }

    #[Route('/', name: 'raiz')]
    public function raiz(): Response
    {
        return $this->redirectToRoute('home');
    }

    #[Route('/producto', name: 'producto')]
    public function producto(): Response
    {
        return $this->render('default/producto.html.twig', [
        ]);
    }

    #[Route('/user', name: 'user')]
    public function user(): Response
    {
        return $this->render('default/user.html.twig', [
        ]);
    }

    #[Route('/tracking', name: 'tracking')]
    public function tracking(): Response
    {
        return $this->render('default/tracking.html.twig', [
        ]);
    }

    #[Route('/historialPedidos', name: 'historialPedidos')]
    public function historialPedidos(): Response
    {
        return $this->render('default/historialPedidos.html.twig', [
        ]);
    }

    #[Route('/resumen', name: 'resumen')]
    public function resumen(): Response
    {
        return $this->render('default/resumen.html.twig', [
        ]);
    }

    #[Route('/login', name: 'login')]
    public function login(): Response
    {
        return $this->render('default/login.html.twig', [
        ]);
    }

    #[Route('/register', name: 'register')]
    public function register(): Response
    {
        return $this->render('default/register.html.twig', [
        ]);
    }
}

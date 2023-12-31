<?php

namespace App\Controller;

use App\Entity\Contacto;
use App\Entity\Recetas;
use App\Form\ContactType;
use App\Repository\NoticiasRepository;
use App\Repository\RecetasRepository;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Symfony\Component\Mailer\Mailer;
use Dompdf;
use Dompdf\Dompdf as DompdfDompdf;
use phpDocumentor\Reflection\Types\Integer;

class DefaultController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function home(RecetasRepository $recetasRepository, NoticiasRepository $noticiasRepository): Response
    {
        $recetas = $recetasRepository->findAll();
        $noticias = $noticiasRepository->searchByDate();
        return $this->render('default/index.html.twig', [
            'recetas' => $recetas,
            'noticias' => $noticias
        ]);
    }

    #[Route('/', name: 'raiz')]
    public function raiz(): Response
    {
        return $this->redirectToRoute('home');
    }

    #[Route('/recetas', name: 'recetas')]
    public function recetas(Request $request, RecetasRepository $recetasRepository): Response
    {
        $buscar = "%".$request->query->get('buscar')."%";
        $txt = $request->query->get('buscar');

        if ($buscar != null)
            $recetas = $recetasRepository->search($buscar);
        else
            $recetas = $recetasRepository->findAll();

        return $this->render('default/recetas.html.twig', [
            'recetas'=>$recetas,
            'txt' => $txt
        ]);
    }

    #[Route('/pdf/{id}', name: 'pdf')]
    public function pdf(Pdf $pdf, RecetasRepository $recetasRepository,int $id): Response
    {
        $receta = $recetasRepository->searchById($id);
        $html = $this->renderView('default/pdf.html.twig', [
            'receta'=> $receta,
        ]);
        $nombreArchivo = 'receta.pdf';
        return new PdfResponse(
            $pdf->getOutputFromHtml($html),
            $nombreArchivo
        );
        /*return $this->render('default/pdf.html.twig', [
            'receta'=> $receta,
        ]);*/
    }

    #[Route('/noticias', name: 'noticias')]
    public function noticias(Request $request, NoticiasRepository $noticiasRepository): Response
    {
        $buscar = "%".$request->query->get('buscar')."%";
        $txt = $request->query->get('buscar');
        if ($buscar != null)
            $noticias = $noticiasRepository->searchByDate($buscar);
        else
            $noticias = $noticiasRepository->findAll();     
        return $this->render('default/noticias.html.twig', [
            'noticias'=>$noticias,
            'txt' => $txt
        ]);
    }

    #[Route('/galeria', name: 'galeria')]
    public function galeria(): Response
    {
        return $this->render('default/galeria.html.twig', [
        ]);
    }

   /* #[Route('/recetas/pdf/{id}', name: 'galeria')]
    public function pdf(RecetasRepository $recetasRepository): Response
    {

        return $this->render('plantilla/pdf-receta.html.twig', [
            'receta' => $receta 
        ]);
    }*/

    #[Route('/contacto', name: 'contacto')]
    public function contacto(Request $request): Response
    {
        $error = false;
        $contacto = new Contacto();
        $form = $this->createForm(ContactType::class, $contacto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $error = true;
            setcookie('nombre',$contacto->getNombre());
            setcookie('email',$contacto->getEmail());
            setcookie('motivo',$contacto->getMotivo());
            setcookie('mensaje',$contacto->getMensaje());
             return $this->redirectToRoute('newContacto', [], Response::HTTP_SEE_OTHER);
         }

        return $this->render('default/contacto.html.twig', [
            'form' => $form->createView(),
            'error' => $error
        ]);
    }

    #[Route('/newContacto', name: 'newContacto')]
    public function newContacto(): Response
    {
        $error = '';
        $mailer = new PHPMailer;

        $nombre = $_COOKIE['nombre'];
        $email = $_COOKIE['email'];
        $motivo = $_COOKIE['motivo'];
        $mensaje = $_COOKIE['mensaje'];

        $body = $mensaje;

        $mailer->setFrom('info@avoctrop.com');
        $mailer->addAddress('nandet2003@gmail.com');
        $mailer->msgHTML($body);

        $mailer->Subject = $motivo;
        $mailer->AltBody = $mensaje;

        $mailer->send();

        $error = $mailer->ErrorInfo;


        return $this->render('default/mailer.html.twig', [
            'error' => $error
        ]);
    }

    #[Route('/legal', name: 'legal')]
    public function legal(): Response
    {
        return $this->render('default/legal.html.twig', [
        ]);
    }

    #[Route('/aguacates', name: 'aguacates')]
    public function aguacates(): Response
    {
        return $this->render('default/aguacates.html.twig', [
        ]);
    }
}

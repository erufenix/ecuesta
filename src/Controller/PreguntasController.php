<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

//Entidades preguntas y respuestas
use App\Entity\Preguntas;
use App\Entity\Respuestas;

class PreguntasController extends AbstractController{
  /**
   * @Route("/preguntas", name="preguntas")
   */
  public function index(){
    return $this->render('preguntas/index.html.twig', [
        'controller_name' => 'PreguntasController',
        'preguntas'       => $this->getDoctrine()->getRepository(Preguntas::class)->findAll(),
        'respuestas'      => $this->getDoctrine()->getRepository(Respuestas::class)->findAll()
    ]);
  }
}

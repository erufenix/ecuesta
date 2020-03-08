<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

//Entidades preguntas y respuestas
use Entity\Preguntas;
use Entity\Respuestas;

class PreguntasController extends AbstractController{
  /**
   * @Route("/preguntas", name="preguntas")
   */
  public function index(){
    return $this->render('preguntas/index.html.twig', [
        'controller_name' => 'PreguntasController',
        'preguntas'       => ''
    ]);
  }
}

<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($nome)
    {
        return $this->render('BlogBundle:Default:index.html.twig', array(
            'nome' => $nome,
        ));
    }
}

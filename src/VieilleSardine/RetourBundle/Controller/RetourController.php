<?php

namespace VieilleSardine\RetourBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RetourController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VieilleSardineRetourBundle:Retour:index.html.twig', array('name' => $name));
    }
}

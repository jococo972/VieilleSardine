<?php

namespace VieilleSardine\PanierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanierController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VieilleSardinePanierBundle:Panier:index.html.twig', array('name' => $name));
    }
}

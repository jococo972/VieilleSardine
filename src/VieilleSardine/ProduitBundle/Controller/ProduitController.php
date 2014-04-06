<?php

namespace VieilleSardine\ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VieilleSardineProduitBundle:Produit:index.html.twig', array('name' => $name));
    }
}

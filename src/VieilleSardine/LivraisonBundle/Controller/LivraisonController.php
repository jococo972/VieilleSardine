<?php

namespace VieilleSardine\LivraisonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LivraisonController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VieilleSardineLivraisonBundle:Livraison:index.html.twig', array('name' => $name));
    }
}

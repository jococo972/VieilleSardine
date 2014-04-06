<?php

namespace VieilleSardine\PaiementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PaiementController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VieilleSardinePaiementBundle:Paiement:index.html.twig', array('name' => $name));
    }
}

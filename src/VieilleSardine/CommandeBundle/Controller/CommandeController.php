<?php

namespace VieilleSardine\CommandeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommandeController extends Controller
{
    public function indexAction()
    {
        return $this->render('VieilleSardineCommandeBundle:Commande:index.html.twig');
    }
}

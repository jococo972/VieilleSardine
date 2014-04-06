<?php

namespace VieilleSardine\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StockController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VieilleSardineStockBundle:Stock:index.html.twig', array('name' => $name));
    }
}

<?php

namespace Test\Bundle\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TestHelloBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php

namespace Test\Bundle\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller {

    public function getClientsAction() {
        
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TestHelloBundle:Client');
        $liste_clients = $repository->findAll();
        
        return $this->render('TestHelloBundle:Client:listClient.html.twig', array('liste_clients' => $liste_clients));
    }

}

<?php

namespace Test\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Test\HelloBundle\Entity\Client;

class ClientController extends Controller {

    public function addClientAction() {
        
        $client = new Client();
        $client->setName("John")
                ->setPassword("123");

        $em = $this->getDoctrine()->getManager();
        $em->persist($client);
        $em->flush();

        return $this->getClientsAction();
        //hello
    }

    public function getClientsAction() {

        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TestHelloBundle:Client');
        $liste_clients = $repository->findAll();

        return $this->render('TestHelloBundle:Client:listClient.html.twig', array('liste_clients' => $liste_clients));
    }

}

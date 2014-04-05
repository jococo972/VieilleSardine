<?php

namespace VieilleSardine\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VieilleSardine\UserBundle\Entity\Client;

class UserController extends Controller {

//    public function addUserAction() {
//        
//        $client = new Client();
//        $client->setName("John")
//                ->setEmail("john.lerouge@gmail.com")
//                ->setPassword("123")
//                ->setUsername("john");
//                
//
//        $em = $this->getDoctrine()->getManager();
//        $em->persist($client);
//        $em->flush();
//
//        return $this->getClientsAction();
//        //hello
//    }

    public function getUsersAction() {

        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('VieilleSardineUserBundle:Client');
        $liste_clients = $repository->findAll();

        return $this->render('VieilleSardineUserBundle:Client:listClient.html.twig', array('liste_clients' => $liste_clients));
    }

}

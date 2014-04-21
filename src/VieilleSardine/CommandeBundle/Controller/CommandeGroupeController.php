<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace VieilleSardine\CommandeBundle\Controller;

use VieilleSardine\CommandeBundle\Entity\Lignes;
use VieilleSardine\ProduitBundle\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CommandeGroupeController extends Controller
{
     public function indexAction()
    {
        return $this->render('VieilleSardineCommandeBundle:Commande:IHMCommandeGroupeVPC.html.twig');
    }
    /*
    // Méthode qui créer le formulaire utilisé pour ajouter un produit à la commande
    public function CreerFormVPCAction(Request $request)
    {
      
        $UneLigne = new Lignes();
        $form = $this->createFormBuilder($UneLigne)
            ->add('idProduit', 'text')
            ->add('quantite', 'number')
            ->add('Ajouter', 'submit')
            ->getForm();
        
         $form->handleRequest($request);

        return $this->render('VieilleSardineCommandeBundle:Commande:IHMCommandeVPC.html.twig', array('form' => 
            $form->createView(),
        ));
            
        
    }
    */
    /*
    // Méthode pour retrouver les attributs d'un produit
    public function getInfoProduitAction($id)
    {
    $produit = $this->getDoctrine()
        ->getRepository('ProduitBundle:Produit')
        ->find($id);

    if (!$produit) {
        throw $this->createNotFoundException(
            'Aucun produit trouvé pour cet id : '.$id
        );
    }

    
}*/
}

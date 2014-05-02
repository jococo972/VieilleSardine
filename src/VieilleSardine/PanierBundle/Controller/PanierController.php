<?php

namespace VieilleSardine\PanierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VieilleSardine\UserBundle\Entity\CompteClient;
use VieilleSardine\PanierBundle\Entity\Panier;
use VieilleSardine\ProduitBundle\Entity\Produit;

class PanierController extends Controller
{
    public function indexAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof CompteClient) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }        
        
        $id=$user->getIdCompteClient();
        $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('VieilleSardinePanierBundle:Panier');
        
        $product = $repository->find($id);
        if(!$product){
             return $this->render('VieilleSardinePanierBundle:Panier:panier.html.twig');
        }else{
        $ligne = $product->getIdLigne();
        
        $variable=array();
        $quant=array();
        foreach ($ligne as $test){
            $prod =$test->getIdProduit();
            $variable[]=$prod;
            $quant[$prod->getDescription()]=$test->getQuantite();
        }
        
        $id=$user->getIdCompteClient();
        return $this->render('VieilleSardinePanierBundle:Panier:panier.html.twig', array('prod' => $variable,
                'des'=> $quant));
        }
    }
    
    public function addProduitAction(Produit $prod){
        
    }
}

<?php

namespace VieilleSardine\PanierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VieilleSardine\UserBundle\Entity\CompteClient;
use Symfony\Component\HttpFoundation\Request;
use VieilleSardine\PanierBundle\Entity\Panier;
use VieilleSardine\ProduitBundle\Entity\Produit;
use VieilleSardine\CommandeBundle\Entity\Lignes;
use VieilleSardine\UserBundle\Entity\Client;

class PanierController extends Controller
{
    public function indexAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof CompteClient) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }        
        
        
        $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('VieilleSardinePanierBundle:Panier');
        
        $repo = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('VieilleSardineUserBundle:Client');
        
        $id=$user->getId();
        
        
        $client = $repo->findByIdCompteClient($id);
        
        if($client){
        $id= $client[0]->getIdClient();
        
        $product = $repository->find($id);
        
        if(!$product){
             return $this->render('VieilleSardinePanierBundle:Panier:panier.html.twig');
        }else{
        $ligne = $product->getIdLigne();
        
//        $variable=array();
//        $lignes=array();
//        $quant=array();
//        $form=array();
//        $emTab=array();
//        $valTab=array();
//
//        foreach ($ligne as $test){
//            $prod =$test->getIdProduit();
//            $variable[]=$prod;
//            $em = $this->getDoctrine()
//                      ->getManager();
//            $val[$test->getIdLigne()] = $em->getRepository('VieilleSardineCommandeBundle:Lignes')->find($test->getIdLigne());
//            $emTab[$test->getIdLigne()]=$em;
//            $lignes[$prod->getIdProduit()]=$this->createFormBuilder($val)
//                                            ->add("quantite_".$test->getIdLigne(), "number", array('label'=>false,'data'=>$test->getQuantite()))->getForm()->createView();
//            $quant[$prod->getIdProduit()]=$test;
//
//        }

         if ('POST' === $request->getMethod()) {
         return $this->redirect($this->generateUrl("info_commande_simple"));
           }
         
                
        $variable=array();
        $lignes=array();
        $quant=array();
        $form=array();
        $emTab=array();

        foreach ($ligne as $test){
            $prod =$test->getIdProduit();
            $variable[]=$prod;
            $em = $this->getDoctrine()
                      ->getManager();
            $val[$test->getIdLigne()] = $em->getRepository('VieilleSardineCommandeBundle:Lignes')->find($test->getIdLigne());
            $emTab[$test->getIdLigne()]=$em;
            $lignes[$prod->getIdProduit()]=$this->createFormBuilder($val)
                                            ->add("quantite_".$test->getIdLigne(), "number", array('label'=>false,'data'=>$test->getQuantite()))->getForm()->createView();
            $quant[$prod->getIdProduit()]=$test;
        }
      
        return $this->render('VieilleSardinePanierBundle:Panier:panier.html.twig', array('prod' => $variable,
                'des'=> $quant, 'form'=>$lignes));
        }
    }
    
        return  $this->render('VieilleSardinePanierBundle:Panier:panier.html.twig', array('noPanier' => 0));
    }
    
    public function deleteLigneAction(Request $request, $id){
         $request = $this->getRequest();
         $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('VieilleSardineCommandeBundle:Lignes');
         $ligne = $repository->find($id);
         $em = $this->getDoctrine()->getManager();
         $em->remove($ligne);
         $em->flush();
         return $this->redirect($this->generateUrl("vieille_sardine_panier"));
    }
    
     public function updateLigneAction($id){
         $request = $this->getRequest();
       
         $em = $this->getDoctrine()->getManager();
         $repository = $em->getRepository('VieilleSardineCommandeBundle:Lignes');
         
       if ('POST' === $request->getMethod()) {
           $qte = $request->request->all()['form']['quantite_'.$id];
           $ligne = $repository->find($id);
           if($ligne){
                $ligne->setQuantite($qte);
                //$em->persist($ligne);
                $em->flush();  
           }
       }
       return $this->redirect($this->generateUrl("vieille_sardine_panier"));   
    }

    public function addProduitAction(Produit $prod){
        
    }
    
    public function infoSimpleAction(){
        return $this->redirect($this->generateUrl("info_commande_simple"));
}
}

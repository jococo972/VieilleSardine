<?php

namespace VieilleSardine\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VieilleSardine\UserBundle\Entity\Client;
use VieilleSardine\UserBundle\Entity\CompteClient;
use VieilleSardine\PanierBundle\Entity\Panier;

class UserController extends Controller {
    
    
    public function editPersonalInfoAction(Request $request) {
        
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof CompteClient) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $id=$user->getIdCompteClient();
        $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('VieilleSardineUserBundle:Client');       
        $product = $repository->findOneByIdCompteClient($id);
        $repository1 = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('VieilleSardinePanierBundle:Panier'); 
        $product1 = $repository1->findOneByIdClient($id);
//        var_dump($product->getIdClient());
        $client =  new Client();
        
        $form = $this->createFormBuilder($client)
            ->add('civilite', 'choice', array('choices' => array(2 => "Madame ", 3 => " Monsieur "), 
                                            'multiple' => false, 
                                            'expanded' => true, 
                                            'preferred_choices' => array(2),
                                            //'empty_value' => '- Choisissez une option -',
                                            'empty_data'  => -1
                                            ))
            ->add('nom', 'text') //array('data' => $user->getUsername()))
            ->add('prenom', 'text')
            ->add('telPrincipal', 'number')
            ->add('telSecondaire', 'number')
            ->add('sexe', 'choice', array('choices' => array(1 => "M", 2 => "F"), 
                                            'multiple' => false, 
                                            'expanded' => true, 
                                            'preferred_choices' => array(1),
                                            //'empty_value' => '- Choisissez une option -',
                                            'empty_data'  => -1
                                            ))
            ->add('numeroVoie', 'text')
            ->add('typeVoie', 'text')
            ->add('nomVoie', 'text')
            ->add('codePostal', 'number')
            ->add('ville', 'text')
            ->add('pays', 'text')
            ->add('clientALivrer', 'text', array('data'=>$user->getUsername()))
            //->add('Mettreajour', 'submit')
            ->getForm();
//        form->get('firstname')->setData('John');
        if (!$product) {
        echo"<font color='red' size='5'>Vous devez entrer vos données.</font>";
//        echo '<script> alert("Vous devez entrer vos données.");</script>';       
        }
        else{
            $form->get("civilite")->setData($product->getCivilite());
            $form->get("nom")->setData($product->getNom());
            $form->get("prenom")->setData($product->getPrenom());
            $form->get("telPrincipal")->setData($product->getTelPrincipal());
            $form->get("telSecondaire")->setData($product->getTelSecondaire());
            $form->get("sexe")->setData($product->getSexe());
            $form->get("numeroVoie")->setData($product->getNumeroVoie());
            $form->get("typeVoie")->setData($product->getTypeVoie());
            $form->get("nomVoie")->setData($product->getNomVoie());
            $form->get("codePostal")->setData($product->getCodePostal());
            $form->get("ville")->setData($product->getVille());
            $form->get("pays")->setData($product->getPays());
            $form->get("clientALivrer")->setData($product->getClientALivrer()); 
            
        }
        
        if ('POST' === $request->getMethod()) {
          if(!$product){
            $form->bind($request);
            if ($form->isValid()) {              
                if(($form->get('clientALivrer')->getData()) === ($user->getUsername())){
                    
                    $client->setClientALivrer($user->getId());
                }
                $client->setIdCompteClient($user);
                $em = $this->getDoctrine()->getManager();
                $em->persist($client);
                $em->flush();
                if(!$product1){
                $panier = new Panier();
                $panier->setIdClient($client);                
                $emm = $this->getDoctrine()->getManager();
                $emm->persist($panier);
                $emm->flush();   
                }  
            }
        }else{
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $client=$em->getRepository('VieilleSardineUserBundle:Client')
                           ->findOneBy(array('idCompteClient' => $id));
                 $product1 = $repository->findOneByIdClient($client->getIdClient());
//                $client->setIdCompteClient($user);setCivilite(
                $client->setNom($form->get("nom")->getData());
                $client->setPrenom($form->get("prenom")->getData());
                $client->setTelPrincipal($form->get("telPrincipal")->getData());
                $client->setTelSecondaire($form->get("telSecondaire")->getData());
                $client->setSexe($form->get("sexe")->getData());
                $client->setNumeroVoie($form->get("numeroVoie")->getData());
                $client->setTypeVoie($form->get("typeVoie")->getData());
                $client->setNomVoie($form->get("nomVoie")->getData());
                $client->setCodePostal($form->get("codePostal")->getData());
                $client->setVille($form->get("ville")->getData());
                $client->setPays($form->get("pays")->getData());
                $em->flush();
                if(!$product1){
                $panier = new Panier();
                $panier->setIdClient($client);                
                $emm = $this->getDoctrine()->getManager();
                $emm->persist($panier);
                $emm->flush();   
                }
            }
        }
        }
        return $this->render('VieilleSardineUserBundle:Profile:edit_personal_data.html.twig', array(
            'form' => $form->createView(),
        )); 
        
    }
    
    public function editConnexionInfoAction(Request $request) {
        
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof CompteClient) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $id=$user->getIdCompteClient();
        $em = $this->getDoctrine()
                      ->getManager();
        $repository = $em
                      ->getRepository('VieilleSardineUserBundle:CompteClient');       
        $product = $repository->find($id);
        $form = $this->createFormBuilder($product)            
            ->add('username', 'text') //array('data' => $user->getUsername()))
            ->add('password', 'password')
            ->add('email', 'email')          
            ->getForm();
             $form->setData($user);
        
        if ('POST' === $request->getMethod()) {
         
            $form->bind($request);
            if ($form->isValid()) {              
               
//                $em = $this->getDoctrine()->getManager();
//                $em->persist($product);
                $em->flush();
            }
        
        }
        return $this->render('VieilleSardineUserBundle:Profile:edit_content_user.html.twig', array(
            'form' => $form->createView(),
        )); 
        
    }
    
    public function showInfoAction(){
         $user = $this->getUser();
        if (!is_object($user) || !$user instanceof CompteClient) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }        
        $id=$user->getIdCompteClient();
        $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('VieilleSardineUserBundle:Client');
        $product = $repository->findOneByIdCompteClient($id);
        if (!$product) {
        echo"<font color='red' size='5'>Vous devez entrer vos données.</font>"; 
        return $this->render('VieilleSardineUserBundle:Profile:show1_content.html.twig',
                array('user' => $user));
        }
        else{
            
            return $this->render('VieilleSardineUserBundle:Profile:show1_content.html.twig', 
                    array('user' => $user,
                          'info' => $product));
        } 
    }
    
}

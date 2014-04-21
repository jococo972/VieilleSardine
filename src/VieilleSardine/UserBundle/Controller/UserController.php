<?php

namespace VieilleSardine\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller {

    public function inscriptionAction(Request $request) {

        $defaults = array(
            'DateDeNaissance' => new \DateTime('tomorrow'),
        );

        $form = $this->createFormBuilder($defaults)
                ->add('Nom', 'text')
                ->add('Prenom', 'text')
                ->add('DateDeNaissance', 'birthday')
                ->getForm();

        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $data = $form->getData();
            var_dump($data);

            // ... exécutez une action, comme enregistrer des
            // données dans une base de données

//            return $this->redirect($this->generateUrl('vieille_sardine_commande_homepage', array('data' => $data)));
            return $this->render('VieilleSardineCommandeBundle:Commande:index.html.twig', array(
                    'data' => $data,
        ));
        }
        return $this->render('VieilleSardineUserBundle:Inscription:inscription.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}

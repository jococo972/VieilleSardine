<?php

namespace VieilleSardine\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class SearchCitiesController extends Controller {
    
    public function SearchCitiesAction(Request $request){
        
        $data = unserialize(file_get_contents("http://localhost/VieilleSardine/src/VieilleSardine/UserBundle/Resources/public/villes/towns.txt")); // Récupération de la liste complète des villes
        $dataLen = count($data);

        sort($data); // On trie les villes dans l'ordre alphabétique

        $results = array(); // Le tableau où seront stockés les résultats de la recherche

        // La boucle ci-dessous parcourt tout le tableau $data, jusqu'à un maximum de 10 résultats

        for ($i = 0 ; $i < $dataLen && count($results) < 10 ; $i++) {
            if (stripos($data[$i], $_GET['s']) === 0) { // Si la valeur commence par les mêmes caractères que la recherche
          
                array_push($results, $data[$i]); // On ajoute alors le résultat à la liste à retourner
            
            }
        }

        echo implode('|', $results); // Et on affiche les résultats séparés par une barre verticale |
        return new Response('');
    }
    
}

?>
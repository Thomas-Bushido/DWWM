<?php
//Fonction pour demander un nombre à l'utilisateur
// function demanderNombre($message){
//     $nbreValide = false;
//     while(!$nbreValide){
//         echo $message;
//         $saisie =readline();
//         $nbreValide = verifierSaisie($saisie);
//     }
//     return $saisie;
// }

//Fonction pour afficher le menu et obtenir le chois de l'utilisateur

// function afficherMenu(){
//     echo "\n";
//     echo "-----------------------------------------\n";
//     echo "Menu :\n";
//     echo "1. Addition\n";
//     echo "2. soustraction\n";
//     echo "3. Multiplication\n";
//     echo "4. Division\n";
//     $choix = readline("entrez le numéro de l'opération que vous voulez effectuer :\n");
//     echo "-----------------------------------------\n";
//     return $choix;

// }

//fonction pour effectuer l'opération choisie par l'utilisateur

function operation($choix,$nombre1,$nombre2){

    switch($choix){
        case 1: 
            $resultat = $nombre1 + $nombre2;
            return $resultat;
            
        
        case 2: 
            $resultat = $nombre1 - $nombre2;
            return $resultat;
            
        
        case 3:
            $resultat = $nombre1 * $nombre2;
            return $resultat;
            
        
        case 4:

            //Vérification du deuxième nombre
            if($nombre2 != 0){
                $resultat = $nombre1 / $nombre2;
                return $resultat;
            }else{
               return NAN; 
            }
        default:
        echo "Choix invalide\n";

    }

}


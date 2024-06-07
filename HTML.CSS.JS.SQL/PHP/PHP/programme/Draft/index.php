<?php


// EXERCICE 1

// **AVANT PERMUTATION**
// $a = 3;
// $b = 5;
// $c = 7;



// // **APRES PERMUTATION**
// $temp = $a;
// $a = $b;
// $b = $c;
// $c = $temp;

// echo $a;
// echo $b;
// echo $c;

// ********************************************************************************************************
// ********************************************************************************************************

// EXERCICE 2

// $nom = "Marie";
// $age = 30;
// $homme = false;

// $nom2 = "Pierre";
// $age2 = 32;
// $homme2 = true;


// echo $nom . " " . "à" . " "  . $age . " " ."ans" ;
// echo(!$homme) ? " et c'est une femme" : " et c'est un hommme";
// echo "\n" . "\n";
// echo $nom2 . " " . "à" . " "  . $age2 . " " ."ans" ;
// echo($homme2) ? " et c'est un homme" : " et c'est une femme" . "\n" . "\n";

// ********************************************************************************************************
// ********************************************************************************************************

// EXERCICE 3

// $nombre = readline ("choisir un nombre entre 1 et 20");

// if($nombre >20 || $nombre <1){
//     echo "Faux";
// }
// elseif($nombre >= 1 && $nombre <=5){
//     echo "il est compris entre 1 et 5";
// }
// elseif($nombre >= 6 && $nombre <=10){
//     echo "il est compris entre 6 et 10";
// }
// elseif($nombre >= 11 && $nombre <=15){
//     echo "il est compris entre 11 et 15";
// }
// elseif($nombre >= 16 && $nombre <=20){
//     echo "il est compris entre 16 et 20";
// }

// ********************************************************************************************************
// ********************************************************************************************************

// EXERCICE 4

// $Chiffre1 = readline("veuillez choisir un nombre");
// $Chiffre2 = readline("Veuillez en choisir un second");


// $abs1 = abs($Chiffre1 - $Chiffre2);


// if($abs1 <25 || $abs1 >75){
//     echo "la valeur absolue de $Chiffre1 " ." - ". " $Chiffre2 " . "n'est pas comprise entre 25 et 75.";
// } else {
//     echo " la valeur est comprise entre 25 et 75" . "\n";
// }
// echo $abs1;

// ********************************************************************************************************
// ********************************************************************************************************

// EXERCICE 5

// $random = rand(1,10);



// for($i=1; $i<=10; $i++){
//     $nombre[] = $random*$i;
// }

// echo "le nombre choisi est le : $random" . "\n";
// var_dump($nombre);

// ********************************************************************************************************
// ********************************************************************************************************

// // EXERCICE 6

// $random = rand(5, 15);
// echo "Le cumul des $random premiers nombres\n";

// $resultat = [];
// $somme = 0;

// for ($i = $random; $i >= 1; $i--) {
//     $resultat[] = $i;
//     $somme += $i;
//     echo "Etape : $i - resultat = $somme\n";
// }

// ********************************************************************************************************
// ********************************************************************************************************

// EXERCICE 7

// $random = rand(1, 12);

// echo "le mois choisi est le $random ". "\n";

// switch ($random) {
//     case 1:
//         echo "le mois 1 correspond à janvier";
//         break;
//     case 2:
//         echo "le mois 2 correspond à février";
//         break;
//     case 3:
//         echo "le mois 3 correspond à mars";
//         break;
//     case 4:
//         echo "le mois 4 correspond à avril";
//         break;
//     case 5:
//         echo "le mois 5 correspond à mai";
//         break;
//     case 6:
//         echo "le mois 6 correspond à juin";
//         break;
//     case 7:
//         echo "le mois 7 correspond à juillet";
//         break;
//     case 8:
//         echo "le mois 8 correspond à aout";
//         break;
//     case 9:
//         echo "le mois 9 correspond à septembre";
//         break;
//     case 10:
//         echo "le mois 10 correspond à octobre";
//         break;
//     case 11:
//         echo "le mois 11 correspond à novembre";
//         break;
//     case 12:
//         echo "le mois 12 correspond à décembre";
//         break;
// }

// ********************************************************************************************************
// ********************************************************************************************************

// EXERCICE 8

// $random = rand(1,20);
// $cpt = 1;



// while($random <15){
//      echo "Essaie $cpt :Le chiffre $random est trop petit". "\n";
//      $random = rand(1,20);
//      $cpt++;
// }

// echo "Le chiffre $random est supérieur à 15";

// ********************************************************************************************************
// ********************************************************************************************************

// EXERCICE 9



// $a = 8;
// $b = 7;

// function pair($a, $b) {
//     if ($a % 2 === 0) {
//         echo "$a est pair\n";
//     } else {
//         echo "$a est impair\n";
//     }

//     if ($b % 2 === 0) {
//         echo "$b est pair\n";
//     } else {
//         echo "$b est impair\n";
//     }
// }

// // Appel de la fonction
// pair($a, $b);

// ********************************************************************************************************
// ********************************************************************************************************

// EXERCICE 10

// ********************************************************************************************************
// ********************************************************************************************************

// EXERCICE 11

// $hommes =["Mathieu","Pierre","Marc","Jean"];

// $femmes =["Morgane","Mathilde","Julie"];

// print_r($hommes);

// foreach($femmes as $key => $femme){
//     echo $key. ": ". $femme . "\n";
// }

// ********************************************************************************************************
// ********************************************************************************************************

// EXERCICE 12 

// $Marc = [12, 15, 13, 7, 8];
// $Matthieu = [11, 14, 10, 4, 20, 8, 2];




// $moyenne = array_sum($Marc) / (count($Marc));

// $resultat = round($moyenne);

// $calc = 0;
// foreach($Matthieu as $key){
//        $calc += $key;
// }



// echo "La moyenne des notes Marc est de :$resultat". "\n";
// echo "La moyenne des notes Matthieu est de: ". ($calc/(count($Matthieu))) . "\n";

// ********************************************************************************************************
// ********************************************************************************************************

// EXERCICE 13

// $Marc = [12, 15, 13, 7, 8];
// $Matthieu = [11, 14, 10, 4, 20, 8, 2];
// $Pierre = [5,13,9,3];
// $Paul = [6,11,15,2];

// function Moyenne($Marc, $Matthieu){
//     $add = 0;
//     $add2 = 0;
//     for($i=0; $i<count($Marc); $i++){
//           $add += $Marc[$i];
//           $Calcmoyenne = ($add)/(count($Marc));
//     }
//     for($i=0; $i<count($Matthieu); $i++){
//         $add2 += $Matthieu[$i];
//         $Calcmoyenne2 = ($add2)/(count($Matthieu));
//   }
//      echo "La Moyenne de Marc est de: $Calcmoyenne". "\n";
//      echo "La Moyenne de Matthieu est de: $Calcmoyenne2";
// }

// Moyenne($Marc, $Matthieu);

// ********************************************************************************************************
// ********************************************************************************************************

// EXERCICE 14

// $Tab = array("Marc" => 13, "Pierre" => 9.85, "Matthieu" => 7.5, "Paul" => 8.5);
// $cpt = 1;
// foreach($Tab as $key => $note){
//      echo "La Moyenne des notes de l'élève ".$cpt. " ". $key." est de ". $note. "\n";
//      $cpt++;
// }

// ********************************************************************************************************
// ********************************************************************************************************

// EXERCICE 15

// $Matthieu = ["Nom" => "Matthieu", "Age" => 30, "Sexe" => true];
// $Marie = ["Nom" => "Marie", "Age" => 30, "Sexe" => false];

// function Identity($Name){

//         echo "Nom: ". $Name["Nom"]."\n";
//         echo "Age: ". $Name["Age"]."\n";
//         echo "Sexe: ". $Name["Sexe"];



// }

// Identity($Matthieu);
// echo "\n". "-------------" ."\n";
// Identity($Marie);

// ********************************************************************************************************
// ********************************************************************************************************

// EXERCICE 16
// $NotesMarc = [12, 15, 13, 7, 8];
// $NotesMatthieu = [11, 14, 10, 4, 20, 8, 2];
// $NotesPierre = [5,13,9,3];
// $NotesPaul = [6,11,15,2];

// $Matthieu = ["Nom" => "Matthieu", "Age" => 30, "Sexe" => true, "Notes" => [12, 15, 13, 7, 8]];
// $Marie = ["Nom" => "Marie", "Age" => 30, "Sexe" => false, "Notes" => [11, 14, 10, 4, 20, 8, 2]];
// $Marc = ["Nom" => "Marc", "Age" => 25, "Sexe" => true, "Notes" => [5,13,9,3]];
// $Mathilde = ["Nom" => "Mathilde", "Age" => 21, "Sexe" => false, "Notes" => [6,11,15,2]];
// $Tableau = [$Matthieu, $Marie, $Marc, $Mathilde];


// foreach($Tableau as $joueur){
//     echo afficherjoueur($joueur);
   

// }

// ********************************************************************************************************
// ********************************************************************************************************

// EXERCICE 17

// function afficherjoueur($joueur){
    
//        echo "Nom:". $joueur["Nom"]."\n";
//        echo "Age:". $joueur["Age"]."\n";
//        if($joueur["Sexe"]){
//           echo "Sexe: Homme"."\n"; 
//        }
//        else{
//         echo "Sexe: Femme" ."\n";
//        }
//        $result = 0;
//        foreach($joueur["Notes"] as $indice => $notes){
//              $result += $notes;
//              echo "Note". $indice+1 . ":" . $notes . "\n";
//        }
//        $calcmoy = $result/(count($joueur["Notes"]));
//        echo "la moyenne est de:" . $calcmoy;


// }

// ********************************************************************************************************
// ********************************************************************************************************

// EXERCICE 18





<?php
// **EXERCICE 1 **

// function carre($nb)
//      {
//       return $nb*$nb;
//      }

// $nbre = 2;
// echo carre($nbre);


// **EXERCICE 2 **

// $nom = "Thomas";

// function bonjour($nom){
//     $bjr = "Bonjour";
//     return $bjr. " " .$nom ;
// }
 
// echo bonjour($nom);



// **EXERCICE 3 **

// function PrixTTC(){
//     $nombrearticle = 25;
//     $tauxtva = 1.20;
//     $prixHT = 5;
//     $prixTTC = $nombrearticle * ($tauxtva * $prixHT);
//     return $prixTTC;
// }

// echo PrixTTC();

   
//    ***********************
// // **Partie 3 Exercice 1**
//    ***********************



// $nbre = readline("entrer un nombre");

//   if($nbre>0){
//         echo "positif";
//     }
//     else{echo "négatif";
//     }
   


//    ***********************
// // **Partie 3 Exercice 2**
//    ***********************



// $nbre1 = readline("entrer un nombre");
// $nbre2 = readline("entrer un nombre");
 
// if($nbre1 +$nbre2> 0)
//    {echo "positif";} 

// else{echo "negatif";}



//    ***********************
// // **Partie 3 Exercice 3**
//    ***********************

// $nbre = readline("entrer un nombre");

//   if($nbre>0){
//         echo "positif";
//     }
//     elseif($nbre<0){echo "négatif";
//     }
//     else{echo "valeur 0";}


   

//    ***********************
// // **Partie 3 Exercice 4**
//    ***********************



// $nbre1 = readline("entrer un nombre");
// $nbre2 = readline("entrer un nombre");

// if($nbre1 + $nbre2> 0)
//    {echo "positif";} 

// elseif($nbre1 + $nbre2< 0)
// {echo "negatif";}

// else{echo "valeur nulle";}



//    ***********************
// // **Partie 3 Exercice 5**
//    ***********************

// $age = readline("Entrez un nombre");

// if($age>6 && $age<=7){
//     echo "Poussin";
// }
// elseif($age>=8 && $age<=9){
//     echo "Pupille";
// }
// elseif($age>=10 && $age<=11){

//     echo "Minime";
// }
// elseif($age>11){
//     echo "Cadet";
// }
// else{echo "hors catégorie";}





//    ***********************
// // **Partie 3 Exercice 6**
//    ***********************


// $heure = readline('Entrez une heure : ');
// $minute = readline('Entrez une minute : ') + 1;

// // Si les minutes dépassent 59, on ajuste l'heure et les minutes

// if ($minute >= 60) {
//     $heure += 1;
//     $minute -= 60;
// }
// if ($heure >=24 ){
//     $heure-=24 ;
// }

// echo "Dans une minute, il sera $heure heure(s) et $minute minute(s).";


//    ***********************
// // **Partie 3 Exercice 7**
//    ***********************


$heure = readline('Entrez une heure : ');
$minute = readline('Entrez une minute : ');
$seconde = readline('Entrez une seconde : ') + 1;
// Si les secondes dépassent 59, on ajuste les secondes et les minutes
if ($seconde >= 60) {
    $minute += 1;
    $seconde -= 60;
}

// Si les minutes dépassent 59, on ajuste l'heure et les minutes

if ($minute >= 60) {
    $heure += 1;
    $minute -= 60;
}


if ($heure >=24 ){
    $heure-=24 ;
}


echo "Dans une seconde, il sera $heure heure(s), $minute minute(s) et $seconde seconde(s) .";


//    ***********************
// // **Partie 3 Exercice 8**
//    ***********************


?>
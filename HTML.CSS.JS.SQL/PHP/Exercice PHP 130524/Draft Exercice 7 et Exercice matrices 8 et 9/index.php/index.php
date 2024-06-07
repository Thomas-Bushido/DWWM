<?php

// **************
// **Exercice 7**
// **************




// 1)


// $tab = [];

// for($i=0; $i<9; $i++){
//     $nombre = readline("entrez un nombre");
    
//     $tab[] = $nombre;

//     $Moyenne = (array_sum($tab))/(count($tab));

// };



// // Vous pouvez aussi utiliser var_dump pour plus de détails
//  var_dump($tab);

//  echo("La moyenne est de :" . $Moyenne);




// 2)

// $tab = [];
// $number = readline("entrer le nombre de valeurs souhaitées");
// $value = readline("entrer les valeurs du tableau");

// for($i=0;$i==$number;$i++){
//     $number = readline("entrer le nombre de valeurs souhaitées");
//     $value = readline("entrer les valeurs du tableau");

//     $tab[]= $value;
// }

// var_dump($tab);




// 4)

// $tab1 =[2,4,8,10,15];
// $tab2 =[5,2,1,3,7];

// $tabsum = [];

// for($i = 0; $i<count($tab1); $i++) {
//     $tabsum[] = $tab1[$i]+ $tab2[$i];
// }

// print_r($tabsum);




// 5)

// $nombrevaleurs = readline("saisissez un nombre de valeurs");
// $saisie = readline("saisissez une série de nombres");

// $tab =  [];

// for($i=0; $i==count($nombrevaleurs); $i++){
     

// }


// **************
// **Exercice 8**
// **************

// 1)
// 1.1
// $chomage = array('Autriche' =>4.9, 'Allemagne' =>9.3 , 
// 'Danemark' =>4.8 , ' Espagne' =>9.4 , 'France' =>9.7);

// foreach($chomage as $key => $value){
    
//  echo "$key=> $value.\n";
// }

// 1.2
// $chomage = array('Autriche' =>4.9, 'Allemagne' =>9.3 , 
// 'Danemark' =>4.8 , ' Espagne' =>9.4 , 'France' =>9.7);

// foreach($chomage as $pays => $taux){
//         if ($taux < 5.0) {
//                 echo($pays . " : " . $taux . "\n");
//         }
// }

// 1.3
// $chomage = array('Autriche' =>4.9, 'Allemagne' =>9.3 , 
// 'Danemark' =>4.8 , ' Espagne' =>9.4 , 'France' =>9.7);

// echo min($chomage);

// 2.0
// $tabNotes = array('boucher' =>16, 'bourdette' =>13);


// // Ajout direct de l'élément au tableau associatif
// $tabNotes['boudu'] = 15;
// $tabNotes['bouda'] = 9;



// foreach($tabNotes  as $eleve => $note){
//         echo($eleve . ":" . $note . "\n"); 
// }

// $moyenne = (array_sum($tabNotes)/(count($tabNotes)));

//         echo($moyenne);

// *****************************************************************************************************************************
// *****************************************************************************************************************************

// ***************************************
// // Exercices 8 //9 EXERCICES MATRICES**
// ***************************************


// 1)

// $tab=array();

// for($i=1;$i<=12;$i++){
//         for($j=1;$j<=8;$j++){
//                 $tab[$i][$j] = rand(0, 500);;
//                 echo $tab[$i][$j] . " ";
//         }
//         echo " \n ";
// }

// // Aplatir le tableau 2D en un tableau 1D pour trouver la valeur maximale
// $flatArray = array();
// for($i = 1; $i <= 12; $i++) {
//     for($j = 1; $j <= 8; $j++) {
//         $flatArray[] = $tab[$i][$j];
//     }
// }

// // Trouver et afficher la valeur maximale
// $maxValue = max($flatArray);
// echo "La valeur maximale est : " . $maxValue;

// 2)

$tab = array();

for($i=1;$i<=7;$i++){
      for($k= 7-$i; $k>0; $k--){
        echo " ";
    }
for($j = 1; $j <= (2* $i -1); $j++){
        $tab[$i][$j]='*';
        echo $tab[$i][$j];
}
echo "\n";
}





<?php
// ************************************************************************
// *****
// // 1)
// *****



// $i = 0;

// while ($i <1 || $i > 3) {
//     $i = readline("choisir un nombre entre 1 et 3 \n");
// }

// echo $i ."Vous avez trouvé\n";
    
 


// ************************************************************************
// *****
// // 2)
// *****


// $i = readline("choisir un nombre entre 10 et 20");

// while ($i >= 10 && $i <= 20) {
//     if ($i > 20) {break;
        
//         echo "Plus petit !";
//         $i++;
//     }
   
//     elseif ($i < 10)  {break;
        
//         echo "Plus grand !";
//         $i++;
//     }  
// }

// 
// ************************************************************************
// *****
// // 3)
// *****

// $i = readline("Entrez un nombre : ");

// while (gettype($i) === "integer") {
//     $add = $i + 1 && 
//     echo "La somme de votre nombre et 10 est : " . $add;
//     break; // Sortir de la boucle après une itération
// }


// $nbre = readline("Choissiez un nombre : ");
// $nombreFin = $nbre-1 +10;

// while ($nbre <= $nombreFin){
//     $nbre++;
//     echo $nbre ." ";
// }

// $a = 0;

// $b = 0;


// while($a>0 && $b>0){
//      $a++ && $b++;
//      $divide1 = $nombre1 / $a;
//      $divide2 = $nombre2 / $b;
//      $nombre1 = $a;
//      $nombre2 = $b;
// $a = readline("Choissiez un nombre : ");
// $b = readline("Choissiez un nombre : ");

// // echo $divide1 .";". $divide2;
// }

// $num1 =0;
// $num2 =0;

// while($num1 > 0 && $num2>0)



// $num1 =readline("entrez un nombre");
// $num2 =readline("entrez un nombre");
// $result = $num1 % $num2;

// echo "le résultat est:". $result;

// $nombre1 = readline("Entrer un nombre :");
// $nombre2 = readline("Entrer un nombre :");

// while ($nombre2 != 0) {
//     $temp = $nombre2;
//     $nombre2 = $nombre1 % $nombre2;
//     $nombre1 = $temp;
// }

// echo "Le PGCD de ces deux  nombre est : $nombre1\n";

// Exercice 6 

// 1) 
$aleat = rand(1, 9);
$tab = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Initialiser un tableau pour stocker les résultats de la multiplication
$result = array();

// Itérer à travers chaque élément du tableau et effectuer la multiplication
foreach ($tab as $nombre) {
    $produit = $aleat * $nombre;
    // Afficher les détails de chaque itération
    echo "$aleat * $nombre = $produit\n";
    // Ajouter le résultat à notre tableau de résultats
    $result[] = $produit;
}

// Afficher les résultats finaux
echo "Résultats de la multiplication : " . implode(", ", $result) . "\n";

// 2°)




<?php
require "fonctions.php";


// Lire le nouveau nom et numéro
$nouveaunom = readline("Entrez un nouveau nom: ");
$nouveaunumero = readline("Entrez le numéro correspondant: ");

// Ajouter le nouveau contact en utilisant la fonction
$tab = Addcontacts($tabcontacts, $nouveaunom, $nouveaunumero);

// Afficher le tableau de contacts mis à jour
print_r($tab);


// ******************************************************************
// ******************************************************************

$Searchname = readline("Recherchez en tapant votre nom");
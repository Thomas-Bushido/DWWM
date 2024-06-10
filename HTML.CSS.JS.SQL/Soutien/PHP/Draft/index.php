<?php

require "fonction.php";

$Id1 = readline("Entrez un ID");
$Nom1 = readline("Entrez un Nom");
$Prénom1 = readline("Entrez un Prénom");
$Salaire1 = readline("Entrez un salaire");
$Poste1 = readline("Entrez un poste");

$Id2 = readline("Entrez un ID");
$Nom2 = readline("Entrez un Nom");
$Prénom2 = readline("Entrez un Prénom");
$Salaire2= readline("Entrez un salaire");
$Poste2 = readline("Entrez un poste");


 Ajouter($Employes, $Id1, $Nom1, $Prénom1, $Salaire1, $Poste1);
 Push($Employes, $Id2, $Nom2, $Prénom2, $Salaire2, $Poste2);

print_r($Employes);
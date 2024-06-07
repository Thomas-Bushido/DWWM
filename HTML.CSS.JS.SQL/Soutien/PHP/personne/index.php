<?php
//création d'un tableau associatif
$personne=[
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 30,
    "profession" => "Développeur"
];

//Ici, j'affiche une valeur
// echo $personne["nom"];

//Tout afficher
// echo "Nom :". $personne["nom"] ."\n";
// echo "Prénom :". $personne["prenom"]."\n";
// echo "Age :". $personne["age"]."\n";
// echo "Prefession :". $personne["profession"]."\n";



//Ajouter une valeur
$personne["salaire"] = 55000;


//Boucle foreach pour l'affichage
foreach($personne as $key => $value){
    echo ucfirst($key) . " : " . ucfirst($value) . "\n";
}

echo "********************************************\n";

//Modification d'une valeur
// $personne["profession"] = "Chef de projet";

$cleSup = readline("Entrez la clé à supprimer (nom, prenom, age, profession):");
unset($personne[$cleSup]);

//Boucle foreach pour l'affichage
foreach($personne as $key => $value){
    echo ucfirst($key) . " : " . ucfirst($value) . "\n";
}


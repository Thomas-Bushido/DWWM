<?php

require "fonction.php";

while(true){
echo "Menu Bibliothèque";
echo "\n";
echo "\n";
echo "1.Voir le tableau";
echo "\n";
echo "2.Ajouter un livre";
echo "\n";
echo "3.Modifier un livre";
echo "\n";
echo "4.Afficher les livres";
echo "\n";
echo "5.Quitter le menu ?";
echo "\n";
$Selection = readline('Sélectionner un numéro correspondant à une option du tableau:  ');

switch($Selection){
     case 1: 
        echo "Vous avez choisi l'option 1: Voir le tableau";
        echo "\n";
        print_r($biblio);
        break;
     case 2: 
        echo "Vous avez choisi l'option 2: Ajouter un livre";
        echo "\n";
        echo "\n";
        $Titre = readline('Veuillez entrer un titre ');
        echo "\n";
        $Auteur = readline('Veuillez entrer un Auteur ');
        echo "\n";
        $Edition = readline('Veuillez entrer une Edition ');
        echo "\n";
        $Annee = readline('Veuillez entrer une Année ');
        
        Ajouter($biblio, $Auteur, $Edition, $Titre, $Annee);
        print_r($biblio);
        break;
    case 3:
        echo "Vous avez choisi l'option 3: Modifier";
        echo "\n";
        echo "\n";
        $ChoixID = readline("Sélectionner l'ID: ");
        $ModifAuteur = readline("Entrez le nouvel auteur: ");
        $ModifEdition = readline("Entrez le nouvel éditeur: ");
        
        $biblio = modifierLivre($biblio, $ChoixID, $ModifAuteur, $ModifEdition);
        
        // // Afficher le résultat pour vérifier les modifications
        print_r($biblio);
        break;
    case 4:
        echo "Vous avez choisi l'option 4: Afficher les livres de la bibliothèque";
        echo "\n";
        echo "\n";
        AfficherLivre($biblio);



}



}



// $ID = readline('Veuillez sélectionner un ID');
// echo print_r(AfficherLivre($Livres, $ID, $Livre1, $Livre2, $Livre3, $Livre4));



// $Titre = readline('Veuillez entrer un titre');
// $Auteur = readline('Veuillez entrer un Auteur');
// $Edition = readline('Veuillez entrer une Edition');
// $Annee = readline('Veuillez entrer une Année');

// Ajouter($Bibliotheque, $Auteur, $Edition, $Titre, $Annee,);
// print_r($Bibliotheque);
// modifier un Livre
// $ChoixID = readline("Sélectionner l'ID");
// $ModifAuteur = readline("Sélectionner l'auteur du livre que vous souhaitez modifier");
// $ModifEdition = readline("Sélectionner l'Edition du livre que vous souhaitez modifier");

// $biblio = modifierLivre($biblio, $ChoixID, $ModifAuteur, $ModifEdition);

// // Afficher le résultat pour vérifier les modifications
// print_r($biblio);

// echo AfficherLivre($ID, $Livre1, $Livre2, $Livre3, $Livre4);
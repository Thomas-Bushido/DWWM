<?php
$Biblio =[];
$Livre1 = ['ID' => 1, 'Titre' => 'Hello', 'Auteur' => 'Pierre', 'Edition' => "A"];
$Livre2 = ['ID' => 2, 'Titre' => 'Goodbye','Auteur' => 'Paul', 'Edition' => "B"];
$Livre3 = ['ID' => 3, 'Titre' => 'Hi','Auteur' => 'Jacques', 'Edition' => "C"];
$Livre4 = ['ID' => 4, 'Titre' => 'Youhou','Auteur' => 'Max', 'Edition' => "D"];


$biblio= [$Livre1, $Livre2, $Livre3, $Livre4];

function AfficherLivre($biblio){

       foreach($biblio as $id => $Livre){
          echo "ID: " . $id;
          echo "\n";
          echo "Le titre est: " . $Livre['Titre'];
          echo "\n";
          echo "Le titre est: " . $Livre['Auteur'];
          echo "\n";
          echo "Le titre est: " . $Livre['Edition'];
          echo "\n";
          echo "\n";
          echo "*************************************";
          echo "\n";
        
       }
    
    //   switch($ID){
    //        case 1:
            
    //        echo 'Titre: '. $Livre1['Titre']. "\n";
    //        echo 'Auteur: ' . $Livre1['Auteur']. "\n";
    //        echo 'Edition: ' . $Livre1['Edition']. "\n";
    //        break;
    //        case 2:
             
    //         echo 'Titre: '. $Livre2['Titre']. "\n";
    //         echo 'Auteur: ' . $Livre2['Auteur'];
    //         echo 'Edition: ' . $Livre2['Edition'];
    //         break;
    //         case 3:
                  
    //         echo 'Titre: '. $Livre3['Titre'];
    //         echo 'Auteur: ' . $Livre3['Auteur'];
    //         echo 'Edition: ' . $Livre3['Edition'];
    //         break;
    //         case 4:
    //         echo 'Titre: '. $Livre4['Titre'];
    //         echo 'Auteur: ' . $Livre4['Auteur'];
    //         echo 'Edition: ' . $Livre4['Edition'];
    //         break;

    //   }

}


//  function AfficherLivre(&$Livres, $ID, $Livre1, $Livre2, $Livre3, $Livre4);

function Ajouter(&$biblio, $Auteur, $Edition, $Titre, $Annee ){
    $nouveauID = count($biblio) + 1;
      $nouveauLivre = [
                       'ID' => $nouveauID,
                       'Auteur' => $Auteur,
                       'Titre' => $Titre,
                       'Année' => $Annee,
                        'Edition' => $Edition];
  
                  return  $biblio[]= $nouveauLivre;
               
}



function modifierLivre($biblio, $ChoixID, $ModifAuteur, $ModifEdition) {
    foreach ($biblio as &$Livre) { // Utilisation de référence pour modifier directement l'élément du tableau
        if ($Livre['ID'] == $ChoixID) {
            $Livre['Auteur'] = $ModifAuteur;
            echo $Livre['Auteur'];
            $Livre['Edition'] = $ModifEdition;
            echo $Livre['Edition'];
            break; // Sortir de la boucle une fois le livre trouvé et modifié
        }
    }
    return $biblio;
}
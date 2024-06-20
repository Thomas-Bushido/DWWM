<?php
$Livres =[];
$Livre1 = ['ID' => 1, 'Titre' => 'Hello', 'Auteur' => 'Pierre', 'Edition' => "A"];
$Livre2 = ['ID' => 2, 'Titre' => 'Goodbye','Auteur' => 'Paul', 'Edition' => "B"];
$Livre3 = ['ID' => 3, 'Titre' => 'Hi','Auteur' => 'Jacques', 'Edition' => "C"];
$Livre4 = ['ID' => 4, 'Titre' => 'Youhou','Auteur' => 'Max', 'Edition' => "D"];


$Livres = [$Livre1, $Livre2, $Livre3, $Livre4];

// function AfficherLivre(&$Livres, $ID, $Livre1, $Livre2, $Livre3, $Livre4){

//       switch($ID){
//            case 1:
            
//            echo 'Titre: '. $Livre1['Titre']. "\n";
//            echo 'Auteur: ' . $Livre1['Auteur']. "\n";
//            echo 'Edition: ' . $Livre1['Edition']. "\n";
//            break;
//            case 2:
             
//             echo 'Titre: '. $Livre2['Titre']. "\n";
//             echo 'Auteur: ' . $Livre2['Auteur'];
//             echo 'Edition: ' . $Livre2['Edition'];
//             break;
//             case 3:
                  
//             echo 'Titre: '. $Livre3['Titre'];
//             echo 'Auteur: ' . $Livre3['Auteur'];
//             echo 'Edition: ' . $Livre3['Edition'];
//             break;
//             case 4:
//             echo 'Titre: '. $Livre4['Titre'];
//             echo 'Auteur: ' . $Livre4['Auteur'];
//             echo 'Edition: ' . $Livre4['Edition'];
//             break;

//       }

// }


 function AfficherLivre(&$Livres, $ID, $Livre1, $Livre2, $Livre3, $Livre4);







// function Ajouter(&$Bibliotheque, $Auteur, $Edition, $Titre, $Annee ){

//       $nouveauLivre = [
//                        'ID' => count($Bibliotheque) + 1,
//                        'Auteur' => $Auteur,
//                        'Titre' => $Titre,
//                        'Année' => $Annee,
//                         'Edition' => $Edition];
  
//                   return  $Bibliotheque[]= $nouveauLivre;
               
// }


// function modifierLivre(&$Livres, $ModifAuteur, $ModifEdition, $ChoixID){
      
//      foreach($Livres as $Livre){
//       if($Livre[0] == $ChoixID){
//           $Livre['Auteur'] = $ModifAuteur;
//           $Livre['Edition'] = $ModifEdition;

//        return;
          
//       }
// }
// }



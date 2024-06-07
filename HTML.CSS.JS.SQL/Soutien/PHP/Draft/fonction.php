<?php
// Initialiser le tableau des employés
$employes = [];

// Fonction pour ajouter un employé
function ajouterEmploye(&$employe, $id, $nom, $poste, $salaire) {
    $employe[$id] = [
        'nom' => $nom,
        'poste' => $poste,
        'salaire' => $salaire
    ];
}


function afficherEmployes($employes){

    
    foreach($employes as  $id => $employe){
          echo "\n" . "ID : $id\n";
          echo "Nom : " . $employe['nom'] . "\n";
          echo "Poste : " .$employe['poste'] . "\n";
          echo "Salaire : " .$employe['salaire'] . "\n";
          echo "---------------------------------------------";

    }
}

function calculerSalaireTotal($employes){
  $salaireTotal = 0;
  
    foreach($employes as $employe){
        $salaireTotal += $employe['salaire'];
        }
        return $salaireTotal;
}
<?php
// Initialiser le tableau des employés
$Employes = [];


function Ajouter(&$Employes, $id, $Nom, $Prenom, $Salaire, $Poste){
    $Employes[$id] =["Nom:" =>$Nom, 
          "Prenom:"=>$Prenom,
          "Poste:" =>$Poste,
          "Salaire:" => $Salaire]; 


}

function Push(&$Employes, $id, $Nom, $Prenom, $Salaire, $Poste) {
    $Employes[] = [
        "ID" => $id,
        "Nom" => $Nom,
        "Prenom" => $Prenom,
        "Poste" => $Poste,
        "Salaire" => $Salaire
    ];
}
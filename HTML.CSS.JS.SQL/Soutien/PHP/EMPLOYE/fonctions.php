<?php
// Initialiser le tableau des employés
$employes = [];

// Fonction pour ajouter un employé
function ajouterEmploye(&$employes, $id, $nom, $poste, $salaire) {
    $employes[$id] = [
        'nom' => $nom,
        'poste' => $poste,
        'salaire' => $salaire
    ];
}

































// // Fonction pour afficher les employés
// function afficherEmployes($employes) {
//     foreach ($employes as $id => $employe) {
//         echo "ID: $id\n";
//         echo "Nom: " . $employe['nom'] . "\n";
//         echo "Poste: " . $employe['poste'] . "\n";
//         echo "Salaire: " . $employe['salaire'] . "\n";
//         echo "-------------------------\n";
//     }
// }

// // Fonction pour calculer le salaire total
// function calculerSalaireTotal($employes) {
//     $total = 0;
//     foreach ($employes as $employe) {
//         $total += $employe['salaire'];
//     }
//     return $total;
// }
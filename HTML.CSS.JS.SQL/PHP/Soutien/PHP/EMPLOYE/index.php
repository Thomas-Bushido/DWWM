<?php
require "fonctions.php";

// Exemple d'utilisation
ajouterEmploye($employes, 1, 'Pierre', 'Développeur', 50000);
ajouterEmploye($employes, 2, 'Paul', 'Designer', 45000);
ajouterEmploye($employes, 3, 'Jack', 'Chef de projet', 60000);

echo "Liste des employés :\n";
// afficherEmployes($employes);

// echo "Salaire total : " . calculerSalaireTotal($employes) . " euros\n";

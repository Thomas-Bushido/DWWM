<?php

// Initialiser le tableau de contacts
$tabcontacts = array(
    "Alice" => "123456789",
    "Bob" => "987654321"
);

function Addcontacts($tabcontacts, $nom, $numero) {
    // Ajouter un nouveau contact au tableau existant
    $tabcontacts[$nom] = $numero;
    
    return $tabcontacts;
};

function Search($tabcontacts){
   $Searchname = $tabcontacts[0];

   if($Searchname != null){
      


   }

};
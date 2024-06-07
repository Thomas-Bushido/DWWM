<?php ob_start(); //NE PAS MODIFIER 
$titre = " Exo 2:Les Tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

require "gestionTableau.php";
$tab = [2,6,10,20,9,14];
$tab2 = [4,8,2,26,18,14];


afficherTableau($tab);

afficherTableau($tab2);
if(Pair($tab)){
    echo " que des valeurs pairs ". "\n";
} else {
    echo " valeurs impairs". "\n";
}
if(Pair($tab2)){
    echo " que des valeurs pairs ". "\n";
} else {
    echo " valeurs impairs". "\n";
}

?>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

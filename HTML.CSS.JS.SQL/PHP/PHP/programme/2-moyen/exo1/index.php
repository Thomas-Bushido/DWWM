<?php ob_start(); //NE PAS MODIFIER 
$titre = "Tableau à deux dimensions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php


$Ligne = [];
for($i=1;$i <=10;$i++){
    
        $Colonnes = [];
        for($j=1;$j<=10;$j++){
       $Colonnes[]= $i * $j;
    }
        $Ligne[] =  $Colonnes;
}
?>
<table class="table">
    <?php for($i=0;$i <10;$i++) : ?>
        <tr>
        <?php for($j=0;$j <10;$j++) :?>
            <td>
              <?= $Ligne[$i][$j] ?>

            </td>
        <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

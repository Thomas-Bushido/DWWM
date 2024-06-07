<?php 
require "fonction2.php";
$rayon = $resultats = $message = "";


if(isset($_GET['rayon'])){
    $rayon = $_GET['rayon'];
    if(verifierSaisie($rayon)){
        $resultats = calculerCercle($rayon);
    }else{
        $message = "Veuillez entrer un nombre valide";
    }
}

ob_start(); 
?>
<?php if($resultats): ?>
        <p>La circonférence du cercle est : <?= $resultats['circonference']; ?></p>
        <p>La surface du cercle est : <?= $resultats['surface']; ?> </p>
    <?php endif; ?>

    <?php if($message): ?>
        <p><?=$message; ?></p>
    <?php endif; ?>
<?php
$content = ob_get_clean();
$titre = "Calcul cercle";
require "template.php";
?>
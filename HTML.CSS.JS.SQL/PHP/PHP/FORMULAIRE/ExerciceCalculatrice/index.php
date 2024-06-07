<?php ob_start(); ?>

<h1>Bienvenue sur le site</h1>
<p>C'est une page d'accueil de mon site</p>
<?php
    $content = ob_get_clean();
    $titre = "Page d'accueil";
    require "template.php";
?>


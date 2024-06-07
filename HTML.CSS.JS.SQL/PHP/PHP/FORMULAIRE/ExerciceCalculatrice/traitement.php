<?php
require "fonction.php";


$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$choix = $_POST['opération'];


if (isset($_POST['nombre1']) && isset($_POST['nombre2'])) {
    $resultat = operation($choix, $nombre1, $nombre2);
} else {
    echo "<p>Veuillez remplir le formulaire</p>";
}

ob_start();

?>
<?php
if (!is_nan($resultat)) {
    echo "Le résultat : $resultat ";
} else {
    echo "division par 0 impossible";
}

?>

<?php
$content = ob_get_clean();
$titre = "Résultat";

require "template.php";
?>

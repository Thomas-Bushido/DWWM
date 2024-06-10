<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des données</title>
</head>
<body>

<?php
if (
    isset($_POST['Nomcomplet'], $_POST['Adressemail'], $_POST['datenaissance'], $_POST['sexe'], $_POST['ConfMDP'], $_POST['Motdepasse']) && 
    $_POST['ConfMDP'] == $_POST['Motdepasse'] && 
    DateTime::createFromFormat('Y-m-d', $_POST['datenaissance']) !== false
) {
    $nomComplet = htmlspecialchars($_POST['Nomcomplet']);
    $adresseEmail = filter_var($_POST['Adressemail'], FILTER_SANITIZE_EMAIL);
    $dateNaissance = htmlspecialchars($_POST['datenaissance']);
    $sexe = htmlspecialchars($_POST['sexe']);

    // Afficher les informations dans le terminal
    echo "Nom complet : $nomComplet<br>";
    echo "Adresse email : $adresseEmail<br>";
    echo "Date de naissance : $dateNaissance<br>";
    echo "Sexe : $sexe<br>";
    echo "L'utilisateur est inscrit avec succès";
} else {
    echo "Toutes les informations requises ne sont pas fournies ou sont incorrectes.";
}
?>
    <!-- <h1>Affichage des données issues du formulaire</h1>
    <ul>
        <li><?php echo htmlspecialchars($_POST['Nomcomplet']); ?></li>
        <li><?php echo htmlspecialchars($_POST['Adressemail']); ?></li>
        <li><?php echo htmlspecialchars($_POST['datenaissance']); ?></li>
        <li><?php echo htmlspecialchars($_POST['sexe']); ?></li>
    </ul> -->
</body>
</html>
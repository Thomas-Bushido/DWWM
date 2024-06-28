<?php 

if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Répertoire</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="">Ajouter</a></li>
                <li><a href="">Voir les utilisateurs</a></li>
                <li><a href="">Modifier un utilisateur</a></li>
                <li><a href="">Supprimer un utilisateurs</a></li>
                <?php if(isset($_SESSION['user_id'])) : ?>
                    <!-- 'user_id' cette manière de rédiger correspond à  ce qui a été rédigé dans la BDD-->
                   <li><a href="logout.php">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <h1><?=$titre  ?></h1>
    <?= $content?>
    <footer>
        <p class="foot">Copyright AFCI - 2024</p>
    </footer>
</body>
</html>
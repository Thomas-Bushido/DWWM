<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="traitement.php" method="POST">
        <p>Inscription</p>

        <label for="Nomcomplet">Nom</label>
        <input type="text" id="Nomcomplet" name="Nomcomplet">
        <br>

        <label for="Adressemail">Adresse mail</label>
        <input type="email" id="Adressemail" name="Adressemail">
        <br>

        <label for="datenaissance">Date de naissance</label>
        <input type="date" id="datenaissance" name="datenaissance">
        <br>

        <label for="sexe">Sexe: </label>
        <label for="homme">Homme</label>
        <input type="radio" id="homme" name="sexe" value="homme">
        
        <label for="femme">Femme</label>
        <input type="radio" id="femme" name="sexe" value="femme">
        <br>

        <label for="Motdepasse">Mot de passe</label>
        <input type="password" id="Motdepasse" name="Motdepasse">
        <br>

        <label for="ConfMDP">Confirmation du mot de passe</label>
        <input type="password" id="ConfMDP" name="ConfMDP">
        
        <input type="submit" value="soumettre">
    </form>
</body>
</html>



     
    

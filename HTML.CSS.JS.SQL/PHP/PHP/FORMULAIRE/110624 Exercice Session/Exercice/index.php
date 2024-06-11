<?php

session_start();

$logout = "";
if(!isset($_SESSION['ID'])){
  header("Location: login.php");   

}

if (isset($_POST['ID']) && isset($_POST['Mdp']) && isset($_POST['Mail'])) {
    
    $ID = filter_var($_POST['ID'], FILTER_SANITIZE_NUMBER_FLOAT);
    $adresseEmail = filter_var($_POST['Mail'], FILTER_SANITIZE_EMAIL);
    
    

    // Afficher les informations dans le terminal
   echo "Bienvenue Sur votre compte";
   
}else {
    echo "Toutes les informations requises ne sont pas fournies ou sont incorrectes.";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connection</title>
</head>

<body>


<div></div>
<?php $_SESSION['ID'] = $_POST['ID'];?>
<?php $_SESSION['Mail'] = $_POST['Mail'];?>
 
<?php echo 'ID:' . $_SESSION['ID'];?>
<?php echo 'Email:' . $_SESSION['Mail'];?>
<?php echo 'Déconnecter:' . $logout;?>

</form>
    
</body>
</html>
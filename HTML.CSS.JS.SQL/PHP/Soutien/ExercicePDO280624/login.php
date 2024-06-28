<?php ob_start(); 
require_once "dbconnect.php";

if(session_status() == PHP_SESSION_NONE){
    session_start();
}




if(isset($_POST['email'])){
    $email = $_POST['email'];
    $pdo = getPDOConnection();
    $stmt = $pdo->prepare('SELECT id FROM users WHERE email =  ?');
    $stmt->execute($email);
    $user = $stmt->fetch();
    if($user){
        $_SESSION['user_id'] = $user['id'];
        header('location: index.php');
        exit();
    }else{
        $error = "utilisateurs non trouvé";
    }
}



?>



<div class="login-container">
      <?php if(isset($error)): ?>
          <p class="error"><?php echo htmlspecialchars($error)?></p>
          <?php endif; ?>
          <form action="" method="POST">
          <label for="email">Email</label>
          <input type="email" name="email" required>
          <input type="Submit" name="Login">
          </form>
</div>




<?php
$content = ob_get_clean();
$titre = "Identification Espace Admin";
require "template.php";
?>
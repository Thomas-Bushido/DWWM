<?php
session_start();
session_destroy();
header('location: login.php');
exit();


// Pour se déconnecter du compte de l'utilisateur
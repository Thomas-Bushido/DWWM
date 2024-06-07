<?php ob_start(); ?>

<form action="traitement.php" method="POST">
    <label for="nombre1">Nombre1: </label>
    <input type="nombre1" name="nombre1" id="nombre1">

   <br>

  <label for="nombre2">Nombre2: </label>
  <input type="nombre2" name="nombre2"  id="nombre2"> 
   <br>
   <label for="opération">Opération: </label>
  <input type="opération" name="opération"  id="opération">
   <li>1. Addition</li>
   <li>2. soustraction</li>
   <li>3. Multiplication</li>
   <li>4. Division</li>



 <input type="submit" value="Envoyer">
   <br>
 

</form>



<?php
   $content = ob_get_clean();
   $titre = "Exemple de formulaire";
   require "template.php";
   ?>

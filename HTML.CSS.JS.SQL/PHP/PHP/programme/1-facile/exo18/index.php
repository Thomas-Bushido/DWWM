<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exercice 18: Méthode GET"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<form action ="" method="POST">
   <div class= "form-group">
    <label>Note 1 : </label>
    <input type="number" name="Note1" class="form-control">
   </div>
   <div class="form-group">
    <label>Note 2 :</label>
    <input type="number" name="Note2" class="form-control">
   </div>
   <div class="form-group">
    <label>Note 3 :</label>
    <input type="number" name="Note3" class="form-control">
   </div>
   <input type="submit" class="btn btn-primary" value="Valider">

</form>

<?php
if(
    isset($_POST['Note1']) && !empty($_POST['Note1']) &&
    isset($_POST['Note2']) && !empty($_POST['Note2']) &&
    isset($_POST['Note3']) && !empty($_POST['Note3'])) {
        $note1 = $_POST['Note1'];
        $note2 = $_POST['Note2'];
        $note3 = $_POST['Note3'];
        $notes = [$note1, $note2, $note3];
        $moyenne = calculerMoyen($notes);
        echo "La moyenne des 3 notes $note1, $note2, $note3   est de: " .round(CalculerMoyen($notes), 2) ;
    }

    function calculerMoyen($notes){
        $Sum = 0;
        
        foreach($notes as $note){
        $Sum += $note;
    }  
      return ($Sum)/(count($notes));
   
    }
   
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

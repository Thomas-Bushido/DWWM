<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="index.php" method="POST">
       <p>Etat civil</p>

       <label for="option1">Marié(e)</label>
       <input type="radio" id="option1" name="option1" value="Marié(e)">

       <label for="option2">Celibataire</label>
       <input type="radio" id="option2" name="option2" value="Marié(e)">

       <label for="option3">Pacsé</label>
       <input type="radio" id="option3" name="option3" value="Marié(e)">

       <input type="submit" value="soumettre">
       </form>
    <?php
    if(isset($_POST['option'])){
        $option = $_POST['option'];
        echo "vous avez selectionné:" . $option;
    }else{"Aucune option sélectionné:";
    }

    ?>

     
    
</body>
</html>
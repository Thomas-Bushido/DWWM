<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="index.php" method="POST">
       <p>Interet</p>

       <label for="music">Musique</label>
       <input type="checkbox" name="interet[]" value="musique" checked>

       <label for="lecture">Musique</label>
       <input type="checkbox" name="interet[]" value="Lecture" checked>>

       <label for="Voyage">Musique</label>
       <input type="checkbox" name="interet[]" value="voyage" checked>

       <input type="submit" value="Envoyer">
       </form>
    <?php
    if(isset($_POST['interet']) && is_array(($_POST['interet']))){
        $interets = $_POST['interet'];

        foreach($interets as $interet){
            echo ($interet). "<br>";
        }
    }
        else{echo "Aucune option sélectionné";
    }

    ?>

     
    
</body>
</html>
<?php

function afficherTableau($tab){
       echo "<div>";
        for($i=0;$i< count($tab); $i++){
            echo ($i===0) ? "":"-";
            echo $tab[$i];
        }
       echo "</div>";
}


function CalcMoy($tab){
    $result = 0;
    for($i=0;$i< count($tab); $i++){
   $result += $tab[$i];
}
echo ($i===0) ? "":" ";
return round(($result)/(count($tab)), 2);
   
   
}


function Pair($tab){
    foreach($tab as $value){
        if($value % 2 !== 0) return false;
        }
    return true;
}

















?>
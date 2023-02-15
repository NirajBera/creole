<?php

function Short($string, $order){
    
    $array = str_split($string);

    if($order == false){
        $ascending = asort($array);
 
        if($ascending == $array){
            echo "true";
        }
        else{
            echo "false";
        } 
    }

    if($order == true){
        $descending = arsort($array);

        if($descending == $array){
            echo "true";
        }
        else{
            echo "false";
        }
    }

}


Short("abbcddeikl",false);
echo "<br>";
Short("jheca", true);



?>
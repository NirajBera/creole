<?php

function Short($string, $order){
    $length = strlen($string);
    $array = [];

    for($inner = 0; $inner < $length; $inner++){
        $push = array_push($array, $string[$inner]);
    }

    
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
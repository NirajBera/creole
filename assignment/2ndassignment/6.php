<?php

function Short($string, $order){
    $length = strlen($string);
    $array = [];

    for($inner = 0; $inner < $length; $inner++){

        $push = array_push($array, $string[$inner]);
    }

    if($order == false){
        asort($array);
        foreach($array as $value){
            echo $value;
        }
    }

    if($order == true){
        arsort($array);
        foreach($array as $value){
            echo $value;
        }
        
    }

}


Short("bacd",false);
echo "<br>";
Short("hvfrt",true);
echo "<br>";
Short("axedzpq", true);
echo "<br>";
?>
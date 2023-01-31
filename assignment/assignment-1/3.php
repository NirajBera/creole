<?php

    $arr_variable = array ('PHP','MySQL','Java');

    $arr_len=count($arr_variable);

    for($i=0;$i<$arr_len;$i++){
        echo "The emement [$i] : ",$arr_variable[$i];
        echo "<br>";
        }

        echo "<br>";
    foreach($arr_variable as $key => $value)
    {
        echo "The element [$key] : $value";
        echo "<br>";
    }    


?>
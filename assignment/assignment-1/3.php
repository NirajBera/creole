<?php

    $arr_variable = array ('PHP','MySQL','Java');

    $arr_len=count($arr_variable);

    for($loop=0;$loop<$arr_len;$loop++){
        echo "The emement [$loop] : ",$arr_variable[$loop];
        echo "<br>";
        }

        echo "<br>";
    foreach($arr_variable as $key => $value)
    {
        echo "The element [$key] : $value";
        echo "<br>";
    }    


?>
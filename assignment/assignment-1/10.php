<?php

    for($loop = 1;$loop <= 5;$loop++){
        echo "&nbsp";
        $var=5;
        for($innerLoop =1; $innerLoop <= $loop  ;$innerLoop++){
             echo $var;
             $var--;
        }
        $var=5;
        echo "<br>";
 
     }
?>
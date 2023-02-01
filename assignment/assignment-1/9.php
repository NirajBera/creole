<?php

    for($loop = 1;$loop <= 5;$loop++){
        echo "&nbsp";
        $var=1;
        for($innerLoop =$loop; $innerLoop<= 5 ;$innerLoop++){
             echo $var;
             $var++;
        }
        $var=0;
        echo "<br>";
 
     }
?>
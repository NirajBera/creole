<?php

    for($loop = 1;$loop <= 5;$loop++){
        echo "&nbsp";
        
        for($innerLoop =$loop; $innerLoop<= 5 ;$innerLoop++){
             echo chr($loop+64);
             
        }
        
        echo "<br>";
 
     }
?>
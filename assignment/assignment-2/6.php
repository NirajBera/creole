<?php

        for($loop = 1;$loop <= 5;$loop++){
            for($k=5;$k >=$loop; $k--){
                echo "&nbsp";
            }
            for($innerLoop =1; $innerLoop<= $loop ;$innerLoop++){
                echo "*";
            }
            echo "<br>";

        }

?>
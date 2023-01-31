<?php

for($i = 1;$i <= 5;$i++){
    for($k=5;$k >=$i; $k--){
        echo "&nbsp";
    }
    for($j =1; $j<= $i ;$j++){
        echo "*";
    }
    echo "<br>";

}


?>
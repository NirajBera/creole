<?php
$i=1;   
while($i <= 10){
    if($i % 2 == 0){
        echo "Skipping number $i because it is even.";
    }else{
        echo "Executing - counter is $i .";
    }
    echo "<br>";
    $i++;
}

?>
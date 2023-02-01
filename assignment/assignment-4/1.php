<?php
$loop=1;   
while($loop <= 10){
    if($loop % 2 == 0){
        echo "Skipping number $loop because it is even.";
    }else{
        echo "Executing - counter is $loop .";
    }
    echo "<br>";
    $loop++;
}

?>
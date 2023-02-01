<?php
    $phone_number = "001-234-567678";

    $numbber=explode("-",$phone_number);
    foreach($numbber as $num){
        echo $num;
        echo "<br>";
    }
?>
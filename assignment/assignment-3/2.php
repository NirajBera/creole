<?php
    $personal_details = array("name"=>"Rajesh Rao", "occupation" => "Engineer","age" => 39, "country" => "India");

    foreach($personal_details as $x=>$key){
        echo $x ."=". $key;
        echo "<br>";
    }
    

?>
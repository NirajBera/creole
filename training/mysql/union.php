<?php
    require 'connect.php';

    echo "<br>";
    echo "<center> <h3> Union Operator</h3></center>";

    echo "<br><br>";
    echo "<h4>union</h4>";

    $sql= "SELECT name FROM emp UNION SELECT fname FROM user_info ORDER BY name";

    $res= mysqli_query($conn,$sql);
        
    if(mysqli_num_rows($res) > 0){

    while($row = mysqli_fetch_assoc($res)){
        echo print_r($row);
        echo "<br>";
    }
    
    }else{
        echo "no record";
    }

    echo "<br><br>";
    echo "<h4>union All</h4>";

    $sql= "SELECT name FROM emp UNION all SELECT fname FROM user_info ORDER BY name";

    $res= mysqli_query($conn,$sql);
        
    if(mysqli_num_rows($res) > 0){

    while($row = mysqli_fetch_assoc($res)){
        echo print_r($row);
        echo "<br>";
    }
    
    }else{
        echo "no record";
    }
?>
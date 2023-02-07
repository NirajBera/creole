<?php
    require 'connect.php';

    echo "<br>";
    echo "<center> <h3> JOIN </h3></center>";

    echo "<br><br>";
    echo "<h4>inner join</h4>";

    $sql= "select emp.id,emp.name,designation.desig from emp inner join designation on emp.id=designation.id";

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
    echo "<h4>Left join</h4>";

    $sql= "select emp.id,emp.name,designation.desig from emp left join designation on emp.id=designation.id";

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
    echo "<h4>Right join</h4>";

    $sql= "select emp.id,emp.name,designation.desig from emp right join designation on emp.id=designation.id";

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
    echo "<h4>Cross join</h4>";

    $sql= "select emp.id,emp.name,designation.desig from emp cross join designation on emp.id=designation.id";

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
    echo "<h4>Self join</h4>";

    $sql= "select emp.name,designation.desig from emp,designation where emp.id = designation.id";

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
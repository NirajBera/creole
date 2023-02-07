
<?php
    require 'connect.php';

    echo "<br>";
    echo "<center> <h3> MIN </h3></center>";
    $sql1 = "select MIN(salary) as min_salary from emp ";

    $res1= mysqli_query($conn,$sql1);

    if(mysqli_num_rows($res1) > 0){

            $row = mysqli_fetch_assoc($res1);
            print_r($row);
       
    }else{
        echo "no record";
    }

    echo "<br><br>";
    echo "<center> <h3> MAX </h3></center>";
    $sql2 = "select MAX(salary) as max_salary from emp ";

    $res2= mysqli_query($conn,$sql2);

    if(mysqli_num_rows($res2) > 0){

        $row = mysqli_fetch_assoc($res2);
            print_r($row);
        
    }else{
        echo "no record";
    }
?>    

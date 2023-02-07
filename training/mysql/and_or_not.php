<?php
    require 'connect.php';

    echo "<center> <h3> AND </h3></center>";
    $sql1 = "select * from user_info where id = 3 and fname ='meet' ";

    $res1= mysqli_query($conn,$sql1);

    if(mysqli_num_rows($res1) > 0){

        while($row = mysqli_fetch_assoc($res1)){
            echo "<b> id :- </b>". $row["id"] . ",<b>  Name :-  </b>" . $row["fname"] . " " .  $row["lname"] .",<b> email :- </b>" . $row["email"] . "<br>";
        }
    }else{
        echo "no record";
    }

    echo "<br><br>";
    echo "<center> <h3> OR </h3></center>";
    $sql2 = "select * from user_info where id = 3 or fname ='ravi' ";

    $res2= mysqli_query($conn,$sql2);

    if(mysqli_num_rows($res2) > 0){

        while($row = mysqli_fetch_assoc($res2)){
            echo "<b> id :- </b>". $row["id"] . ",<b>  Name :-  </b>" . $row["fname"] . " " .  $row["lname"] .",<b> email :- </b>" . $row["email"] . "<br>";
        }
    }else{
        echo "no record";
    }


    echo "<br><br>";
    echo "<center> <h3> NOT </h3></center>";
    $sql3 = "select * from user_info where not fname ='ravi' ";

    $res3= mysqli_query($conn,$sql3);

    if(mysqli_num_rows($res3) > 0){

        while($row = mysqli_fetch_assoc($res3)){
            echo "<b> id :- </b>". $row["id"] . ",<b>  Name :-  </b>" . $row["fname"] . " " .  $row["lname"] .",<b> email :- </b>" . $row["email"] . "<br>";
        }
    }else{
        echo "no record";
    }

?>
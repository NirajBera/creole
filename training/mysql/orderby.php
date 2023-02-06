<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order By - select</title>
</head>
<body>
    <center>
        <h3>Order By - select</h3>
    </center>
</body>
</html>
        <center>
        <br><br>
        
<?php
        require 'connect.php';
        echo "<h3>Ascending Order</h3>";

        $sql="select * from user_info order by lname ";

        $res=mysqli_query($conn,$sql);

        if(mysqli_num_rows($res) > 0){

            while($row = mysqli_fetch_assoc($res)){
                echo "<b> id :- </b>". $row["id"] . ",<b>  Name :-  </b>" . $row["fname"] . " " .  $row["lname"] .",<b> email :- </b>" . $row["email"] . "<br>";
            }
        }else{
            echo "no record";
        }
       
         echo "<br><br>";
         echo "<h3>Descending Order</h3>";

        $sql1="select * from user_info order by lname DESC ";
        $res1=mysqli_query($conn,$sql1);

        if(mysqli_num_rows($res1) > 0){

            while($row = mysqli_fetch_assoc($res1)){
                echo "<b> id :- </b>". $row["id"] . ",<b>  Name :-  </b>" . $row["fname"] . " " .  $row["lname"] .",<b> email :- </b>" . $row["email"] . "<br>";
            }
        }else{
            echo "no record";
        }
       
        mysqli_close($conn);

?>
         </center>    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limit Record Display</title>
</head>
<body>
    <center>
        <h3>Limit Record Display</h3>
    </center>
</body>
</html>
<?php
        require 'connect.php';

        $sql="select * from user_info orders limit 2,8";
        $res=mysqli_query($conn,$sql);
?>
    <center>
<?php
        if(mysqli_num_rows($res) > 0){

            while($row = mysqli_fetch_assoc($res)){
                echo "<b> id :- </b>". $row["id"] . ",<b>  Name :-  </b>" . $row["fname"] . " " .  $row["lname"] .",<b> email :- </b>" . $row["email"] . "<br>";
            }
        }else{
            echo "no record";
        }
       
        mysqli_close($conn);

?>
    </center>
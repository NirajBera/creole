<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Record</title>
</head>
<body>
    <center>
        <h3>Select Record</h3>
    </center>
</body>
</html>

<?php
        require 'connect.php';

        $sql="select * from user_info where lname = 'patel' ";
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
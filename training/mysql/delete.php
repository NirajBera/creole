<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
</head>
<body>
    <center>
        <h3>Delete Record</h3>
    </center>
</body>
</html>
<?php
        require 'connect.php';

        $sql="delete from user_info where id=2";

        if(mysqli_query($conn,$sql)){
            echo "Delete record successfully";
        }else{
            echo "error : ". mysqli_error($conn);
        }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Database</title>
</head>
<body>
    <center>
        <h3>Create Database</h3>
    </center>
</body>
</html>

<?php
    require 'connect.php';
    $sql="create database test1";

    if(mysqli_query($conn,$sql)){
        echo "Database created successfully";
    }else{
        echo "erron in db : ".mysqli_error($conn);
    }
    mysqli_close($conn);
?>

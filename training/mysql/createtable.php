<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
</head>
<body>
    <center>
        <h3>Create Table</h3>
    </center>
</body>
</html>
<?php
        require 'connect.php';

        // $sql="create table user_info(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        // fname VARCHAR(30) NOT NULL,
        // lname VARCHAR(30) NOT NULL,
        // email VARCHAR(50))";
        $sql="create table designation(did INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        id int(6),
        desig VARCHAR(30) NOT NULL,
        FOREIGN KEY (id) REFERENCES emp(id))";

        if(mysqli_query($conn,$sql)){
            echo "table created successfully";
        }else{
            echo "error : ". mysqli_error($conn);
        }


?>
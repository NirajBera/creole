<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Record</title>
</head>
<body>
    <center>
        <h3>Insert Record</h3>
    </center>
</body>
</html>
<?php
        require 'connect.php';

        $sql="insert into user_info (fname,lname,email) values ('raj','kalola','raj@gmail.com')";

        if(mysqli_query($conn,$sql)){
            echo "Insert record successfully";
        }else{
            echo "error : ". mysqli_error($conn);
        }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Multiple Record</title>
</head>
<body>
    <center>
        <h3>Insert Multiple Record</h3>
    </center>
</body>
</html>
<?php
        require 'connect.php';

        $sql="insert into user_info (fname,lname,email) values ('sumit','patel','sumilt@gmail.com');";
        $sql .="insert into user_info (fname,lname,email) values ('vivek','palivar','vivek@gmail.com');";
        $sql .="insert into user_info (fname,lname,email) values ('aman','sukala','aman@gmail.com');";

        if(mysqli_multi_query($conn,$sql)){
            echo "Insert record successfully";
        }else{
            echo "error : ". mysqli_error($conn);
        }


?>
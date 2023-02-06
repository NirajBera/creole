<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
</head>
<body>
    <center>
        <h3>Update Record</h3>
    </center>
</body>
</html>
<?php
        require 'connect.php';

        $sql="update user_info set lname='jivani' where fname = 'dev' ";

        if(mysqli_query($conn,$sql)){
            echo "Record update successfully";
        }else{
            echo "error : ". mysqli_error($conn);
        }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Connection</title>
</head>
<body>
    <center>
        <h3>MySQL</h3>

    </center>
    
</body>
</html>

<?php
    
        $conn = mysqli_connect("localhost","root","","mydb");

        if(!$conn){
            die("connection is fail:".mysqli_connect_error());
        }else{

            //echo "connected successfull";
        }

        
?>
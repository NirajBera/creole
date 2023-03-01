<?php
    $conn = mysqli_connect("localhost","root","","mydb");

    if(!$conn){
        die("connection is fail:" . mysqli_connect_error());
    }else{

        //echo "connected successfull";
    }

?>
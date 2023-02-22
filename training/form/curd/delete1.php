<?php
    include 'connect.php';
    $id=$_GET['id'];
    $sql="delete from crud where id = '$id'";
    if(mysqli_query($conn,$sql)){
        header("Location:welcome.php");
    }else{
        echo $id;
        echo "error";
    }

?>
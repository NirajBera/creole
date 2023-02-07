<?php
    require 'connect.php';

    $id = $_GET['id'];

    $sql="DELETE FROM user_form WHERE id = $id";

    if(mysqli_query($conn,$sql)){
        echo "delete record successfully";
        header('Location:display.php');
        
    }else{
        echo "error : ". mysqli_error($conn);
    }
?>
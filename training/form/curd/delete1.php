<?php
    include 'connect.php';
    $id=$_GET['id'];
    session_start();
    $sql="delete from crud where id = '$id'";
    if(mysqli_query($conn,$sql)){
        $_SESSION['msg']= " User id = ".$id." deleted successfully ";
        header("Location:welcome.php");
    }else{
        echo $id;
        echo "error";
    }

?>
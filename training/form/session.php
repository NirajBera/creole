<?php
    include('connect.php');
    session_start();
    $check=$_SESSION['email'];
    


    $res=mysqli_query($conn,"select name from user where email='$check'");
    $row= mysqli_fetch_array($res,MYSQLI_ASSOC);
    $_SESSION['name']=$row['name'];
    if(!isset($_SESSION['name'])){
        header("location:login.php");
        die();
     }
?>
<?php
    include('connect.php');
    session_start();
    $check=$_SESSION['email'];
    $res=mysqli_query($conn,"select name from user where email='$check'");
    $row= mysqli_fetch_array($res,MYSQLI_ASSOC);
    $login_session=$row['name'];
    if(!isset($_SESSION['login_user'])){
        header("location:login.php");
        die();
     }
?>
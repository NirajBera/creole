<?php
session_start();



$email = $_SESSION['email'];
include('connect.php');

        $data = file_get_contents("php://input");
        $mydata = json_decode($data,true);
        $password = md5($mydata['password']);
        

                    $sql="update user set password = '$password' where email = '$email' ";
                    if(mysqli_query($conn,$sql)){

                       $s=1;
                       echo $s;
                     }
                     else{
                        echo "somthing is wrong";
                    }

?>
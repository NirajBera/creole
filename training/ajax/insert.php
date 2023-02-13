<?php

        $conn = mysqli_connect("localhost", "root", "", "mydb");

        if (!$conn) {
            die("connection is fail:" . mysqli_connect_error());
        } else {

            //echo "connected successfull";
        }

     
            $data = file_get_contents("php://input");
            $mydata = json_decode($data,true);
            $fname = $mydata['fname'];
            $lname = $mydata['lname'];
            $email = $mydata['email'];

            $sql="INSERT INTO `user_info`( fname, lname, email) VALUES ('$fname','$lname','$email')";
            if(mysqli_query($conn,$sql)){
                echo "Insert record successfully";
            }else{
                echo "error : ". mysqli_error($conn);
            }
     

?>
<?php
    
    session_start();

    include('connect.php');

    $data = file_get_contents("php://input");
    $mydata = json_decode($data,true);
    $email = $mydata['email'];
    $password = $mydata['password'];

    
        $password=md5($password);
       

        $sql = "select email,password from user where email = '$email' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if ($count === 1) {
            //session_register("email");
            // $_SESSION['email'] = $email;

            // header("location: welcome.php");
            echo "Login successful";
        } else {
            echo "Login failed. Invalid username or password.";
        }
    
    ?>
<?php
    
    session_start();

    include('connect.php');

    $data = file_get_contents("php://input");
    $mydata = json_decode($data,true);
    $email = $mydata['email'];
    $password = $mydata['password'];
    $remember=$mydata['remember'];

    if($remember != "none"){
        setcookie ("email",$email,time()+ 360000);
        setcookie ("password",$password,time()+ 360000);
    }
        $_SESSION['email']=$email;
    
        $password=md5($password);
       

        $sql = "select email,password from user where email = '$email' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if ($count === 1) {
           $s=1;
           echo $s;
        } else {
            echo "Login failed. Invalid username or password.";
        }
    
    ?>
<?php
        include('connect.php');

        $data = file_get_contents("php://input");
        $mydata = json_decode($data,true);
        $name = $mydata['name'];
        $email = $mydata['email'];
        $password = $mydata['password'];

                    $sql1="select email from user where email = '$email'";
                    $result = mysqli_query($conn, $sql1);
                    $count = mysqli_num_rows($result);

                        if ($count === 1) {
           
                                echo "email all ready exits.";
                         } else {
                            $password=md5($password);

                            $sql = "INSERT INTO user( name, email, password) VALUES('$name','$email','$password')";
                            if(mysqli_query($conn,$sql)){
                                echo "Insert record successfully";
                            }else{
                                echo "error : ". mysqli_error($conn);
                            }
              
                        }

                   
            


?>
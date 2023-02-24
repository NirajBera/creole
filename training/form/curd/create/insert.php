<?php
        include('connect.php');

        // $data = file_get_contents("php://input");
        // $mydata = json_decode($data,true);

        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $number = $_POST['number'];
        
        $filename = $_FILES['image']["name"];
        $tempname = $_FILES['image']["tmp_name"];
        $base_dir = "../../image/";
        $address = $_POST['address'];
                    
                          

                            $sql = "INSERT INTO crud( name, email, gender, number, img, address) VALUES('$name','$email','$gender','$number','$filename','$address')";
                            if(mysqli_query($conn,$sql)){

                                $sql2 = "SELECT id FROM crud WHERE email = '$email'";
                                        $res2 = mysqli_query($conn, $sql2);
                                        $row2 = mysqli_fetch_assoc($res2);
                                        $id = $row2['id'];
                                        $new_dir = $id;
                                        mkdir($base_dir . $new_dir);
                                        $target_file = $base_dir . $new_dir . '/'. $filename ;


                                        
                                        if (move_uploaded_file($tempname,$target_file)) {
                                            echo 1;
                                        } else {
                                            echo "<h3>  Failed to upload image!</h3>";
                                        }
                            }else{
                                echo "errrottttt";
                                echo "error : ". mysqli_error($conn);
                                
                            }

                           
              
                        

                   
            


?>
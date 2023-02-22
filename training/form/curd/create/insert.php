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
        $folder = "../../image/".$filename;
        $address = $_POST['address'];
                    
                          

                            $sql = "INSERT INTO crud( name, email, gender, number, img, address) VALUES('$name','$email','$gender','$number','$filename','$address')";
                            if(mysqli_query($conn,$sql)){
                                if (move_uploaded_file($tempname, $folder)) {
                                    echo 1;
                                } else {
                                    echo "<h3>  Failed to upload image!</h3>";
                                }
                            }else{
                                echo "errrottttt";
                                echo "error : ". mysqli_error($conn);
                                
                            }

                           
              
                        

                   
            


?>
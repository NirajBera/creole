<?php
        include('connect.php');

        // $data = file_get_contents("php://input");
        // $mydata = json_decode($data,true);
        $id=$_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $number = $_POST['number'];
        
        // $filename = $_FILES['image']["name"];
        // $tempname = $_FILES['image']["tmp_name"];
        // $folder = "../image/".$filename;
        $address = $_POST['address'];
                    
                          

                            $sql = "update crud set name='$name', email='$email', gender='$gender', number='$number', address = '$address' where id='$id'";
                            if(mysqli_query($conn,$sql)){
                                // if (move_uploaded_file($tempname, $folder)) {
                                //     echo 1;
                                // } else {
                                //     echo "<h3>  Failed to upload image!</h3>";
                                // }
                                echo 1;
                            }else{
                                echo "errrottttt";
                                echo "error : ". mysqli_error($conn);
                                
                            }


?>
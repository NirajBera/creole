<?php
        include('connect.php');

      
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['number']) && !empty(['address'])){
        $id=$_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $number = $_POST['number'];
        $address = $_POST['address'];
                    
                          

                            $sql = "update crud set name='$name', email='$email', gender='$gender', number='$number', address = '$address' where id='$id'";
                            if(mysqli_query($conn,$sql)){
                                echo 1;
                            }else{
                                
                                echo "error : ". mysqli_error($conn);
                                
                            }
        }else{
            echo "some fild are empty";
        }

?>
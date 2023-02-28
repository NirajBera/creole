<?php
        include('connect.php');

        // $data = file_get_contents("php://input");
        // $mydata = json_decode($data,true);
        $id=$_POST['id'];
        $filename = $_FILES['image']["name"];
        $tempname = $_FILES['image']["tmp_name"];
        $base_dir = "../image/";
      
                    
                          

                         $sql = "update crud set img='$filename' where id='$id'";
                            if(mysqli_query($conn,$sql)){
                                $sql2 = "SELECT id FROM crud WHERE id='$id'";
                                $res2 = mysqli_query($conn, $sql2);
                                $row2 = mysqli_fetch_assoc($res2);
                                $id = $row2['id'];
                                $new_dir = $id;
                               // mkdir($base_dir . $new_dir);
                                $target_file = $base_dir .'/'. $new_dir . '/'. $filename ;


                                
                                if (move_uploaded_file($tempname,$target_file)) {
                                    echo 1;
                                } else {
                                    echo "<h3>  Failed to upload image!</h3>";
                                }
                                
                            }else{
                                echo "error : ". mysqli_error($conn);
                                
                            }


?>
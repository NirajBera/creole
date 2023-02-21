<?php
        include('connect.php');

        $data = file_get_contents("php://input");
        $mydata = json_decode($data,true);
        $otp = $mydata['otp'];
        

                    $sql="select otp from otp where otp ='$otp'";
                    $result = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($result);

                    if ($count === 1) {
                        $s=1;
                        echo $s;
                        $sql1="delete from otp where otp ='$otp'";
                        $res=mysqli_query($conn,$sql1);

                    } else {
                        echo "otp is not valid";
                    }
              

                   
            


?>
<?php
        session_start();
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        
        include('connect.php');

        $data = stripcslashes(file_get_contents("php://input"));
        $mydata = json_decode($data,true);
        $email = $mydata['email'];
        
        $_SESSION['email']=$email;
       

                    $sql1="select email from user where email = '$email'";
                    $result = mysqli_query($conn, $sql1);
                    $count = mysqli_num_rows($result);

                        if ($count === 1) {
           
                            
                            require 'PHPMailer-master\src\Exception.php';
                            require 'PHPMailer-master\src\PHPMailer.php';
                            require 'PHPMailer-master\src\SMTP.php';
                            
                            $otp = rand(100000,999999);
                            //require 'PHPMailer-master/PHPMailerAutoload.php';
                            $mail = new PHPMailer;
                            $mail->isSMTP();
                            $mail->SMTPSecure = 'ssl';
                            $mail->SMTPAuth = true;
                            $mail->Host = 'smtp.gmail.com';
                            $mail->Port = 465;
                            $mail->Username = 'niraj.bera18405@marwadieducation.edu.in';
                            $mail->Password = 'noovcslqqnkxytsq';
                            $mail->setFrom('niraj.bera18405@marwadieducation.edu.in');
                            $mail->addAddress($email);
                            $mail->Subject = 'OTP';
                            $mail->Body = 'Your otp is :- '.$otp;
                            //send the message, check for errors
                            if (!$mail->send()) { 
                                
                                echo "ERROR: " . $mail->ErrorInfo;
                            } else {

                                $s=1;
                                echo $s;

                                

                                $sql1="insert into otp (email,otp)values ('$email','$otp')";
                                $res=mysqli_query($conn,$sql1);
                               
                            }
                         } else {
                            
                                
                            echo "email is not register.";
              
                        }


?>
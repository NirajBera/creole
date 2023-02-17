<?php
        //session_start();
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        
        include('connect.php');

        $data = stripcslashes(file_get_contents("php://input"));
        $mydata = json_decode($data,true);
        $email = $mydata['email'];
       

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

        
        // session_start();
        // use PHPMailer\PHPMailer\PHPMailer;
        // use PHPMailer\PHPMailer\Exception;
        
        // include('connect.php');
        
        // // Check if the request method is POST
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //   $data = file_get_contents("php://input");
        //   $mydata = json_decode($data, true);
        //   $email = $mydata['email'];
        
        //   // Check if the email is registered in the database
        //   $sql1 = "SELECT email FROM user WHERE email = '$email'";
        //   $result = mysqli_query($conn, $sql1);
        //   $count = mysqli_num_rows($result);
        
        //   if ($count === 1) {
        //     // Send the OTP email using PHPMailer
        //     require 'PHPMailer-master\src\Exception.php';
        //     require 'PHPMailer-master\src\PHPMailer.php';
        //     require 'PHPMailer-master\src\SMTP.php';
        
        //     $otp = rand(100000, 999999);
        //     $mail = new PHPMailer;
        //     $mail->isSMTP();
        //     $mail->SMTPSecure = 'ssl';
        //     $mail->SMTPAuth = true;
        //     $mail->Host = 'smtp.gmail.com';
        //     $mail->Port = 465;
        //     $mail->Username = 'niraj.bera18405@marwadieducation.edu.in';
        //     $mail->Password = 'noovcslqqnkxytsq';
        //     $mail->setFrom('niraj.bera18405@marwadieducation.edu.in');
        //     $mail->addAddress($email);
        //     $mail->Subject = 'OTP';
        //     $mail->Body = 'Your otp is: ' . $otp;
        
        //     if (!$mail->send()) {
        //       // Error sending email
        //       http_response_code(500);
        //       echo "Error sending OTP email: " . $mail->ErrorInfo;
        //     } else {
        //       // OTP email sent successfully, insert OTP into the database and return success response
        //       $sql1 = "INSERT INTO otp (email, otp) VALUES ('$email', '$otp')";
        //       $res = mysqli_query($conn, $sql1);
        
        //       if ($res) {
        //         // OTP inserted successfully
        //         echo 1;
        //       } else {
        //         // Error inserting OTP into the database
        //         http_response_code(500);
        //         echo "Error inserting OTP into the database: " . mysqli_error($conn);
        //       }
        //     }
        //   } else {
        //     // Email is not registered
        //     http_response_code(400);
        //     echo "Email is not registered.";
        //   }
        // } else {
        //   // Invalid request method
        //   http_response_code(405);
        //   echo "Invalid request method.";
        // }
             
            


?>
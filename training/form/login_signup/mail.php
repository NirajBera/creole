<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
$mail->addAddress('beraniraj2503@gmail.com');
$mail->Subject = 'Hello from PHPMailer!';
$mail->Body = 'Your otp is :- '.$otp;
//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    echo "SUCCESS";
}
?>

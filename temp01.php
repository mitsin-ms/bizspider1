<?php

use PHPMailer\src\PHPMailer;
use PHPMailer\src\Exception;


        
$mail = new PHPMailer();

    // ---------- adjust these lines ---------------------------------------
    $mail->Username = "sinhamitesh5@gmail.com"; // your GMail user name
    $mail->Password = "Bisleri@1234"; 
    $mail->AddAddress("mitsin.ms@gmail.com"); // recipients email
    $mail->FromName = "vipul suryanshi"; // readable name

    $mail->Subject = "Subject title";
    $mail->Body    = "Here is the message you want to send to your friend."; 
    //-----------------------------------------------------------------------

    $mail->Host = "ssl://smtp.gmail.com"; // GMail
    $mail->Port = 465;
    //$mail->IsSMTP(); // use SMTP
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->From = $mail->Username;
    if(!$mail->Send())
        echo "Mailer Error: " . $mail->ErrorInfo;
    else
        echo "Message has been sent";
    ?>
        
        
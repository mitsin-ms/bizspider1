<?php

require_once 'c:/users/mit/vendor/autoload.php';


// Create the Transport

$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'));
  
  $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'));
  $transport->setUsername('sinhamitesh5@gmail.com');

  $transport->setPassword('Bisleri@1234');


// Create the Mailer using your created Transport

$mailer = new Swift_Mailer($transport);


$body = "hello";

$message = (new Swift_Message('Email Through Swift Mailer'));
$message->setFrom(['sinhamitesh5@gmail.com' => 'FROM_NAME']);
$message->setTo(['mitsin.ms@gmail.com']);
$message->setBody($body);
$message->setContentType('text/html');

$mailer->send($message);

// try{
//        $mailer = getMailer();
//        $response = getMailer()->send($message);
//    }catch(\Swift_TransportException $e){
//        $response = $e->getMessage() ;
//    }

?>





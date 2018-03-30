<?php 

// Include email class and email() function 
require_once('email.php'); 

// Create new instance of email 
$email = new Email(); 

$email->addRecipient('mitsin.ms@gmail.com'); 

$email->setSubject("hello"); 
$email->addHeader('From', "sinhamitesh5@gmail.com"); 
$email->setMessage("hello"); 

$email->send(); 

?>
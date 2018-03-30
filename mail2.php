
<?php

$contextOptions = array(
 "ssl" => array(
 "verify_peer"      => false,
 "verify_peer_name" => false,
 ),
);


$errno = 0;
$errstr = "";

$sock = fsockopen('tls://smtp.gmail.com', 465, $errno, $errstr, 10); 
echo 'Socket is: '; 
var_dump($sock); 

echo 'Errors: ' . $errno . ' ' . $errstr; 


echo "<br>==============";
var_dump(openssl_get_cert_locations());
?>
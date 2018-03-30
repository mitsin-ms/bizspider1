<?php
//$dsn = 'mysql:dbname=bizspider; host=127.0.0.1';
//$user = 'root';
//$password = 'root';
//
//try {
//    $dbh = new PDO($dsn,$user,$password);
//}catch (PDOException $e) {
//    echo 'Connection failed', $e->getMessage();
//}
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
require_once 'vendor/autoload.php';
try {
//Creating connection for mysql
$conn = new PDO("mysql:host=$servername;dbname=bizspider", $username, $password,array(PDO::ATTR_PERSISTENT=> true));
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM login where emailid=" . "'" . $_POST[email1] ."'";
print_r($sql);
$username = "";
$records = $conn->query($sql);
$mcount = 0;
$mpassmd5 = "";
$mpass = "";
$mpass = trim($_POST[password1]);
$mpassmd5 = md5($mpass);
$login = 0;
$email = $_POST[email1];
$conn=null;

foreach ($records as $row) {
$mcount++;    
}
echo "<br> mcount:" . $mcount;
if($mcount ===1) {
    echo "<h3>Email account is valid, we will send you a link to reset the password at your email</h3>";
    genLink($email);    
    }
else
    {
    echo "<script> alert('email id not found') </script>";
    echo "<script> window.close(); </script>";
    }

function genLink($gemail) {
  $mlink = "";
  $mlink = md5(str_shuffle($gemail));
  $mlink1 = "";
  $mlink1 = "localhost/first/first/enterpwd.php?q=" . $mlink;
  echo "<h3>" . $mlink1 . "</h3>";
    $servername = "localhost";
    $username = "root";
    $password = "root";
    
    try {
    //Creating connection for mysql
    $conn = new PDO("mysql:host=$servername;dbname=bizspider", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    echo "<h3> email is :" . $gemail . " </h3>";
    $sql = "UPDATE login SET resetlink = " ."'" . $mlink . "'" . " WHERE EMAILID = " . "'".$gemail."'";
    

    //$q=$conn->exec(" UPDATE  USertable
      //      SET     username='$username', password='$password'
        //    WHERE   id=1");
    
  echo "<br>";
  print_r($sql);
  $username = "";
      
    
 $q = $conn->query($sql);
 $conn = null;
 echo "<br> <br>";
 echo "link for reset is : $mlink1";
 $mlink1 = "http://dev.bizspider.test/enterpwd.php?q=" . $mlink;
 echo "<p> link for reset is : $mlink1";

    //require_once 'c:/users/mit/vendor/autoload.php';
    require_once 'vendor/autoload.php';
//echo "<h3> Hellossad </h3>";
// Create the Transport

    $transport = new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl');

    $transport = new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl');
    $transport->setUsername('sinhamitesh5@gmail.com');

    $transport->setPassword('Bisleri@1234');

    echo "<h3> Hekjhllossad </h3>";
// Create the Mailer using your created Transport

    $mailer = new Swift_Mailer($transport);


    $body = "hello";

    $message = (new Swift_Message('Email Through Swift Mailer'));
    $message->setFrom(['sinhamitesh5@gmail.com' => 'FROM_NAME']);
    $message->setTo([$gemail]);
    $message->setBody($mlink1);
    $message->setContentType('text/html');

    $mailer->send($message);
    echo "<script> alert('Email has been sent') </script>";
    echo "<script>window.close()</script>";


}

function my_simple_crypt( $string, $action) {
    // you may change these values to your own
    $secret_key = 'my_simple_secret_key';
    $secret_iv = 'my_simple_secret_iv';
 
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
 
    if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        echo "<h1>" . $string . "</h1>";
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
        echo "<h1> output is:" . $output . "</h1>";
    }
 
    return $output;
}

?>


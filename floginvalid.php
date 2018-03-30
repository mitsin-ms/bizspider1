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



$sql = "SELECT * FROM login where emailid=" . "'" . $_POST['email1'] ."'";
print_r($sql);
$username = "";
$records = $conn->query($sql);
$mcount = 0;
$mpassmd5 = "";
$mpass = "";
$mpass = trim($_POST['password1']);
$mpassmd5 = md5($mpass);
$login = 0;
$emailid = "";

foreach ($records as $row) {
echo "Mpassmd5 =>" . $mpassmd5 . "row password ==>" . $row['password'];
if($mpassmd5 === $row['password']) {
    $login = 1;
    $username = $row['name'];
    $emailid = $row['emailid'];
    $imageid = $row['profilepic_path'];
}
$mcount++;    
}
echo "<br> mcount:" . $mcount;
if($login ===1) {
    echo "<script> alert('Login successful');</script>";
    
    $_SESSION["username"] = $username;
    $_SESSION["emailid"] = $emailid;
    $_SESSION["imageid"] = $imageid;
    
    if(isset($_SESSION["username"]))
    //echo "<script> alert('session is set'); </script>";
    
    echo "<script> window.location = 'dashboard.php' </script>";
    }
else
    {
    echo "<script> alert('login unsucessful') </script>";
    echo "<script type='text/javascript'> window.location = 'login.php'; </script>";
    }



?>






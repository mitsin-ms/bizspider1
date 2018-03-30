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

$pass = "";
$id = "";
$pass = $_POST['password1'];
$pass = md5($pass);
$id = $_POST[id1];

$sql = "SELECT * FROM login WHERE emailid ='" . $_POST['email1'] . "'" . " AND password = '" . $pass ."'";
//echo "<h3>$sql</h3>";

$record = $conn->query($sql);
$mcount = 0;

foreach($record as $row) {
    $mcount++;
}
//echo "<h3>$mcount is :$mcount</h3>" ;
//die();
if($mcount != 1) {
   echo "<script>alert('old password entered is wrong')</script>";
   echo "<script>window.location = 'changepwd.php';</script>";
    }
else {
  $id = $row[0];    
  $pass = $_POST['npassword1'];
  $pass = md5($pass);
  $sql = "UPDATE login SET password = " ."'" .$pass ."'" ." WHERE id = '" . $id . "'";  
  if($conn->query($sql)) {
   echo "<script>alert('password updated')</script>";
   echo "<script> window.location = 'login.php' </script>";
  }
}


//$sql = "UPDATE login SET password = " ."'" .$pass ."'" ." WHERE id = '" . $id . "'";
//echo $sql;
//if($conn->query($sql)) {
//    echo "<script>alert('password updated')</script>";
//    echo "<script> window.location = 'login.html' </script>";
//}



?>






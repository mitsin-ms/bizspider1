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



if(isset($_POST['name1'])){
$sql = "SELECT emailid FROM login where emailid=" . "'" . $_POST[email] ."'";
print_r($sql);
$records = $conn->query($sql);
$mcount = 0;

foreach ($records as $row) {
$mcount++;    
}
echo "<br>total no of rows in for each" . $mcount;
if($mcount>0) {
    echo "<script> alert('Email id already exists record not saved...'); </script>";
    echo "<script> window.close(); </script>";
    return;
}
$mpass = $_POST['password'];
$md5passinput = "";
$md5passinput = trim($mpass);

$md5pass = "";
$md5pass = md5($md5passinput);
    
echo "<br> password ==>" . $mpass . "md5 ==>" . $md5pass ;    
echo "<br>";
$sql = "INSERT INTO login (name,emailid,password) VALUES (" .  "'$_POST[name1]'" ."," ."'$_POST[email]'".",'$md5pass'".")";
print_r($sql);
if ($conn->query($sql)) {
echo "<script type = 'text/javascript'>alert('Values Written to database');</script>";
$sql = "SELECT * FROM login WHERE emailid = '" .$_POST[email]."'";
print_r($sql);
$records = $conn->query($sql);
$mcount = 0;
$id = 0;
foreach ($records as $row) {
$mcount++;    
$id = $row['id'];    
}
$sql = "INSERT INTO profile (mainid) VALUES (" ."'$id'" .")";
//print_r($sql)
$records = $conn->query($sql);
echo "<script type = 'text/javascript'>window.close();</script>";
}
}


?>






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
$conn = new PDO("mysql:host=$servername;dbname=bizspider", $username, $password,array(PDO::ATTR_PERSISTENT=> true));
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected successfully";
}
catch(PDOException $e)
{
//echo "Connection failed: " . $e->getMessage();
}


//
//if(isset($_POST['name1'])){
$sql = "SELECT emailid FROM login where emailid=" . "'" . $_POST[email] ."'";
//print_r($sql);
$records = $conn->query($sql);
$mcount = 0;

foreach ($records as $row) {
$mcount++;    
}
//echo "<br>total no of rows in for each" . $mcount;
if($mcount>0) {
    $error = "Email already exists";
    echo json_encode($error);
    return;
}

$mpass = $_POST['password'];
$md5passinput = "";
$md5passinput = trim($mpass);

$md5pass = "";
$md5pass = md5($md5passinput);
    
//echo "<br> password ==>" . $mpass . "md5 ==>" . $md5pass ;    
//echo "<br>";
$sql = "INSERT INTO login (name,emailid,password) VALUES (" .  "'$_POST[name]'" ."," ."'$_POST[email]'".",'$md5pass'".")";
$conn->query($sql);
//==============================
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
//$records = $conn->query($sql);
//===================================




//print_r($sql);
//if ($conn->query($sql)) {
//echo "<script type = 'text/javascript'>alert('Values Written to database');</script>";
////echo "<script type = 'text/javascript'>window.close();</script>";
//
//
//
//
//}
//echo "<script>alert('in ajax call to php')</script>";
if($conn->query($sql))
{
  $res="Data Inserted Successfully:";
  echo json_encode($res);
}
else {
  $error="Not Inserted,Some Probelm occur.";
  echo json_encode($error);
}


?>






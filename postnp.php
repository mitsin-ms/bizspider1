<?php
session_start();
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

$target_dir = "uploads/posts/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
{
    echo "<script> image file uploaded </script>";
}

$date = date('Y-m-d H:i:s');
$sql = "INSERT INTO posts (custid,title,description, imageurl, datetime) VALUES (" .  "$_POST[custid]" ."," ."'$_POST[title1]'".",'$_POST[description]'".",'$target_file'" .",'$date'" . ")";

//$sql = "INSERT INTO POSTS (custid, title, description, imageurl) VALUES (" . "'" . $_POST[custid] . "' , '" . $_POST[title1] . "' ," . $_POST[description] ."' ,'" . $target_file . "')" ;


print_r($sql);

$record = $conn->query($sql);

echo "<script>alert('record saved')</script>";
echo "<script>window.location = 'postn.php'</script>";
?>


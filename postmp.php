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
$temp = "";

$target_dir = "uploads/posts/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

//if($target_file == $_POST['oldimageurl']) {
//    $uploadOk = 0;
//}

echo "target file:$target_file";
echo "<br>";
echo "old file :$_POST[oldimageurl]";

if(strlen($target_file)==14) {
    $target_file = $_POST[oldimageurl];
}


if($uploadOk==1) {
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
{
    echo "<script> image file uploaded </script>";
}

}
//$sql = "INSERT INTO POSTS (custid,title,description, imageurl) VALUES (" .  "$_POST[custid]" ."," ."'$_POST[title1]'".",'$_POST[description]'".",'$target_file'" . ")";
$date = date('Y-m-d H:i:s');

$sql = "";
$sql = "UPDATE posts SET title = '" . $_POST['title1'] ."'" . ",
                         description = '" .$_POST['description'] ."'" .",
                         datetime = '". $date . "'" . ",
                         imageurl = '". $target_file . "'" . " where id = " .$_POST['postid'];

//echo "vardump($sql)";
//$sql = "INSERT INTO POSTS (custid, title, description, imageurl) VALUES (" . "'" . $_POST[custid] . "' , '" . $_POST[title1] . "' ," . $_POST[description] ."' ,'" . $target_file . "')" ;


print_r($sql);
$record = $conn->query($sql);

echo "<script>alert('record saved')</script>";
echo "<script>window.location = 'postv.php'</script>";
?>


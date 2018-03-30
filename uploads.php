<?php
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


$emailid = $_SESSION['emailid'];
echo "<h1> $emailid </h1>";
$sql = "SELECT * FROM login where emailid=" . "'" . $_SESSION['emailid'] ."'";
print_r($sql);
$username = "";
$records = $conn->query($sql);
$mcount = 0;
$mpassmd5 = "";
$mpass = "";
$mpass = trim($_POST['password1']);
$mpassmd5 = md5($mpass);
$login = 0;






$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    echo "tmp file:" . $_FILES["fileToUpload"]["tmp_name"];
    echo "</br>";
    echo "target file:" . $target_file;
    echo "</br>";
    echo "file name:" . basename($_FILES["fileToUpload"]["name"]);
    echo "</br>";
    //$str = "";
    //$str = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        echo "<script>alert('file has been uploaded');</script>";
        //echo "<script>window.close();</script>";
        
        $sql = "UPDATE login SET profilepic_path=" . "'". $target_file. "' where emailid = '".$emailid ."'";
        print_r($sql);
        if($conn->query($sql))
        {
            echo "<p>login file path updated</p>";
        }
        else
        {
            echo "<p> login file path not updated </p>";
        }
     $_SESSION["imageid"] = $target_file;
       echo "<script> window.location = 'profile.php' </script>";    
    } else {
        echo "Sorry, there was an error uploading your file to server.";
        echo "<h3>" . $str . "</h3>";
    }
    
    
}



?>
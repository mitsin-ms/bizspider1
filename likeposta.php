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
//$sql = "SELECT * FROM post where id=" . "'" . $_POST['postid'] ."'";
//print_r($sql);
//$records = $conn->query($sql);
//$mcount = 0;

//foreach ($records as $row) {
//$mcount++;    
//}

$postid = $_POST['postid'];
$custid = $_POST['custid'];
$nliked = $_POST['nliked'];
$oliked = $_POST['oliked'];

//$postid = 6;
//$custid = 6;
//$nliked = 1;
//$oliked = 0;



if($nliked == 1)
    $sql = "UPDATE posts SET posts.nooflikes = (posts.nooflikes + 1) WHERE posts.id = " . $postid;
else
    $sql = "UPDATE posts SET posts.nooflikes = (posts.nooflikes - 1) WHERE posts.id = " . $postid;

$records = $conn->query($sql);




$sql = "DELETE FROM likes WHERE (postid = " . $postid . " AND custid = " .$custid .")";

$records = $conn->query($sql);

$sql = "INSERT INTO likes (postid,custid,liked) VALUES (" . $postid . " , " . $custid . " , " . $nliked . ")";
//var_dump($sql);
$records = $conn->query($sql);



//echo "<br>total no of rows in for each" . $mcount;
    echo json_encode("inserted");
    

?>






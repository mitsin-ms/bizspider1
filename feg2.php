<?php
session_start;
?>




<!DOCTYPE html>
<html>
<head>
<title> Login Form </title>
<meta charset ="utf-8">
<link href="feg2.css" rel="stylesheet" type = "text/css">
</head>



<body>
<hr> 
<h2 style="text-align: center"> Login Form </h2>
<hr>

<?php
$servername = "mysql7002.site4now.net:3306";
$username = "llh4urby_mit";
$password = "abcd1234";
$database = "llh4urby_dbpdo1";
try {

$conn = new PDO("mysql:host=$servername", $username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "<p> database connection successful </p>";
 
//$sql = "CREATE DATABASE dbpdo1";
//$conn->exec($sql);

$sql = "use $database";
$conn->exec($sql);

//$sql = "CREATE TABLE mytable (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), password VARCHAR(30))";
//$conn->exec($sql);
//echo "<p> Table created successfully <p>";



}

catch(PDOException $e)
{
	echo "the error in PDO is :" . $e->getMessage();
}
?>

<!-- -------------------------------------------------------------------------------------------------------------------------- -->

<?php
   $add = 0;
   if(isset($_POST['name'])) {
   	$add = 1;
   	$name = $_POST['name'];
   	$password = $_POST['password'];
   }

   if($add==1)
   {
   	//$sql = "INSERT INTO dbpdo1.mytable (name, password) VALUES ($_POST['name'] , $_POST['password'])"; -->
    
    $sql = "INSERT INTO llh4urby_dbpdo1.mytable (name, password) VALUES ('$name' , '$password')";
   	$conn->exec($sql);
    print_r($_POST);
   }

  $view = 0;
  if(isset($_POST['recno']))
  {
  	 $view = $_POST['recno'];
  	 $sql = "SELECT * FROM mytable WHERE id = '$view'";
     $row = $conn->query($sql);
     $row->setFetchMode(PDO::FETCH_ASSOC);
     $r =$row->fetch();
     echo $r['id'] ;
     echo $r['name'] ;
     echo $r['password'];
     print_r($r);
     $_SESSION['id'] = $view;
     $_SESSION['name'] = $r['name'];
     $_SESSION['password'] = $r['password'];
  }
  else {
     $_SESSION['id'] = -999;
     $_SESSION['name'] = "entername";
     $_SESSION['password'] = "enter pwd"; 
  }


  ?>


<div class="lmargin">
<p> hello </p>
</div>

<div class = "cmargin1">
<p> hello1	 </p>
<hr>
<form method="Post">
<label for ="name1">Enter you name</label>
<input type = "text" name="name" id="name"><br>
<label for = "password1">Enter your password </label>
<input type = "password" name="password" id="password"><br>
<input type = "Submit" value="submit">
</form>

</div>

<div class = "cmargin2">
<p> hello2	 </p>
<hr>
<form method="Post">
<label for="recno">Enter record number</label>
<input type="text" name="recno" id="recno">
<label for ="name1">Enter you name</label>
<input type = "text" name="name" id="name" value=<?= $_SESSION['name'] ?>> <br>
<label for = "password1">Enter your password </label>
<input type = "password" name="password" id="password" value=<?= $_SESSION['password'] ?> ><br>
<input type = "Submit" Value = "Go to Record Number">
</form>

</div>


<div class = "rmargin">
<p> hello 3</p>

</div>


</body>



</html>



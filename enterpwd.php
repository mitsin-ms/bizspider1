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
$resetlink = "";
$resetlink = $_GET[q];
echo "<h3> " .$resetlink . "</h3>";

$sql = "SELECT * FROM login WHERE resetlink = '" . $resetlink ."'" ;
$record = $conn->query($sql);

print_r($record);
$mcount = 0;
foreach ($record as $row) {
echo $row[0];
echo $row[1];
echo $row[2];
echo $row[3];
$mcount++;
}

if ($mcount == 0) {
    echo "link expired";
    die();
}

?>
<!Doctype html>
<html>
    
	<head>
		<meta charset = "utf-8">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
-->
        
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href="css/style2.css" type="text/css">
	</head>

<body>
	<div class="topmargin">
    </div>
    
    <div class="row">
    <div class="col-md-12">
    <div class="logo">
        
        
    </div>    
    </div>
       
    </div>
    <h3 class="text-center">PLEASE RESET YOUR PASSWORD BELOW</h3>
    <br>

<h3 class="text-center">Reset your password</h3>
    <br>
    <div class="row">
        <div class="col">
        
        </div>
        <div class="col">
            <form name = "form1" action="enterpwdp.php" method="post" onsubmit = "return validateForm();">
              <input type = "text" name = "id1" value = <?php echo $row[0] ?> readonly>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password1" name="password1">
              </div>
              
              <div class="form-group">
                <label for="password">Reenter Password</label>
                <input type="password" class="form-control" id="password2" name="password2">
              </div>    
                
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        
        </div>
        <div class="col">
        
        
        </div>
        
        
    <script>
    function validateForm() {
        alert("in validate form");
        var pass1 = "";
        var pass2 = "";
        pass1 = document.forms['form1']['password1'].value
        pass2 = document.forms['form1']['password2'].value
        
        
        if(pass1.length == 0 || pass2.length == 0) {
            alert("Enter Your Password it cannot be blank");
            return false;
        }
        
        
        if(pass1===pass2) {
            return true;
        }
        else
            {
            alert("Password does not match");
            return false;
        }
        
        
        
        
        
    }    
        
    </script>
    
    </body>

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
echo "Connected successfully1"  .  "<br>";
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}

//$sql = "INSERT INTO login (name,emailid,password) VALUES ('vipul suryawanshi','vipul@gmail.com','password')";
//if ($conn->query($sql)) {
//echo "<script type = 'text/javascript'>alert('ok'); </script>";
//}


?>





<!doctype html>
<html>
<head>
<title>
FORM LOGIN PAGE    
</title>
<link rel="stylesheet" type="text/css" href="css/flogin.css">
    <script>
        
        
        
    function validateForm() 
    {
        //alert("in validate form1");
        var name = document.forms["form1"]["name1"].value;
        var email = document.forms["form1"]["email"].value;
        var password = document.forms["form1"]["password"].value   ; 
        var password1 = document.forms["form1"]["password1"].value ;
        
        if(password==="")
            {
            alert("You have not entered password")
            return false;
            }
        
        if(name==="")
            {
            alert("You have not entered password")
            return false;
            }
        
        if(email==="")
            {
            alert("You have not entered password")
            return false;
            }
        
        
        //alert("password =" + password+"password1="+password1 +" variable name :"+name + " variable email:" + email);
        
        if(password===password1)
            {
          //  alert("in validate true");
            return true;
            }
        else
            {    
            alert("Passwords do not match");
            return false;
            }
    }
    
    function validateForm2() {
        var mcapt1 = document.getElementById("idcaptcha1").innerHTML;
        var mcapt2 = document.getElementById("text1").value;
        //alert (mcapt1 + "/" + mcapt2);
        if(mcapt1 == mcapt2) {
            return true;
        }
        else
            {
               alert("reverify captcha you have entered");
               return false;
            }
        return true;
    }
    
    function gencaptcha() {
    var capt1 = 0;
    capt1 = Math.random() * 9999;
    capt1 = Math.floor(capt1);
    document.getElementById("idcaptcha1").innerHTML = capt1;
    }
    </script>    
    
    
</head>
<body onload="gencaptcha()">
    <h1>Registration Page</h1>
    <hr>
    <div class="form1">
    <form method="Post" onsubmit = "return validateForm();" action="floginpost.php" target="_blank" name="form1">
        <label>Enter Your Name :</label>
        <input type="text" name="name1">
        <br>
        <label>Enter Email:</label>
        <input type="email" name="email">
        <br>
        <label>Enter Password:</label>
        <input type="password" name="password">
        <br>
        <label>Confirm Password:</label>
        <input type="password" name="password1">
        <br>
        <button type = "reset">Reset</button>
        <button type="submit" value="submit">Submit</button>
        <br>
    </form>
    
    </div>
    <hr>
    <div class="form2">
    <h2>LOGIN FORM</h2>
    <hr>
    
    <form  name="form2" method = "Post" onsubmit = "return validateForm2();" action = "floginvalid.php" target="_blank">
    <label>Enter Email id :</label>    
    <input type = "email" name="email1" >
    <br>
    <label>Enter Password :</label>
    <input type = "password" name="password1">
    <br>
    <br>
        
    <button type = "submit" value="submit">Log In</button>
    <button type = "reset">Reset</button>    
    <br>
    
    
        
    </form>
    <label>Enter the text below</label>
    <input type = "text" id="text1">
    <br>
    <label id="idcaptcha1">.</label>
        <button onclick="gencaptcha()">Regen Captcha</button>
    <br>
    <br>
        
    </div>
    
    
</body>
    
    

</html>
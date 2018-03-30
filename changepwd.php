<?php
session_start();
//echo "<script>alert($_SESSION['emailid']);</script>";
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
	
        
    <script>
        function validateform() {
            var pass1 = document.forms['form1']['npassword1'].value;
            var pass2 = document.forms['form1']['npassword2'].value;
            if(pass1.length < 5)
            {
                alert("Password length must be greater than 4 characters")
                return false;
            }
            if(pass1 !== pass2)
                {
                    alert("password do not match");
                    return false;
                }
            else
                return true;
        }
        
    </script>
    
    
    
    
    
    
    
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
    <h3 class="text-center">Enter your email id and old password</h3>
    <br>
    <div class="row">
        <div class="col">
        
        </div>
        <div class="col">
            <form action="changepwdp.php" method="post" onsubmit = "return validateform()" name="form1">
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email1" name="email1" value="<?php echo $_SESSION['emailid'] ?>" readonly>
              </div>
              <div class="form-group">
                <label for="password">Old Password</label>
                <input type="password" class="form-control" id="password1" name="password1" required>
              </div>
              <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" class="form-control" id="npassword1" name="npassword1" required>
              </div>
              <div class="form-group">
                <label for="password">Verify Password</label>
                <input type="password" class="form-control" id="npassword2" name="npassword2" required>
              </div>
                
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="dashboard.php">Return to Main Screen</a>
        </div>
        <div class="col">
        
        
        </div>
    
    </div>
    
    
    
    
    
</body>
<!--
<div class="col-md-3">
    <div class="lform">
    <form method = "Post" action="" name="lform">    
    <label>Email Id:</label>
    <input type="text" name="emailid">
    <label></label>
    <label>"Password:"</label>    
    <input type="password" name="password">
    <button type="submit" name="submit">Log In</button>
    </form>    
    </div>    
    </div> 
-->
</html>

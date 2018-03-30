<?php
session_start();
$_SESSION["username"] ="";
$_SESSION["emailid"] = "";
$_SESSION["imageid"] = "";

session_unset();
session_destroy();





//echo "<script> alert('unset vars'); </script>";
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

<body onload = "gencaptcha()">
	<div class="topmargin">
    </div>
    
    <div class="row">
    <div class="col-md-12">
    <div class="logo">
        
        
    </div>    
    </div>
       
    </div>
    
    <div class="row goldenbrown"> 
        <div class="col-md-3">
        </div>    
        <div class="col">
            <div class="lform">
                <p class="text-center">Please Login Using Your Email Id</p>
                <hr>
                <form method = "Post" action="floginvalid.php" onsubmit = "return validateForm2();" name="lform">    
                    <label class="label1">Email Id:</label>
                    <input type="text" class="text1" name="email1">
                    <label></label>
                    <br>
                    <label class="label1">Password:</label>    
                    <input type="password" name="password1" class="text1">
                    <br>
                    <label class="label1">Enter the below Captcha</label>
                    <input type="text" name="captcha" id="text1" class="text1">
                    <br>
                    <span style="color:black; font-weight:800;"id="captcha2" class="label1">Hello</span>
                    <button type = "button" onclick = "gencaptcha()">Regen Captcha</button>
                    
                    
                    <button style="margin-left:100px;" type="submit" value="submit" name="submit">Log In</button>
                </form>
                               <a href="forgotpwd.html" style="color:burlywood " class="label1">Forgot Password</a>
                <br>
                <a href="signup.html" style="color:burlywood" class="label1">Register</a>
            </div> 
        </div>
        <div class="col-md-3">
        </div>
    </div>
    
    
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js"></script>   -->
    
<!--
<script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
-->
    
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>    
    
    
<script>
    
function validateForm() 
    {
        alert("in validate form1");
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
            alert("You have not entered name")
            return false;
            }
        
        if(email==="")
            {
            alert("You have not entered email")
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
    
    
    
    
function gencaptcha() 
  {
    var capt1 = 0;
    capt1 = Math.random() * 9999;
    capt1 = Math.floor(capt1);
    document.getElementById("captcha2").innerHTML = capt1;
  }
    
function validateForm2() {
        var mcapt1 = document.getElementById("captcha2").innerHTML;
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
    

//window.onload = function()
//{
//    if (window.jQuery)
//    {
//        alert('jQuery is loaded');
//    }
//    else
//    {
//        alert('jQuery is not loaded');
//    }
//}    
    
function ajaxsubmit() {
//    alert("in ajax submit");
//    alert("in ajax ");
//    $.ajax({
//            type: "POST",
//            url: "floginposta.php",
//            data: {name:flname1,email:flemail1,password:flpassword1},
//            dataType: "JSON",
//            success: function(data) {
//             $("#message").html(data);
//            $("p").addClass("alert alert-success");
//            },
//            error: function(err) {
//            alert(err);
//            }
//        });

alert("in ajax submit");

var name = document.forms["form1"]["name1"].value;
var email = document.forms["form1"]["email"].value;
var password = document.forms["form1"]["password"].value   ; 
            
    
    
var xhttp = new XMLHttpRequest;
xhttp.onreadystatechange = function() {
     if(this.readyState == 4 && this.status == 200) {
         alert(this.responseText);
     }
};

    
    
    
    
xhttp.open("POST", "floginposta.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
var text = "";
text = "name="+name+"&email="+email+"&password="+password;
xhttp.send(text);    
    
    
    
}        



</script>    
    
    
    
    
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

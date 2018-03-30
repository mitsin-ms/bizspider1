
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";


/*<form>
<select id="company" name="company">
<option <?php if ($company == 1 ) echo 'selected' ; ?> value="1">Apple</option>
<option <?php if ($company == 2 ) echo 'selected' ; ?> value="2">Samsung</option>
<option <?php if ($company == 3 ) echo 'selected' ; ?> value="3">HTC</option>
</select>
</form>
============================================
var values = "Test,Prof,Off";
var splitValues = values.split(',');
var multi = document.getElementById('strings');

multi.value = null; // Reset pre-selected options (just in case)
var multiLen = multi.options.length;
for (var i = 0; i < multiLen; i++) {
  if (splitValues.indexOf(multi.options[i].value) >= 0) {
    multi.options[i].selected = true;
  }
}



*/


try {
//Creating connection for mysql
    $conn = new PDO("mysql:host=$servername;dbname=bizspider", $username, $password);
// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}



$sql = "SELECT * FROM login where emailid=" . "'" . $_SESSION["emailid"] ."'";
//print_r($sql);
$records = $conn->query($sql);
$mcount = 0;

foreach ($records as $row) {
    $mcount++;
}
//echo "<br>total no of rows in for each" . $mcount;
$emailid = $row['emailid'];
$name = $row['name'];
$idmain = $row['id'];

$sql = "SELECT * FROM profile where mainid =" ."'".$idmain."'";
$records = $conn->query($sql);
$mcount = 0;
$fname1 = "";
$lname1 = "";
$phone1 = "";
$bdate1 = "";
$hobbies1 = "";
$fquote1 = "";
$mstatus1 = "";
$skills1 = "";
$qual1 = "";
$skill1= "";
$gender1="";
$noOfAdd= 0;

foreach ($records as $row) {
    $fname1 = $row['firstname'];
    $lname1 = $row['lastname'];
    $phone1 = $row['phoneno'];
    $bdate1 = $row['dob'];
    $hobbies1 = $row['hobbies'];
    $fquote1 = $row['fav_quote'];
    $mstatus1 = $row['married'];
    $skills1 = $row['skills'];
    $qual1 = $row['qualification'];
    $skill1= $row['skills'];
    $gender1 = $row['gender'];
    $noOfAdd = $row['noofadd'];
}


?>


<!Doctype html>
<html>
    
	<head>
		<meta charset = "utf-8">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <script src="js/parsley.min.js"></script>
        
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href="css/profile.css" type="text/css">
 <script>
        var noOfText = 0;
     
        function preview_image(event)
        {
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
     
     
     
        window.Parsley.addValidator('gender', {
        validateString: function(value) {
        if(value > 0)
            return true;
        else
            return false;
          },
          messages: {
            en: 'Select gender from the drop down box',
        }
        });
     
        window.Parsley.addValidator('mstatus', {
        validateString: function(value) {
        if(value > 0)
            return true;
        else
            return false;
          },
          messages: {
            en: 'Select Maritial staus from the drop down box',
        }
        });
     
        window.Parsley.addValidator('qual', {
        validateString: function(value) {
        if(value > 0)
            return true;
        else
            return false;
          },
          messages: {
            en: 'Select Highest qualification from the drop down box',
        }
        });

        function funconload()
            {
                /*
                var values = "Test,Prof,Off";
                var splitValues = values.split(',');
                var multi = document.getElementById('strings');

                
                multi.value = null; // Reset pre-selected options (just in case)
                    var multiLen = multi.options.length;
                    for (var i = 0; i < multiLen; i++) {
                      if (splitValues.indexOf(multi.options[i].value) >= 0) {
                        multi.options[i].selected = true; */

                
                
                var hobbies = "";
                var val = 0;
                var val1 = 0;
                var elem = document.getElementById("hobbies11");
                elem.value = null;
                hobbies = <?php echo "'". $hobbies1 ."'"; ?>;
                //alert(hobbies);
                val1 = hobbies.indexOf('0');
                if(val1>=0)
                    elem.options[0].selected = true;
                val1 = hobbies.indexOf('1');
                if(val1>=0)
                    elem.options[1].selected = true;
                val1 = hobbies.indexOf('2');
                if(val1>=0)
                    elem.options[2].selected = true;
                val1 = hobbies.indexOf('3');
                if(val1>=0)
                    elem.options[3].selected = true;
                val1 = hobbies.indexOf('4');
                if(val1>=0)
                    elem.options[4].selected = true;
                val1 = hobbies.indexOf('5');
                if(val1>=0)
                    elem.options[5].selected = true;
                val1 = hobbies.indexOf('6');
                if(val1>=0)
                    elem.options[6].selected = true;
                val1 = hobbies.indexOf('7');
                if(val1>=0)
                    elem.options[7].selected = true;
                val1 = hobbies.indexOf('8');
                if(val1>=0)
                    elem.options[8].selected = true;
                val1 = hobbies.indexOf('9');
                if(val1>=0)
                    elem.options[9].selected = true;
            
                
                var output = document.getElementById('output_image');
                output.src = <?php echo "'".$_SESSION['imageid']."'"; ?>;
    //=======================================================================
                var $c = 0;
                var $noOfText = <?php echo $noOfAdd; ?>;
                var $skills12 = <?php echo "'".$skill1."'"; ?>;
                $c=1;
                var $skillArray = $skills12.split("!");
                $t = 0;
                $t1=0;
                while($t < $skillArray.length) {
                    funcAdd();
                    $tmpvar = "";
                    $t1 = $t+1;
                    $tmpvar = "Tskill" + $t1.toString();
                    //alert($tmpvar);
                    document.getElementById($tmpvar).value = $skillArray[$t];
                    //alert($skillArray[$t]);
                    $t++;
                    

                }
                //separate string into array based on delimeter
                document.getElementById("fquoteid").value = "<?php echo $fquote1; ?>";
                
            }
     
     function funcformsubmit() {
         var elem = document.getElementById("formprofile1")
         elem.submit();
     }
     
     function funcAdd() {
         var mcount = 0;
         mcount = noOfText;
         mcount++;
         noOfText++;
         
         var input1 = document.createElement("input");
         input1.type = "text";
         input1.className = "text3";
         input1.id="Tskill" + mcount.toString();
         input1.name = "Tskill" + mcount.toString();
         container = document.getElementById("skill");
         container.appendChild(input1);
         document.getElementById("noOfAdd").value = noOfText;
       }
     
     function funcDel() {
         /*var element = document.getElementById("element-id");
         element.parentNode.removeChild(element);*/
         var elem = document.getElementById("Tskill" + noOfText.toString());
         elem.parentNode.removeChild(elem);
         noOfText--;
         document.getElementById("noOfAdd").value = noOfText;
         
         
     }
     
     
</script>
	</head>

<body onload = "funconload()">
	<div class="topmargin">
    </div>
    
    <div class="row">
    <div class="col-md-12">
    <div class="logo">
        
        
    </div>    
    </div>
       
    </div>
    <div class="goldenbrown">
    <div class="row"> 
        <div class="col-md-3" style ="margin-left:50px; margin-top:150px;">
            <form name="imageupload" method = "post" enctype = "multipart/form-data" action = "uploads.php">
            <div id="picture">
                <input type="file" name="fileToUpload" onchange="preview_image(event)">
                <div id="picture1">
                    <img src="<?php echo $_SESSION['imageid']; ?>" alt="image" style="width:100px; height:100px" id="output_image">
                </div>

            </div>
                <button type = "submit" value="submit">Upload to Server</button>
            </form>
            <br>
            <a href="dashboard.php">Return to Main Page</a>
        </div>    
        <div class="col">
            <div class="lform" >
                <p class="text-center">Please Enter Your Profile Details</p>
                <hr>
                    <label class="label1">Email Id:</label>
                    <input type="text" class="text1" name="email1" value="<?php echo $emailid;?>" readonly>
                    <br>
                    <label class="label1">User Name:</label>
                    <input type="text" class="text1" name="name1" value="<?php echo $name; ?>" readonly>
                    <br>
                <hr>
                <div id="forme"></div>
                <form method="post" action="profilep.php" name="formprofile" id="formprofile1" data-parsley-validate>
                    <label class="label1">Profile Id:</label>
                    <input type="text" class="text1" name="mainid" value="<?php echo $idmain; ?>" readonly>
                    <br>
                    <label class="label1">First Name:</label>  
                    <input type="text" class="text1" name="fname1" value="<?php echo $fname1; ?>" data-parsley-required>
                    <br>
                    <label class="label1">Last Name:</label>
                    <input type="text" class="text1" name="lname1" value="<?php echo $lname1; ?>" data-parsley-required>
                    <br>
                    <label class="label1">Gender</label>  
                    <select name="gender1" size="1" class="text1" data-parsley-gender>
                        <option value = "0" <?php if($gender1==0) echo 'selected'; ?>>--Select--</option>
                        <option value = "1" <?php if($gender1==1) echo 'selected'; ?>>Male</option>
                        <option value = "2" <?php if($gender1==2) echo 'selected'; ?>>Female</option>
                        
                    </select>
                    
                    <input type="text" id="noOfAdd" name = "noOfAdd" style="display:none;">
                    <!--style="display:none"-->
                    <br>    
                    <label class="label1">Phone No:</label>  
                    <input type="text" class="text1" name="phone1" value="<?php echo $phone1; ?>">
                    <br>
                    <label class="label1">Birth Date:</label>  
                    <input type="date" class="text1" name="birthdate1" required value="<?php echo $bdate1; ?>">
                    <br>
                    <label class="label1">Maritial Status:</label>  
                    <select name="mstatus1" size="1" class="text1" data-parsley-mstatus>
                        <option value = "0" <?php if($mstatus1==0) echo 'selected'; ?>>--Select--</option>
                        <option value = "1" <?php if($mstatus1==1) echo 'selected'; ?>>Unmarried</option>
                        <option value = "2" <?php if($mstatus1==2) echo 'selected'; ?>>Married</option>
                        <option value = "3" <?php if($mstatus1==3) echo 'selected'; ?>>Divorced</option>
                    </select>
                    <br>

<!--                <input type="text" class="text1" name="mstatus1" value="--><?php //echo $mstatus1; ?><!--">-->
                    <label class="label1">Hobbies</label>
                    <select name="hobbies1[]" size="3" multiple="multiple"  class="text1" id="hobbies11" data-parsley-required data-parsley-mincheck = "3">
                        <option value = "0">Reading</option>
                        <option value = "1">Watching TV</option>
                        <option value = "2">Listening Music</option>
                        <option value = "3">Travelling</option>
                        <option value = "4">Playing Video Games</option>
                        <option value = "5">Internet Surfing</option>
                        <option value = "6">Playing Ping Pong</option>
                        <option value = "7">Cycling</option>
                        <option value = "8">Swimming</option>
                        <option value = "9">Visiting Country Side</option>
                    </select>

<!--                    <input type="text" class="text1" name="hobbies1" value="--><?php //echo $hobbies1; ?><!--">-->
                    <br>
                    
                    <label class="label1">Highest Qualification:</label>
                    <select name="qual1" size="1" data-parsley-qual >
                        <option value = "0" <?php if($qual1==0) echo 'selected'; ?>>--Select--</option>
                        <option value = "1" <?php if($qual1==1) echo 'selected'; ?>>Doctorate</option>
                        <option value = "2" <?php if($qual1==2) echo 'selected'; ?>>Post Graduate</option>
                        <option value = "3" <?php if($qual1==3) echo 'selected'; ?>>Graduate (BSc,BA,BCom)</option>
                        <option value = "4" <?php if($qual1==4) echo 'selected'; ?>>Graduate (BE, BTech)</option>
                        <option value = "5" <?php if($qual1==5) echo 'selected'; ?>>12th Pass</option>
                        <option value = "6" <?php if($qual1==6) echo 'selected'; ?>>10th Pass</option>

                    </select>
                    <br>    
                    <!--                    <input type="text" class="text1" name="qual1" value="--><?php //echo $qual1; ?><!--">-->
                    <label class="label1">Favourite Quote</label>
                    <textarea name="fquote1" rows="2" cols = "20" class="text1" id= "fquoteid"  data-parsley-required data-parsley-length ="[20,100]"> </textarea>
                                                                                             
<!--                    <input type="text" class="text1" name="fquote1" value="--><?php //echo $fquote1; ?><!--">-->
                    <br>
                    <div id = "skill">
                    <label style="font-weight:bold">Skills</label>
                    <button type = "button" onclick = "funcAdd()">Add</button>
                    <button type = "button" onclick = "funcDel()">Del  .</button>    
                    
                    <!--input type="text" class="text3" name="skill1" value="<?php echo $skill1; ?>"-->
                    </div>
                    <br>
                    <button value="submit"  name="submit" class="text-center">Save Changes (Note for saving profile pic you need to use upload button)</button>
                    
                </form>
                
                

                <!--<a href="changepwd.html" style="color:burlywood" class="label1">Change Password</a>-->
            </div> 
        </div>
        <div class="col-md-1">
        </div>
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

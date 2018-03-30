
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
$noOfAdd= "";
$hobbiesstr="";
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
    $skill2 = str_replace('!',', ', $skill1);
    //echo "<h3>" . $skill2 . "<h3>";
    
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

                
                //alert("in function load");
                
                
                var output = document.getElementById('output_image');
                output.src = <?php echo "'".$_SESSION['imageid']."'"; ?>;
    //=======================================================================
            /*    var $c = 0;
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
              */  
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
     
     function funceditprofile() {
         window.location = 'profile.php';
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
    <div class="goldenbrown1">
    <div class="row"> 
        <div class="col-md-2" style ="margin-left:20px; margin-top:10px;">
            <form name="imageupload" method = "post" enctype = "multipart/form-data" action = "uploads.php">
            <div id="picture">
                
                <div id="picture1" style="margin-top:100px;">
                    <img src="" alt="image" style="width:200px; height:200px; border-radius:50%;" id="output_image">

                </div>

            </div>
            <div class="temp" style="margin-top:100px">
            <button type = "button" class = "btn btn-info" onclick = "funceditprofile()">Edit Profile</button>
            </div>    
            </form>
            <br>
            <a href="dashboard.php">Return to Main Page</a>
            
        </div>    
        <div class="col-md-9">
            <div class="lform">
                <hr>
                    <label class="label1">Email Id:</label>
                    <label class="text1v"><?php echo $emailid;?></label>
                    
                    <label class="label2">User Name:</label>
                    <label class="text1v"><?php echo $name;?></label>
                    
                <hr>
                    <label class="label1">Profile Id:</label>
                    <label class="text1v"><?php echo $idmain; ?></label>
                    
                    <br>
                    <label class="label1">First Name:</label> 
                    <label class="text1v"><?php echo $fname1; ?></label>
                    <label class="label2">Last Name:</label>
                    <label class="text1v"><?php echo $lname1; ?></label>
                    
                    <br>
                    <label class="label1">Gender</label>
                    <?php
                        $mtext = "";
                        if($gender1 == 0)
                            $mtext = "Not Selected";
                        elseif($gender1 == 1)
                            $mtext = "Male";
                        else
                            $mtext = "Female";
                    ?>
                    <label class="text1v"><?php echo $mtext; ?></label>
                
                
                    <?php
                       
                    if(strlen($hobbies1)>0)    
                    {    
                        $hobbiesA = explode(",",$hobbies1);
                        //print_r (explode(",",$hobbies1));
                        $hobbiestemp = "";
                        $c = 0;
                        $len = sizeof($hobbiesA);
                        //echo "<h1>" . $len . "</h1>";
                        $firstelement = 0;
                        while($c<$len) {
                            $c1 = (int)$hobbiesA[$c];
                            //echo "<h1> C1" . $c1 . "</h1>";
                            switch($c1) {
                                case 0 :
                                  $hobbiestemp = "Reading";
                                  break;
                                case 1 :
                                  $hobbiestemp = "Watching TV";
                                    break;
                            case 2 :
                                $hobbiestemp = "Listening Music";
                                    break;
                            case 3 :
                                $hobbiestemp = "Travelling";
                                    break;
                            case 4 :
                                $hobbiestemp = "Playing Video Games";
                                    break;
                            case 5 :
                                $hobbiestemp = "Internet Surfing";
                                    break;
                            case 6 :
                                $hobbiestemp = "Playing Ping Pong";
                                    break;
                            case 7 :
                                $hobbiestemp = "Cycling";
                                    break;
                            case 8 :
                                $hobbiestemp = "Swimming";
                                    break;
                            case 9 :
                                $hobbiestemp = "Visiting Country Side";
                                    break;
                            default :
                                $hobbiestemp =  "N";
                            
                        }
                            if($firstelement == 0){
                                $hobbiesstr = $hobbiestemp;
                                $firstelement = 1; }
                            else
                                $hobbiesstr = $hobbiesstr . " , " . $hobbiestemp;
                            
                            //echo "<span>" . $hobbiesstr . "</span>";
                            $c++;
                        }
                    }
                        
                    ?>
                <label class="label2">Hobbies</label>        
                <label class="text1v"><?php echo $hobbiesstr; ?></label>

<!--                    <input type="text" class="text1" name="hobbies1" value="--><?php //echo $hobbies1; ?><!--">-->
                    <br>
                    <label class="label1">Highest Qualification:</label>
                    <?php
                      $mtext = "";
                      switch ((int)$qual1) {
                          case 0:
                              $mtext = "Not Selected";
                              break;
                          case 1:
                              $mtext = "Doctorate";
                              break;
                          case 2:
                              $mtext = "Post Graduate";
                              break;
                          case 3:
                              $mtext = "Graduate (BSc,BA,BCom)";
                              break;
                          case 4:
                              $mtext = "Graduate (BE, BTech)";
                              break;      
                          case 5:
                              $mtext = "12th Pass";
                              break;
                          case 6:
                              $mtext = "10th Pass";
                              break;
                          default:
                              $mtext = ".";
                      }  
                    ?>
                    
                    <label class="text1v"><?php echo $mtext; ?></label>
                    
                    <label class="label2">Favourite Quote</label>
                    <label class="text1v"><?php echo $fquote1; ?></label>
                    <br>
                    <label class="label1">Skills</label>
                    
                    <label class="text1v1"><?php echo $skill2; ?></label>
                      
                    
                    <!--input type="text" class="text3" name="skill1" value="<?php echo $skill1; ?>"-->
                    </div>
                    
                    
                
                
                

                <!--<a href="changepwd.html" style="color:burlywood" class="label1">Change Password</a>-->
            </div> 
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

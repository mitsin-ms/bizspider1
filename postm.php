
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


$id = 0;
$id = $_GET['q'];

$sql = "SELECT * FROM posts where id = $id";
$records = $conn->query($sql);

foreach ($records as $row) {
    $mcount++;
}

$mid = $row[0];
$mcustid = $row[1];
$mtitle = $row[2];
$mdescription = $row[3];
$mimageurl = $row[4];
$mdatetime = $row[5];

//echo var_dump($row);
//
//echo "<hr>";
//echo $mid;
//echo "<br>";
//echo $mcustid;
//echo "<br>";
//echo $mtitle;
//echo "<br>";
//echo $mdescription;
//echo "<br>";
//echo $mimageurl;
//echo "<br>";
//echo $mdatetile;
//echo "<hr>";
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
        <link rel = "stylesheet" href="css/postn.css" type="text/css">
 <script>
     
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
    <h3 class="text-center">Enter Your Posts Below</h3>    
    <div class="row"> 
        <div class="col-md-3" style ="margin-left:50px; margin-top:150px;">
            <br>
        <a style="margin-top:100px;" href="dashboard.php">Return to Main Page</a>

        </div>    
        <div class="col-md-4">
            <div class="lform" >
                <div id="forme"></div>
                <form method="post" action="postmp.php" enctype = "multipart/form-data" name="formprofile" id="formprofile1" data-parsley-validate>
                    <input style = 'display:none;' type = "text" name="postid" value = "<?php echo $id; ?>" readonly style = "display:block;">
                    <!--style="display:none;"-->
                    <input style = 'display:none;' value = <?php echo "'" . $mimageurl . "'" ; ?> type = "text" name="oldimageurl" style = "display:block;">
                    
                    <div class="form-group">
                    <label for="Title">Title :</label>
                    <input type="text"  class="form-control" id="title1" name="title1" value = <?php echo "'".$mtitle ."'" ?> data-parsley-required>
                    </div>
                    <br>
                
                    <label for="description">Description</label>
                    <br>    
                    <textarea name = "description" rows= '4' cols = '55' id ="description" data-parsley-required><?php echo $mdescription ?></textarea>
                    <br>
                    <label for="image1">Please select image for the post</label>
                    <input type="file" name="fileToUpload" onchange="preview_image(event)">
                    <div id="picture1">
                    <img alt="image" src = <?php echo $mimageurl ?> style="width:100px; height:100px" id="output_image">
                    </div>

                    
                    <button type="submit" name ="submit" id = "submit1" class="btn btn-primary">Submit</button>
                    
                    
                    
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
    
    
</body>
</html>

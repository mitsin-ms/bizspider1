
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";


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


$sql = "SELECT * FROM posts where custid = " . "" . $idmain ."";
//print_r($sql);
$c=0;
$records = $conn->query($sql);
$mcount = 0;

foreach ($records as $row) {
    $mcount++;
    //echo "<p>$row[4]</p>";
}

//print_r($row);
//die();
//echo "<br>total no of rows in for each" . $mcount;
//echo "no of posts = $mcount";
//die();

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
        <link rel = "stylesheet" href="css/postv.css" type="text/css">
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

<body >

    <div class="topmargin">
    </div>
    
    <div class="row">
    <div class="col-md-12">
    <div class="logo">
        
        
    </div>    
    </div>
       
    </div>
    
    
    <div class="row">
    <div class="col-md-12">
        <h4 class="text-center">View Your Posts</h4>   
    </div>
    
    
    </div>
    <div class="fcolor">
    <div class="row">
        
    <div class="col-md-3" style="margin-left:20px; padding-top:40px;">
          <br>
            <iframe src="https://calendar.google.com/calendar/embed?height=200&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=54sq77i64ni1g9ahdcgpcn5ua4%40group.calendar.google.com&amp;color=%23691426&amp;ctz=Asia%2FCalcutta" style="border-width:0" width="300" height="200" frameborder="0" scrolling="no"></iframe>
        <a style="margin-top:100px;" href="dashboard.php">Return to Main Page</a>
    </div>    
        
    <div class="col-md-5">
        <?php
                $c=0;
                
                $sql = "SELECT * FROM posts where custid = " . "" . $idmain ."" . " ORDER BY datetime DESC";
                    //print_r($sql);
                    $c=0;
                    $records = $conn->query($sql);
                    $mcount = 0;

                    foreach ($records as $row) {
                    echo "<hr>";
                    echo "<img style = 'width:100px; height:100px' src = $row[4]>";
                    
                    echo "<a href='postm.php?q=$row[0]' style='margin-left:250px;'>Modify/Delete Post</a>";
                    echo "<br>";
                    echo "<div>";
                    echo "<h3> Title : $row[2] </h3>";
                    echo "<p>  Message : $row[3]";
                    echo "<p>  Posted On : $row[5]";
                    echo "<span>  Total Likes : $row[6] </span>";
                    echo "</div>";
                    echo "<hr>";
                 $c = $c+1;     
                        
                    }

                
                ?>
    
    </div>
        
        
    <div class="col-md-3" style="padding-top:40px;">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBizSpider-2105292139755571%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        
        
        <br>
        <br>
        <a class="twitter-timeline" data-width="220" data-height="200" href="https://twitter.com/sinhamitesh5?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> 
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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

    
    
    
//    while($c < $mcount) {    
//                echo "<h1> Hello1 </h1>";
//                $row = $records->fetch(PDO::FETCH_ASSOC);
//                print_r($row);
//                while ($row = $records->fetch(PDO::FETCH_ASSOC)) {
//                 echo "<hr>";
//                 echo "<img style = 'width:100px; height:100px' src = $row[4]>";
//                 echo "<br>";
//                 echo "<div>";
//                 echo "<h3> $row[2] </h3>";
//                 echo "<p>  $row3]";
//                 
//                 echo "<hr>";
//                 $c = $c+1;
//                     
//                 }

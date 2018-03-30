<?php
session_start([
    'cookie_lifetime' => 86400,
    'read_and_close'  => true,
]);
if (!isset($_SESSION['username'])) {
// echo "<script> alert('in index.php session set'); </script>";   
   echo "<script>window.location = 'index.php' </script>";
}
else
{
   // echo "in index.php session not set";
   // echo "<script>window.location = 'index.php' </script>";
}

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

$sql = "";


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
$custid = $row['id'];
$postid = 0;
?>

<!--==========================================================================================-->

<!Doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel = "stylesheet" href="css/dashboard.css" type="text/css">

    <script>
    function funcexit1() {
        
        alert ("Bye Bye..");
        window.location="login.php";
    
    }       
        
    </script>    
    
	</head>
    //body onload = "funcookie();"
	<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/logo1.png"  alt=""> <!--width="250" height="60"-->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto"  id="morespaceinnavbar">
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <span class="sr-only"></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav1" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav1" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav1" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav1" href="#"></a>
            </li>  
            <li class="nav-item">
              <a class="nav-link nav1" href="#"></a>
            </li>  
            <li class="nav-item">
              <a class="nav-link nav1" href="#"></a>
            </li>  
            <li class="nav-item">
              <a class="nav-link nav1" data-toggle="modal"  href="#ModalLoginForm"></a>
            </li>    
            <li class="nav-item">
              <a class="nav-link nav1" href="login.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav1" href="signup.html"></a>
            </li>  
            <!--<a data-toggle="modal" href="#myModal" class="button">Launch myModal Window</a>-->  
              <li class="dropdown">
                <a class="dropdown-toggle nav-link nav1" data-toggle="dropdown" href="#" style = "font-size:24px;">Menu
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="profilev.php">View Profile</a></li>    
                  <li><a  href="changepwd.php">Change Password</a></li>
                  <li><a href="postn.php">Enter Posts</a></li>
                  <li><a href="postv.php">View Posts</a></li>    
                  <li><a  href="#" onclick = "funcexit1()"><?php echo "Logout(" . $_SESSION['username'] .")";?></a></li>
                  <li><a  href="#"></a></li>
                </ul>
            </li>
            <a class="navbar-brand" href="#">
              <img id = "img1id" src=<?php echo $_SESSION['imageid']; ?>  alt="" style="width:70px; height:70px; border-radius:50%; margin-left: 20px; text-align:center"> <!--width="250" height="60"-->
            </a>
              
          </ul>
        </div>
      </div>
    </nav>
    <hr>
        
    <div>
        <!--SELECT posts.id, posts.custid, posts.title, posts.description, posts.imageurl, posts.datetime, posts.nooflikes, profile.firstname,profile.lastname, likes.likes FROM ((posts INNER JOIN profile ON posts.custid = profile.mainid) LEFT JOIN likes ON posts.id = likes.postid)  -->  
        <div class="row pagecolor">
            <div class="col-md-3">
                <div class="dashmargintop">
                <p> .</p>
                </div>
                <iframe src="https://calendar.google.com/calendar/embed?height=200&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=54sq77i64ni1g9ahdcgpcn5ua4%40group.calendar.google.com&amp;color=%23691426&amp;ctz=Asia%2FCalcutta" style="border-width:0" width="300" height="200" frameborder="0" scrolling="no"></iframe>    
            </div>

            <div class="col-md-6">
                <div class="dashmargintop">
                <p> .</p>
                </div>
                <?php
                    $sql = "SELECT posts.id, posts.custid, posts.title, posts.description, posts.imageurl, posts.datetime, posts.nooflikes, profile.firstname,profile.lastname, likes.liked FROM ((posts INNER JOIN profile ON posts.custid = profile.mainid) LEFT JOIN likes ON (posts.id = likes.postid AND likes.custid = $custid)) order by posts.datetime DESC";
                
                    $record = $conn->query($sql);

//                var_dump($record);
//                //die();
                    $idbtn = "";
                    $idpost = "";
                    $c =0;
                foreach($record as $row) {
                    
                    echo "<div class='post'>";
                    
                    echo "<div class='text-center'>";
                    echo "<img class='pimage' style = 'width:300px; height:200px; text-align:center' src = $row[4]>";
                    echo "</div>";
                    //echo "<a href='postm.php?q=$row[0]' style='margin-left:250px;'>Modify/Delete Post</a>";
                    echo "<br>";
                    echo "<div>";
                    echo "<h3> Title : $row[2] </h3>";
                    echo "<p>  Message : $row[3]";
                    echo "<p>  Posted By : ".trim($row[7]) . ' ' . trim($row[8]) . ' on ' . trim($row[5]) ."</p>";
                    $idbtn = "btn" . trim((string)$c);
                    $idtotlikes = "like" . trim((string)$c);
                    
                    if($row[9]==1) {
                    echo "<button type='button' id=$idbtn value = " . $row[0] . " onclick = 'reply_click(this.id)'>Liked</button>";
                    echo "<span style = 'display:none;' id = " . 'LN' . $idbtn . ">" . '0' . "</span>";
                    echo "<span style = 'display:none;' id = " . 'LO' . $idbtn . ">" . '1' . "</span>";    
                    }
                    else {
                    echo "<button type='button' id=$idbtn value = " . $row[0] . " onclick = 'reply_click(this.id)'>like</button>";
                    echo "<span style = 'display:none;' id = " . 'LN' . $idbtn . ">" . '1' . "</span>";
                    echo "<span style = 'display:none;' id = " . 'LO' . $idbtn . ">" . '0' . "</span>";    
                    }
                    
                    echo "<span>   Total Likes:  </span>";
                    echo "<span id= ". 'TL' . $idbtn . ">$row[6]</span>";
                    echo "</div>";
                    
                    $c = $c+1;  
                    echo "</div>";
                    
                }
                
                    
                
                
                
                ?>

            </div>

            <div class="col-md-3">
                <div class="dashmargintop">
                <p> .</p>
                </div>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBizSpider-2105292139755571%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        
        
                <br>
                <br>
                <a class="twitter-timeline" data-width="220" data-height="200" href="https://twitter.com/sinhamitesh5?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> 
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

            </div>

        </div>    
    </div>

        
        
<script>
    
function reply_click(clicked_id) {
    temp = '';
    totliked = 0;
    nliked = '';
    oliked = '';    
    custid = '';
    custid = <?php echo $custid; ?>;    
    temp = document.getElementById(clicked_id).value;
    nliked = document.getElementById('LN' + clicked_id).textContent;
    oliked = document.getElementById('LO' + clicked_id).textContent;    
    totliked = document.getElementById('TL' + clicked_id).textContent;
        
        
    //alert("clicked id" + clicked_id + " Text:" + nliked + " Value:" + temp + " Cust id:" + custid + " NLiked :" + nliked + " Oliked :" + oliked);

    ajaxlike(clicked_id,temp,custid,nliked,oliked);
    
    if(oliked == 0)
        {
        nliked = '0';
        oliked = '1';    
        totliked = Number(totliked) + 1;
        }   
    else
        {
        nliked = '1';
        oliked = '0';    
        totliked = Number(totliked) - 1;
        }
            
            
        document.getElementById('LN' + clicked_id).innerHTML =  nliked;
        document.getElementById('LO' + clicked_id).innerHTML =  oliked;    
        document.getElementById('TL' + clicked_id).innerHTML =  totliked.toString();
        el = document.getElementById(clicked_id);
        //el.firstChild.data = "Test";
        
        if(nliked=='0')
                el.firstChild.data = "Liked";
        else
                el.firstChild.data = "Like"
                
}    
    
    
function ajaxlike(clicked_id,postid,custid,nliked,oliked) {
    //alert(postid + ' ' + custid + ' ' + nliked + ' ' + oliked);
    
    //alert("in ajax submit");

    var xhttp = new XMLHttpRequest;
    xhttp.onreadystatechange = function() {
         if(this.readyState == 4 && this.status == 200) {
             //alert(this.responseText);
             
         }
    };
    

    xhttp.open("POST", "likeposta.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    var text = "";
    text = "postid="+postid+"&custid="+custid+"&nliked=" + nliked+"&oliked=" + oliked;
    xhttp.send(text);    
    
    
    
    

}    
    
    
</script>        
</body>
</html>


<!--function reply_click(clicked_id) 
    {
    temp = '';
    nliked = '';
    oliked = '';    
    custid = '';
    custid = <?php echo $custid; ?>;    
    temp = document.getElementById(clicked_id).value;
    nliked = document.getElementById('LN' + clicked_id).textContent;
    oliked = document.getElementById('LO' + clicked_id).textContent;    
    
        
        
    alert("clicked id" + clicked_id + " Text:" + nliked + " Value:" + temp + " Cust id:" + custid + " NLiked :" + nliked + " Oliked :" + oliked);
        
        
    //ajaxlike(clicked_id,temp,custid,nliked,oliked);
    
    document.getElementById('LN'+clicked_id).innerHTML = "A";
    document.getElementById('LO'+clicked_id).innerHTML = "B";    
    document.getElementById("clicked_id").innerHTML="Test";    

        
    
    if(oliked == 1)
        nliked = 0;
    else
        nliked = 1;
    
        document.getElementById('LN' + clicked_id).innerHTML =  nliked;
        document.getElementById('LO' + clicked_id).innerHTML =  oliked;    
      
        
        if(nliked==1) { 
              //  document.getElementById("clicked_id").childNodes[0].innerText="Liked";
                
               }
             else
                // document.getElementById("clicked_id").childNodes[0].innerText="Like";
            
    
    
document.getElementById('LN'+clicked_id).innerHTML = "A";
    document.getElementById('LO'+clicked_id).innerHTML = "B";    
    el = document.getElementById(clicked_id);
    el.firstChild.data = "Test";
        
    
}-->        

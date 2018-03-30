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
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
$hobbies1 = "";
$c = 0;
if(isset($_POST['hobbies1'])) {
foreach($_POST['hobbies1'] as $value){
    if($c == 0) {
        $hobbies1 = $value;
        $c++;
    }
    else {
    $hobbies1 = $hobbies1 . "," . $value;
    }
}
}
//echo "<h1>" . $hobbies1 ."</h1>"; 
//echo "<h1>" ."date is:". $_POST['birthdate1'];

echo "<h1>" . $_POST['fquote1'] . "</h1>";


//$sql = "SELECT * FROM profile where mainid=" . "'" . $_POST["mainid] ."'";
//print_r($sql);
//$records = $conn->query($sql);
//$mcount = 0;
$skills = "";
$noOfAdd = $_POST['noOfAdd'];

//echo "<h1> NO OF ADD" . $noOfAdd . "</h1>";

$c = 1;
$c1 = "";
$subscrpt = "";
//echo "tskills";
//echo $_POST['Tskill1'] . $_POST['Tskill2'] . $_POST['Tskill3'] .$_POST['Tskill4'];

while($c<=$noOfAdd) {
    $c1 = (string)$c;
    $subscrpt = "Tskill".trim($c1);
    
    if($c==1)
        $skills = $_POST[$subscrpt];
    else
        $skills = $skills . '!' . $_POST[$subscrpt];
    $c++;
    //echo "<p>" . $subscrpt . "and</p>";
    //echo "<span>" . $skills . "</span>";
}



$sql = "UPDATE profile SET firstname = " . "'" . $_POST['fname1'] . "',
                           gender    = " . "'" . $_POST['gender1'] . "',   
                           lastname  = " . "'" . $_POST['lname1'] . "',
                           phoneno   = " . "'" . $_POST['phone1'] . "',
                           dob       = " . "'" . $_POST['birthdate1'] . "',
                           hobbies   = " . "'" . $hobbies1 . "',
                           fav_quote = " . "'" . $_POST['fquote1'] . "',
                           married   = " . "'" . $_POST['mstatus1'] . "',
                       qualification = " . "'" . $_POST['qual1'] . "',
                           noofadd   = " . "'" . $_POST['noOfAdd'] . "',    
                           skills    = " . "'" . $skills ."' WHERE mainid = '".$_POST['mainid'] ."'";

//$sql = "UPDATE profile SET firstname = " . "'" . $_POST['fname1'] . "' WHERE mainid = '".$_POST['mainid'] . "'";

print_r($sql);

//    $fname1 = $row['firstname'];
//    $lname1 = $row['lastname'];
//    $phone1 = $row['phoneno'];
//    $bdate1 = $row['dob'];
//    $hobbies1 = $row['hobbies'];
//    $fquote1 = $row['fav_quote'];
//    $mstatus1 = $row['married'];
//    $skills1 = $row['skills'];
//    $qual1 = $row['qualification'];
//    $skill1= $row['skills'];



if($conn->query($sql))
{
echo "<script> alert('Record saved')</script>";
}
else
{
echo "<script> alert('Record not saved')</script>";
}

echo "<script>window.location = 'profile.php'</script>";



?>


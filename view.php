<?php
session_start();

echo'<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">';
echo'  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Roboto&display=swap" rel="stylesheet">';
echo'<div class="container jumbotron" style="margin-top:25px;font-family:poppins;font-size:0.9rem;">';
require 'engine/configure.php';




 $key = "987654";





if (isset($_GET['id'])) {
$id = $_GET['id'];
}
$id = $_GET['id'];
?>

<?php
	require 'engine/configure.php';
if (isset($_GET['user_type']) && !empty($_GET['user_type'])) {
$user_type = $_GET['user_type'];
if ($user_type=='buyer') {
$getuser = mysqli_query($conn,"select * from user_profile where id = '".htmlspecialchars($id)."'");
if ($getuser) {
echo "<h6><b style='color:skyblue;font-size:21px;'>Buyer</b></h6>";
echo "<hr>";
while ($row = mysqli_fetch_array($getuser)) {
echo"<b >ID:</b> ".$row['id'] * $key ."<br>";           
echo"<b>Name:</b> ".$row['user_name']."<br>";
echo"<b>Email:</b> ".$row['user_email']."<br>";
echo"<b>Phone:</b> ".$row['user_phone']."<br>";
echo"<b>Joined date</b> ".$row['joined_date']."<br>";
$verified=$row['verified'];
if ($verified>0) {
	echo"Verified";
}
else{

	echo "This user not verified";
} }  } } } ?>






<?php 
	require 'engine/configure.php';

if (isset($_GET['id'])) {
$id = $_GET['id'];
}
$id = $_GET['id'];

if (isset($_GET['user_type']) && !empty($_GET['user_type'])) {
$user_type = $_GET['user_type'];
if ($user_type=='vendor') {
$getuser = mysqli_query($conn,"select * from vendor_profile where id = '".htmlspecialchars($id)."'");
if ($getuser) {

echo "<h6 style='color:skyblue;font-size:21px;'><b>Vendors</b></h6>";
echo"<hr>";
while ($row = mysqli_fetch_array($getuser)) {
echo"<b>ID:</b> ".$row['id'] * $key."<br>";   
echo"<b>Business name:</b> ".$row['business_name']."<br>";
echo"<b>Business email:</b> ".$row['business_email']."<br>";
echo"<b>Business contact:</b> ".$row['business_contact']."<br>";
echo"<b>Business address:</b> ".$row['business_address']."<br>";
echo"<b>Company description:</b> ".$row['company_description']."<br>";
echo"<b>Joined date</b> ".$date=$row['date']."<br>";
$business_verified=$row['verified'];
if ($business_verified>0) {
	echo"Verified";
}
else{

	echo "This user not verified";
} } } } } 

 ?>





<?php 

if (isset($_GET['id'])) {
$id = $_GET['id'];
}
$id = $_GET['id'];
require 'engine/configure.php';
if (isset($_GET['user_type']) && !empty($_GET['user_type'])) {
$user_type = $_GET['user_type'];
if ($user_type=='service_provider') {
$getuser = mysqli_query($conn,"select * from service_providers where sp_id = '".htmlspecialchars($id)."'");
if ($getuser) {

echo "<h6><b style='color:skyblue;font-size:21px;'>Service providers</b></h6>";
echo"<hr>";

while ($row = mysqli_fetch_array($getuser)) {
echo"<b>ID:</b>".$row['sp_id'] * $key."<br>";           
echo"<b>Name</b>: ".$row['sp_name']."<br>";
echo"<b>Email</b>: ".$row['sp_email']."<br>";
echo"<b>Experience</b>: ".$row['sp_experience']."<br>";
echo"<b>Address</b>: ".$row['sp_location']."<br>";
echo"<b>Bio</b>: ".$row['sp_bio']."<br>";
echo"<b>Phone number</b>: ".$row['sp_phonenumber1']."<br>";
echo"<b>Phone number II</b>: ".$row['sp_phonenumber2']."<br>";
echo"<b>Price:</b> ".$row['pricing']."<br>";
echo"<b>Joined on</b> ".$row['date']."<br>";
$sp_verified=$row['sp_verified'];
if ($sp_verified>0) {
echo "<b>Verify:</b>&nbsp; verified<br>";
}

else{
echo "<b>Verify: </b>&nbsp;This user not verified<br>";
} 

$e_verified=$row['e-verify'];

if ($e_verified>0) {
echo "<b>E-Verify:</b>&nbsp; E-verified<br>";
}

else{
echo "<b>E-Verify:</b>&nbsp;This user has not been verified by essential";
} 






} } } } ?>

</div>



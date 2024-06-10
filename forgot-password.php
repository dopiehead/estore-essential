



<!DOCTYPE html>
<html>
<head>
	<title>E-stores | Login page </title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/flickity.min.css">
  <script src="assets/js/sweetalert.min.js"></script> 
  <script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/flickity.pkgd.min.js"></script>
<style type="text/css">

body{

	font-family: poppins;

}


#alert-danger{
color: red;
	font-size:13px;

	margin-top: 30px;
	animation: fade 3s forwards;

animation-delay:1s;
	
}




#alert-success{

    color: green;
	font-size:13px;

	margin-top: 30px;
	animation: fade 3s forwards;

    animation-delay:1s;
	
}





@keyframes fade{


0%{

	opacity: 1;
}


100%{

	opacity: 0;
}

}



/*--------------------------------------------------------------
# menu navbar
--------------------------------------------------------------*/




.menu #thinking{

text-align: center;
margin-top: -40px;
font-size: 13px;


}

.nav_signup{


font-size: 13px;

color: black;

}


.nav_login{


font-size: 13px;

color: white !important;

background-color: skyblue;

padding: 5px;


}





.nav_signup{


border:1px solid none;
border-left:1px solid white;
border-left-color: rgba(192,192,192,1);
padding-left:8px;

}

.menu {

position: relative;
padding: 0px 10px;
width: 100%;
}



/*--------------------------------------------------------------
# footer
--------------------------------------------------------------*/

.footer h6{

  font-weight: bold;

  font-size: 16px;

  margin-bottom: 10px;
}


.footer p{

  font-size: 12px;
}


.footer{
  padding: 10px 20px;

  background-color: rgba(192,192,192,0.5);
}


.footer img{

width: 140px;

}

.footer button{

  font-size: 13px;

  border:1px solid transparent;

  background-color: rgba(0,0,0,0.6);

  color: white;

  margin-bottom: 8px;


}



/*--------------------------------------------------------------
# main
--------------------------------------------------------------*/
.wrap{
padding: 10px;
	}




/*--------------------------------------------------------------
# main
--------------------------------------------------------------*/

.main

{
	width:70%;
	padding: 10% 10%;
	border:1px solid transparent;
	box-shadow: 0px 0px 5px rgba(0,0,0,0.6);
	margin-top: 50px;



	margin-left: 0;

	margin-right: 0;

	margin: auto;
	

}


.main p{

	color:skyblue;
	font-weight: bold;
	font-size: 12px;
}


.main p span{

float: right;

}

.main input{

border:1px solid transparent;

box-shadow:0px 0px 3px rgba(0,0,0,0.3);

}


.main button{

font-size: 13px;


}

.main h6{

	text-align: center;
	font-weight: bold;
}





@media only screen and (max-width:767px){

	.main p{

	color:skyblue;
	font-weight: bold;
	font-size: 12px;
}



	.main small{

	text-align: center;
	font-size: 11px;
}

.main

{
	width:70%;
	padding: 10%;
	border:1px solid transparent;
	box-shadow: 0px 0px 5px rgba(0,0,0,0.6);
	margin-top: 40px;
	

}

.main h6{

	text-align: center;
}





}

</style>
</head>
<body>

	<div class="wrap">

<div class="menu">

<p> 

<a href="index.php" style="text-decoration: none;"><img style="" align="" src="assets/icons/logo_e_stores.png" height="" width=""></a>





<div id="thinking"><b style="text-align:">Think of it? Buy it now</b></div>



</div>


<br>

<div class="main">

	<h6 style="font-size: 14px !important;">Log In</h6>

	<div style="text-align: center">

	<small style="">Enter Your email to reset password</small>

</div>

<form method="post" action="">	

<select name="user_type" class="form-control">
     
     <option value="buyer">Buyer</option>
	<option value="vendor">Vendor</option>
	<option value="service provider">Service buyer</option>

</select>

<input style="font-size: 12px;" type="text" class="form-control" placeholder="Email" name="email"><br>



<button name="submit" class="btn btn-info form-control">Submit</button>

</form>

<?php 

require 'engine/configure.php';


if (isset($_POST['submit'])) {

     $user_type = mysqli_escape_string( $conn,$_POST['user_type']);
  
     $email = mysqli_escape_string( $conn,$_POST['email']);



    $vkey = md5(time().$email);



    if ($email == '') {echo"<span id = 'alert-danger'>Email field is required...</span>";

}


else{

if ($user_type=='buyer') {
$check = "select * from user_profile where user_email = '".$email."'";	
$we = mysqli_query($conn,$check);
while ($row = mysqli_fetch_array($we)) {
$_SESSION['email'] = $row['user_email'];
$find_email = $we->num_rows;
if ($find_email == 0) {
echo "<span id='alert-danger'>This email address does not exist</span>";

}
else{
$ins = "insert into forgotten values('','$email','$vkey')";
$us = mysqli_query($conn,$ins);
if ($us) {
echo "<span id='alert-success'>We have sent a link to<b style='color:red;'> ".$email."</b> </span>";
    }

}
}
}

if ($user_type=='vendor') {
$check = "select * from vendor_profile where business_email = '".$email."'";
$we = mysqli_query($conn,$check);
while ($row = mysqli_fetch_array($we)) {
$_SESSION['email'] = $row['business_email'];
$find_email = $we->num_rows;
if ($find_email == 0) {
echo "<span id='alert-danger'>This email address does not exist</span>";

}
else{
$ins = "insert into forgotten values('','$email','$vkey')";
$us = mysqli_query($conn,$ins);
if ($us) {
echo "<span id='alert-success'>We have sent a link to<b style='color:red;'> ".$email."</b> </span>";
    }

}
}	
}


if ($user_type=='service provider') {

$check = "select * from service_providers where sp_email = '".$email."'";
$we = mysqli_query($conn,$check);
while ($row = mysqli_fetch_array($we)) {
$_SESSION['email'] = $row['sp_email'];
$find_email = $we->num_rows;
if ($find_email == 0) {
echo "<span id='alert-danger'>This email address does not exist</span>";

}
else{
$ins = "insert into forgotten values('','$email','$vkey')";
$us = mysqli_query($conn,$ins);
if ($us) {
echo "<span id='alert-success'>We have sent a link to<b style='color:red;'> ".$email."</b> </span>";
    }

}
}
	
}




}

}


 ?>





</div>
</div>




<br>

<







<?php

include 'footer.php';


?>

</body>
</html>
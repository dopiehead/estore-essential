
<?php session_start();
 require 'engine/configure.php';  
if(isset($_POST["submit"]))   {  
if(!empty($_POST["search"]))   {  
$query = str_replace(" ", "+", mysqli_real_escape_string($conn,$_POST["search"]));
header("location:search-process.php?search=" .htmlspecialchars($query)); 
 }  
}  

 ?> 

<?php
if (isset($_GET['sp_id'])) {
require 'engine/configure.php';
$id = mysqli_escape_string($conn,$_GET['sp_id']);
$service_provider = mysqli_query($conn,"SELECT * from service_providers where sp_id ='$id'");
while ($row = mysqli_fetch_array($service_provider)) {
$id =  $row['sp_id'];
$image = $row['sp_img'];
$sp_speciality = $row['sp_speciality'];
$sp_name = $row['sp_name']; 
$sp_location = $row['sp_location'];
$sp_experience = $row['sp_experience']; 
$sp_bio = $row['sp_bio']; 
$sp_ratings = $row['ratings']; 
$sp_verified = $row['sp_verified'];
$sp_email = $row['sp_email'];
$sp_phone1 = $row['sp_phonenumber1'];
$sp_phone2 = $row['sp_phonenumber2'];
		
	}
	
}
?>


<?php 

if (!empty($_SESSION["id"])) {
$date = $_SESSION['date'];
$userId = $_SESSION['id'];
$username =$_SESSION['name'];
$useremail =$_SESSION['email'];
}
if (!empty($_SESSION["business_id"])) {
$business_date = $_SESSION['business_date'];
$userId = $_SESSION['business_id'];
$username =$_SESSION['business_name'];
$useremail =$_SESSION['business_email'];
}
if (!empty($_SESSION["sp_id"])) {
$sp_date = $_SESSION['sp_date'];
$userId = $_SESSION['sp_id'];
$username = $_SESSION['sp_name'];
$useremail = $_SESSION['sp_email'];

}




?>








<!DOCTYPE html>
<html>
<head>
	<title>E-stores | Service provider details </title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/flickity.min.css">
      <link rel="stylesheet" href="assets/css/overlay.css">
         <link rel="stylesheet" href="assets/css/btn_scroll.css">
           <link rel="stylesheet" href="assets/css/cart.css">
  <script src="assets/js/sweetalert.min.js"></script> 
  <script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/flickity.pkgd.min.js"></script>

<style type="text/css">

body{

	font-family: poppins;
}

.active-link{

	display: none;
}

.active-button{

display: none;

}

h1 img{

	margin-left: 10px;
}


#img img{

	height: 150px;

	width: 180px;

	margin-right: 20px;

}



@media only screen and (max-width:767px){

.nav_login{

margin-left:40px !important;
font-weight: normal !important;

}

}





.btn-drop{

	font-size: 13px;

	border:1px solid transparent;

	box-shadow: 0px 3px 8px 0px rgba(0,0,0,0.4);

	background-color: white;

	color:black;
}



.btn-drop:focus{

	outline:1px solid skyblue;
}

#think{
margin-left: 210px !important;

}

@media only screen and (max-width:797px){
#think{
margin-left: 30px !important;

}
}







.btn-success{

	color: white !important;
}


#add_photo{

	font-size: 0.8rem;

	
}


.fa-star{

	color:rgba(0,0,0,0.4);
}


.fa-plus{

  
  padding: 8px 14px;

  background-color: rgba(192,192,192,0.3);



}





#popup{
background-color: rgba(248,248,248,0.3);  
background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 350px;
padding:5px;
z-index: 99;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;

}

#popup.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }

#close{

font-size: 12px;
color:white;
cursor: pointer;



}



#close:hover, #close:focus{
opacity: 0.6;
border: none;
outline: none;
 outline: none;

}



#popup-comment{
background-color: rgba(248,248,248,0.3);  
background-color: rgba(248,248,248,0.3);  
position:fixed;
padding: 4px 8px !important;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 350px;
padding:5px;
z-index: 99;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;
text-align: center;
font-size: 13px !important;
font-family: poppins !important;

}



#popup.active,#popup-comment.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }

#close,#close-comment{

font-size: 12px;
position: absolute;
top: -6px;
left: 93%;
color:black;
cursor: pointer;
box-shadow: 0px 0px 5px rgba(0,0,0,0.5);
border-radius: 50%;
background-color: white;
z-index: 1;



}
#close:hover, #close:focus, #close-comment:hover,#close-comment:focus{
opacity: 0.6;
border: none;
outline: none;
 outline: none;

}


#popup input,#popup textarea,#popup-comment input,#popup-comment textarea{

border:1px solid transparent;

box-shadow: 0px 0px 4px rgba(0,0,0,0.2);

margin: 10px 0px;

font-size: 0.9rem !important;



}


#btn-comment{

	text-transform: capitalize;
	font-family: poppins;
	color: white;
	box-shadow:0px 5px 8px rgba(0,0,0,0.3);
	border-radius:3px;
}

.btn-comment:hover,.btn-comment:focus{

outline: 3px solid skyblue;

}


input[type=submit]{

font-size: 12px;
cursor: pointer;
margin-right: 10px;
text-transform: capitalize;

}


.nav_signup{


border:1px solid none;
border-left:1px solid white;
border-left-color: rgba(192,192,192,1);
margin-left:0px;

}



.nav_login{

margin-left:80px;

}



.col-md-8 img{


width: 450px;

height: 70%;



}



#share{

	height:14px;
	width: 15px;
}



.fa-cart-shopping{

font-size: 14px;


padding:3px;

}




.fa-check{

font-size: 15px;

color: white;

border:1px solid transparent;

border-radius: 50%;

background-color: green;

padding:2px 8px;

margin-left:-10px;

}


.housing_delivery .btn-info, .housing_delivery .btn-success{

font-size: 12px;

}


.review{

	margin-right: 25px;

	width: 50%;


}




.review p{

	font-size: 13px;

	
}



.btn-primary{

	font-size: 13px;

	
}



.sp_review .flickity-page-dots{

 
  display:none !important;

  
}

.btn-primary{

	margin-top: 20px;
}


#sp_name{

	text-transform: capitalize !important;
}





#product_image{
 width: 100%;
	
}


#product_image img{
 width: 100%;

 height: 25rem;
	
}

.main img{

	width: 230px;

	height:150px;
}

.main a{

	color:black;
	font-size: 13px;
}

#menu_sp{

	margin-right: 20px;
}




#opening_hours{

	background-color:rgba(192,192,192,0.3);padding:20px;font-size:13px;
}


.housing_delivery{

padding: 10px;



}

.housing_delivery p{

font-size: 13px;

}



.extensions ul{

list-style-type: none;



}

.extensions ul li a{

color: black;

font-size: 12px;

}


.extensions ul li{

display: inline-block;

margin:30px;


}




@media only screen and (max-width:767px){

.extensions ul li{

display: inline-block;

margin:15px;


}


}



.extensions .fa-check{


background-color: white;
color:black;

border-radius: 50%;

border:1px solid black;
padding:0px 4px;

}










.housing_delivery h6{

font-size: 14px;

}


.p_bio{


	font-size: 12px;
}

#home_verified{

	float: left;
	font-size: 8px;
	margin-top: -20px;
	
}

#verified{
	background-color: green;
	padding:0px 40px;
	border-radius: 20px;
}


#menu_sp{

	text-transform: capitalize;
}


#store{


text-align: center;

background: linear-gradient(to top right, skyblue, white,skyblue);

color: black;

padding:65px 30px;

margin-top: 30px;


}


#store h6{

font-weight: bold;

color:black;



}


#store p{


font-size: 13px;


}








.btn-store{

	color: skyblue;

	background-color: white;

	border:1px solid skyblue;
}



/*--------------------------------------------------------------
# navigation bar mobile
--------------------------------------------------------------*/

@media only screen and (max-width:1200px){

.button_navigation{


font-size:12px;

cursor: pointer;

color:black;

padding:5px 0px;

margin-right:10px !important;

font-weight: bold;

}


}


/*--------------------------------------------------------------
# navigation bar 
--------------------------------------------------------------*/


.button_navigation{

font-family:poppins;

float:left;

font-size:13px;

cursor: pointer;

color:black;

padding:8px 1px;

margin-right:32px;

font-weight: bold;

}

@media only screen and (max-width:1200px){

.button_navigation{

display: none;

}





}



@media only screen and (max-width:767px){

.open-btn{display: block !important;color: black !important; margin-left: 20px;}


}




.button_navigation:hover{

opacity: 0.8;

text-decoration: none;

color: white;

}


.nav-container{
	width: 100%;
	margin-top: 30px;
	/*display: flex;
	align-items: center;
	justify-content: space-between;*/	}


/*--------------------------------------------------------------
# anchor category
--------------------------------------------------------------*/

.category{

	margin:10px;

	margin-right: 10px;

	font-size: 12px;

	border:1px solid rgba(0,0,0,0.2);

	padding: 2px 10px;

	border-radius: 15px;

	text-transform: capitalize;

	color: black;

	text-decoration: none;


}


@media only screen and (max-width:480px){


.category{



	margin-right:5px;

	font-size: 12px;

	border:1px solid rgba(0,0,0,0.2);

	padding: 2px 10px;

	border-radius: 15px;

	text-transform: capitalize;

	color: black;

	text-decoration: none;


}





}





.category:hover{

	
background-color: skyblue;

color:white;

text-decoration: none;

transition: 0.3s ease-in-out;

}


.category nth-child(3){

	background-color: rgba(192,192,192,0.4);
}



/*--------------------------------------------------------------
# navigation bar img
--------------------------------------------------------------*/


.button_navigation img{

width: 20px;
height: 18px;

}


/*--------------------------------------------------------------
# navigation search bar
--------------------------------------------------------------*/


#input_search{

font-size: 12px;

border:1px solid transparent;
font-weight: normal;

background-color: rgba(192,192,192,0.5);
border-radius: 12px;

width: 390px;



}




/*--------------------------------------------------------------
# navigation search bar button
--------------------------------------------------------------*/


#btn-search{

	font-size: 10px;
	border-radius:0px 13px 13px 0px;
	margin-left: -80px;
	padding: 7px 8px;
	position: relative;
z-index: 9;
color: white !important;

margin-top: 2px !important; 
}


/*--------------------------------------------------------------
# menu navbar
--------------------------------------------------------------*/


#discount{

	direction: none;
}



#make_request{

font-weight: bold;

font-size: 14px;

color: skyblue;

padding: 10px 10px;


border:1px solid skyblue;


}




#report_abuse{

padding: 0px 10px;

color: white;

float: right;

background-color: rgba(255,140,60,0.9);

border:1px solid transparent;

font-weight: bold;

font-size: 14px;


}


/*--------------------------------------------------------------
# product listings
--------------------------------------------------------------*/



#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding: 10px;

width:200px;


margin:1em 1em;

}

@media only screen and (max-width:498px){


#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding: 10px;

width:130px;

display: inline-block;
margin:1em 1.5em;

}



}


@media only screen and (min-width:499px) and (max-width:797px){


#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding: 10px;

width:200px;

display: inline-block;
margin:1em 1em;

}



}


#priceitem{

font-family:Poppins;
font-weight: bold;
color:black;
opacity: 0.8;
text-transform:capitalize;
font-size:14px;
padding:10px;
position: relative;
margin-bottom: 8px;


}




#conitem,#locitem,#catitem{
font-size:12px;
font-family:poppins;
color: rgba(0,0,0,0.9);
padding:10px;
width:100%;

font-weight: bold;
text-transform: capitalize;


}




#imgitem{
height: 120px;
width:100%;
margin-top:-24px;

border-radius:15px 15px 0px 0px;
}



#nameitem a{
  font-size:12px;
  font-weight:normal;
  padding-left:10px;
  text-transform:capitalize;
  color: rgba(0,0,0,0.4);
  padding-top: 8px;

 word-wrap:break-word;
 text-align:center;
  font-family:poppins;  
}






.nav_signup{


border:1px solid none;
border-left:1px solid white;
border-left-color: rgba(192,192,192,1);
margin-left:0px;



}

@media only screen and (max-width:767px){


.nav_signup{

font-weight: normal;


}


}


.btn-success{

	cursor: pointer;
}



.nav_login{



margin-left:50px;

}


.main.flickity-prev-next-button {
  display: none;
}

    
.main .flickity-prev-next-button {
  display: none;
}
.flickity-button:disabled {

}    
  

@media only screen and (max-width:767px){

.main  .flickity-page-dots .dot.is-selected{

  background-color:rgba(255,165,50,1);
}
.main  .flickity-page-dots .dot{

  width:20px;
  height: 4px;
  margin: 0;
  border-radius: 0;


  
}

}





.main .flickity-page-dots{

 
  display: block;

   margin-top: 25px;
}


.main .flickity-page-dots .dot.is-selected{


background-color: skyblue;


}


.main  .flickity-page-dots .dot{

  width:80px;
  height: 4px;
  margin: 0;
  border-radius: 0;


  
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

  font-size: 13px;
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

.footer{

	margin-top: 30px;
}






</style>
</head>
<body>

<!------------------------------------------Header--------------------------------------------------->






<?php include 'nav.php';  ?>

<?php include 'overlay.php';?>

<br><br>



<div class="container">

	<br><br>

<a class="category" href="service-provider.php">Service Provider</a><a class="category" onclick="history.go(-1)"><?php echo$sp_speciality?></a><a class="category" style="color: skyblue;display:;" href="">Service Provider details</a>

	<br><br>	


<div id="product_image" class="row">
	
<div class="col-md-6">
	
<img src="<?php echo$image  ?>">



</div>


<div class="col-md-6">
	
<div  class="housing_delivery">
	
<h6><b style="text-transform:capitalize;"><?php echo$sp_name;?></b></h6>

<p><?php if ($sp_speciality=='mechanic') {
	
echo$sp_speciality." specialized in Cars";}?> </p>

<p><i class="fa fa-map-marker"></i> <?php echo$sp_location;?></p>

<p><a style="color:black;" href="mailto:<?php echo$sp_email; ?>"><i class="fa fa-envelope"></i> <?php echo$sp_email;?></a></p>

<p><a style="color:black;" href="tel: +234<?php echo$sp_phone1; ?>"><i class="fa fa-phone"></i> <?php echo$sp_phone1;?></a>,<a style="color:black;" href="tel: +234<?php echo$sp_phone2; ?>"><?php echo$sp_phone2;?></a></p>


<h6><b>Experience</b>: Over <?php echo$sp_experience;?></h6><br>

<h6 ><b>Bio</b>:</h6> <p class="p_bio"><?php echo$sp_bio;?></p>

<span><i class="fa fa-share-alt"></i></span><br>

<?php if (!isset($userId)) {?>
<a href="login.php?" class="btn btn-success form-control">Login to continue</a>
<?php  } else{ ?>
<a class="btn btn-info"  href="">Connect</a>&nbsp;<a class="btn btn-success" onclick="toggle()">Send message</a>
<?php } ?>

<br>

</div>

</div>

</div>



<?php
if (isset($_GET['sp_id'])) {
require 'engine/configure.php';
$id = mysqli_escape_string($conn,$_GET['sp_id']);
$service_provider = mysqli_query($conn,"SELECT * from service_providers where sp_id ='$id'");
while ($row = mysqli_fetch_array($service_provider)) {
$id =  $row['sp_id'];

		
	}
	
}


?>
  <?php

require 'engine/configure.php';
$experience = mysqli_query($conn,"select images from work_experience where sp_id ='".$id."' limit 5");
echo"<div id='img'>";
if($experience->num_rows>0){
while ($row = mysqli_fetch_array($experience)){
echo"<br>

<div><img id='img_exp' style='margin-left:10px;margin-right:10px;height:150px !important;width:150px !important;' src=".$row['images']."></div>";
}
}
else{
echo"No work picures yet";
}
 ?>
</div>
<br>

<div class="extensions">
<ul>

<li><i class="fa fa-check"></i> <a>Extended Warranties</a></li>
   <li><i class="fa fa-check"></i> <a>Home delivery</a></li>
    <li><i class="fa fa-check"></i> <a>Car Buying</a></li>
    <li><i class="fa fa-check"></i> <a>Live Video Viewing</a></li>
    <li><i class="fa fa-check"></i> <a>Extended warranties</a></li>
    <li><i class="fa fa-check"></i> <a>Click and Collect</a></li>


</ul>

</div>


</div>









<!-----------------------------------------------popup------------------------------------------------------------->

<div id="popup">
<div class="container">
<p><b>How was your experience?</b></p>
<p>Rate Micheal Timothy</p>

<?php
if (isset($_GET['sp_id'])) {
require 'engine/configure.php';
$id = mysqli_escape_string($conn,$_GET['sp_id']);
$service_provider = mysqli_query($conn,"SELECT * from service_providers where sp_id ='$id'");
while ($row = mysqli_fetch_array($service_provider)) {
$id =  $row['sp_id'];

if(isset($_SESSION['id'])  ||  isset($_SESSION['business_id']) ||isset($_SESSION['sp_id'])){ 

if ($row['sp_ratings']>0 && $row['sp_ratings']<11) {     
?>

<span style="cursor: pointer;" id="<?php echo $id ?>" class="btn-rating" ><i class="fa fa-star" style="color: orange;"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i  class="fa fa-star"></i></span><br>
<?php }

if ($row['sp_ratings']==0){?>

<span style="cursor: pointer;" id="<?php echo $id ?>" class="btn-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><br>

<?php
	}
}

}
	
}

?>
<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>
<small>Share your experience, so next time we
can serve you better</small><br>

<form id="form-message">

<input type="email" name="email" placeholder="Email" class="form-control" required="" value="<?php if(isset($_SESSION['id'])  ||  isset($_SESSION['business_id']) ||isset($_SESSION['sp_id'])){ echo $useremail;} ?>">

<input type="text" name="name" placeholder="Name" class="form-control" value="<?php if(isset($_SESSION['id'])  ||  isset($_SESSION['business_id']) ||isset($_SESSION['sp_id'])){ echo $username;} ?>">

<textarea name="vendor_message" cols="6" class="form-control"></textarea>

<br>
<input type="submit" name="submit" value="submit" style="cursor:pointer;" class="btn btn-info btn-message"><a class="btn btn-danger"  onclick="toggle()" id="close">&times;</a>

</form>

</div>

</div>



<div id="popup-comment">
<a id="close-comment" class="btn close-comment" onclick="toggle_comment()">&times;</a>
<h6><b>Post comment</b></h6><br>
<form method="post" id="conv">
<?php 
if(isset($_SESSION['business_email'])){
$business_email = $_SESSION['business_email']; 
$business_name = $_SESSION['business_name'];
echo'<input type="hidden" name="sender_email" maxlength="21" class="form-control" style="font-family:arial,fontawesome;font-size:13px;" placeholder="&#xF1fa; Email" value="'  .$business_email.'"><br>';
echo'<input type="hidden" maxlength="21" name="sender_name" class="form-control" style="font-family:arial,fontawesome;font-size:13px;"  placeholder="&#xF007; Name" value="'.$business_name.'">';
}
elseif (isset($_SESSION['sp_email'])){
 	$sp_email = $_SESSION['sp_email']; 
 	$sp_name = $_SESSION['sp_name'];
echo'<input type="hidden" name="sender_email" maxlength="21" class="form-control" style="font-family:arial,fontawesome;font-size:13px;" placeholder="&#xF1fa; Email" value=" '.$sp_email.'"><br>';
echo'<input type="text" maxlength="21" name="sender_name" class="form-control" style="font-family:arial,fontawesome;font-size:13px;"  placeholder="&#xF007; Name" value="'.$sp_name.'">';}
 elseif (isset($_SESSION['email'])){
 	$email = $_SESSION['email']; 
 	$name = $_SESSION['name'];
echo'<input type="hidden" name="sender_email" maxlength="21" class="form-control" style="font-family:arial,fontawesome;font-size:13px;" placeholder="&#xF1fa; Email" value="'.$email.'"><br>';
echo'<input type="hidden" maxlength="18" name="sender_name" class="form-control" style="font-family:arial,fontawesome;font-size:13px;"  placeholder="&#xF007; Name" value="'.$name.'">';}
else{
?>
<input type="text" maxlength="21" name="sender_name" placeholder="&#xF007; Name" class="form-control" style="font-family:arial,fontawesome;font-size:13px;" ><br>
<input type="email" name="sender_email" placeholder="&#xF1fa; Email" class="form-control" style="font-family:arial,fontawesome;font-size:13px;" ><br>
<?php
 }

?> 
<input type="hidden" name="id" value="<?php echo$id  ?>"><br>
<textarea class="form-control" name="comment" placeholder="...Your review" rows="4" style="font-size:13px;"></textarea><br>
<button id='btn-comment' class="btn btn-warning form-control" style=""><i class="fa fa-paper-plane"></i> Add comment</button>
<div align="center" style="display: none;" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>
</form>
</div>






<div class="container">





  <button style='font-size:13px;' type="button" class="btn btn-drop form-control"  onclick="collapse()">Work history<span style='float:right;' class="fa fa-caret-down"></span></button>
  <div id="demo" class="active-button">

<?php
if (isset($_GET['sp_id'])) {
require 'engine/configure.php';
$id = mysqli_escape_string($conn,$_GET['sp_id']);
$service_provider = mysqli_query($conn,"SELECT * from service_providers where sp_id ='$id'");
while ($row = mysqli_fetch_array($service_provider)) {
$id =  $row['sp_id'];

		
	}
	
}
?>
  <?php

require 'engine/configure.php';
$experience = mysqli_query($conn,"select experience from work_experience where sp_id ='".$id."' order by id desc limit 1 ");
if($experience->num_rows>0){
while ($row = mysqli_fetch_array($experience)){
echo"<br>".$row['experience'];
}
}
else{
echo"No experience yet";
}
 ?>
  </div>




<br><br>

<div style="background-color: rgba(192,192,192,0.6);text-align: center;">

<p style="padding:80px 20px;"><b style="font-size: 1.5rem;padding:60px 20px;">Why use our services..........</b><span style="font-size: 12px;opacity: 0.6;"></span></p>
</div>

	

<br>

<h6 style="font-size:16px;"><b>Store Address</b></h6>

<br>

<div id="opening_hours" style="" class="row">
	
<div class="col-md-6">
	
<h6>Opening hours</h6>

<table style="width: 100%;">

	 <tbody>

	 <tr>

		<td>Monday</td>
		<td>10:00 - 15:00</td>
	 </tr>

	  <tr>

		<td>Tuesday</td>
		<td>10:00 - 15:00</td>
	 </tr>


 <tr>

		<td>Wednesday</td>
		<td>10:00 - 15:00</td>
	 </tr>


 <tr>

		<td>Thursday</td>
		<td>10:00 - 15:00</td>
	 </tr>


 <tr>

		<td>Friday</td>
		<td>10:00 - 15:00</td>
	 </tr>

 </tbody>

</table>
</div>

<div class="col-md-6">
	
<img src="assets/img/Frame_8937.png" style="width: 100%;">
</div>
</div>
<br>	

<div class="sp_reviews">

<?php
   require 'engine/configure.php';

   $query = mysqli_query($conn,"select * from sp_comment where sp_id='".htmlspecialchars($id)."' order by id desc");
   $product_comment=$query->num_rows;
   if ($product_comment<1) {
   echo "<span style='font-family: poppins;font-size:14.5px;opacity:0.6;color:black'>There are no reviews for this product</span>";
   }
   else{
   while ($row = mysqli_fetch_array($query)) {
   echo'<div class="review">';
   echo "<h6><b>".$row['sender_name']."</b></h6>";
   echo "<p>".$row['comment']."</p>";
   echo"<br><i style='color:blue; align-self:center;font-size:14px;' >Public</i>"."  "."<i style='color:red;font-size:14px;'>". $row['date']."</i><br><br>";
    echo'</div>';  
   }
   }
   
   ?>
</div>
<br>
<button class="btn btn-primary " onclick="toggle_comment()">Post a comment</button>



<br>


<div id="store" class="container">
	
<h6>Store</h6>

<p>Buy your building materials from stores around you!</p>

<a href="products.php?page=building material" class="btn btn-store" href="products">See stores</a>




</div>






<?php

require 'engine/configure.php';

$all = mysqli_query($conn,"SELECT * from service_providers where sp_location like '%$sp_location%' and sp_verified=1");

$count_all = $all->num_rows;

?>

 <br><br><h6 style="font-size: 14px;"><b>Other service providers near you</b><span style="float: right;"><a style="display: none;" id="see_all">See all(<?php echo$count_all?>)<i class="fa fa-chevron-right"></i></a></span></h6><br><br>

<div class="main">

  
<?php


while ($row = mysqli_fetch_array($all)) {

   $sp_id = $row['sp_id'];

    $sp_speciality = $row['sp_speciality'];
    
    $sp_name = $row['sp_name']; 

    $sp_location = $row['sp_location']; 

    $sp_ratings = $row['ratings']; 

    $sp_verified = $row['sp_verified'];




   echo"<div id='menu_sp'>";

  



   echo"<a id='sp_img' href='sp_details.php?sp_id=$sp_id'><img src=".$row['sp_img']."></a><br>";

    echo"<a id='sp_name' href='sp_details.php?sp_id=$sp_id'><b>".$row['sp_speciality']."</b></a><br>";

    echo"<p style='font-size:11px;'><b>100%</b> verified<p><span id='home_verified'><span id='verified'><b style='visibility:hidden;font-size:6px;'>T</b></span><i class='fa fa-check'></i></span>";

     

   




   echo"</div>";

}




?>






</div>







<br>




</div>





<!------------------------------------------footer--------------------------------------------------->


<br>

<?php

include 'footer.php';


?>




<script>
  
$('.main').flickity({
 
  cellAlign: 'left',
  contain: true,
  autoPlay:true,
 
});

</script>





<script>
  
$('.sp_reviews').flickity({
 
  cellAlign: 'left',
  contain: true,
  autoPlay:true,

});


</script>





<script>
  
$('#img').flickity({
 
  cellAlign: 'left',
  contain: true,
  autoPlay:true,
  pageDots:false,
  imagesLoaded:true

});


</script>


<script type="text/javascript">
    
    function toggle() {

var popup = document.getElementById('popup');
popup.classList.toggle('active');


        }

</script>


<script type="text/javascript">
 function toggle_comment() {
var popup = document.getElementById('popup-comment');
popup.classList.toggle('active');
 }
</script>



<script>
$('.numbering').load('engine/item-numbering.php');
$('#btn-comment').on('click',function(e){
e.preventDefault();
$("#loading-image").show();
    $.ajax({
            type: "POST",
            url: "engine/sp-comment.php",
            data:  $("#conv").serialize(),
            success: function(response) {
            $("#loading-image").hide();
            if (response==1) {
          $('#bom').load(location.href + " #cy");
          $("#conv")[0].reset();
           swal({
           	text:"Comment added successfully",
            icon:"success",
});
}
else{
swal({

    icon:"error",
	text:response
});
}         
},
           error: function(jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);

            }
        });

    });

</script>





<script>
$('#btn-message').on('click',function(e){
e.preventDefault();
$("#loading-image").show();
    $.ajax({
            type: "POST",
            url: "engine/sp-message.php",
            data:  $("#form-message").serialize(),
            success: function(response) {
            $("#loading-image").hide();
            if (response==1) {
          $('#bom').load(location.href + " #cy");
          $("#conv")[0].reset();
           swal({
           	text:"Message sent successfully",
            icon:"success",
});
}
else{
swal({
    title:"Oops",
    icon:"error",
	text:response
});
}         
},
           error: function(jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);

            }
        });

    });

</script>
<input type="text" name="email" id="email" value="<?php echo$useremail ?>">
<script>
$('.btn-rating').on('click',function(e){
var id = $(this).attr('id');
var email = $('#email').val();
alert(id);
alert(email);
e.preventDefault();
$("#loading-image").show();
    $.ajax({
            type: "POST",
            url: "engine/sp-rating.php",
            data:{'id':id,'email':email},
            success: function(response) {
            $("#loading-image").hide();
            if (response==1) {
          $('#bom').load(location.href + " #cy");
          $("#conv")[0].reset();
           swal({
           	text:"Rating has been added",
            icon:"success",
});
}
else{
swal({
    title:"Oops",
    icon:"error",
	text:response
});
}         
},
           error: function(jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);

            }
        });

    });

</script>









<!------------------------------------------btn-scroll--------------------------------------------------->

<a class="btn-down" onclick="topFunction()">&#8593;</a>

<script src="assets/js/scroll.js" ></script>
<script src="assets/js/overlay.js"></script>

<script type="text/javascript">
	
function collapse() {
	// body...
$('#demo').toggleClass('active-button');

}


</script>

</body>
</html>

<?php session_start();
if (!isset($_SESSION["id"]) && !isset($_SESSION["business_id"]) && !isset($_SESSION["sp_id"] )) { 
echo"<script>location.href='login.php'</script>";
exit();
}
date_default_timezone_set('Africa/Lagos');
date_default_timezone_get();
?>




<?php 
if (!empty($_SESSION["id"])) {
$date = $_SESSION['date'];
$userId = $_SESSION['id'];
}
if (!empty($_SESSION["business_id"])) {
$business_date = $_SESSION['business_date'];
$userId = $_SESSION['business_id'];
}
if (!empty($_SESSION["sp_id"])) {
$sp_date = $_SESSION['sp_date'];
$userId = $_SESSION['sp_id'];
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>E-stores | dashboard </title>
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


.notification{

color:white;
background-color: red;
padding:0px 8px;
border-radius:50%;
margin-top:-5px;
font-size:10px;
position: absolute;
}



.tabcontent{

  display: none;
}


.tab .btn {
  background-color: inherit;
 
  border: none;
  outline: none;
  cursor: pointer;
  padding: 10px 14px;
  transition: 0.3s;
  font-size: 14px;

}

/* Change background color of buttons on hover */
.tab .btn:hover, .tab .btn:focus{
  background-color:blue !important;
  color:white;
  font-size: 14px;
}


/* Create an active/current tablink class */
.tab .btn.active {
 background-color:blue !important;
  color:white;
  font-weight: bold;
  font-size: 14px;
  padding: 10px 14px;
}





td a{

  font-size: 0.7rem !important;
}

td #refresh, td #mark, td #trash {

border:2px solid skyblue;

padding: 4px 10px;


}


.inbox{

   width: 80%
}

@media only screen and (max-width:767px){

 #inbox{

   width:45%
}


}


#sender, #subject, #td_date{

opacity: 0.7;

}


#subject{

  width: 60%;
}


small{font-size: 0.8rem;}


.btn-success{

font-size:0.8rem;

}


.fa-user-alt{


padding: 20px;

border-radius: 50%;

border:2px solid black;

font-size: 1rem;

margin:15px;



}





#user_image{

  height: 80px;

  width: 80px;

  border-radius: 50%;

  padding: 5px;

  border:2px solid skyblue;


}


.btn-search{

  color: white !important;

  float: right;

  margin-top: -20px;

  display: none;
}


input[type=search]{

  font-size: 13px;

  margin:  20px 0px;
}


#messages_home .btn-primary, #messages_home .btn-trash{

font-size:0.8rem;

}




#messages_home .btn-primary{

border-right: 2px solid black;

}



#messages_home .btn-trash{

background-color: inherit;

border-right: 2px solid black;

color:black !important;

}




#messages_home .btn-trash:hover{


color:white !important;

}







#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding: 10px;

width:200px;

display: inline-block;
margin:1em 1em;

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


@media only screen and (max-width:767px){

#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.1);
padding: 8px;

width:160px;

display: inline-block;
margin:1em 1em;

}


#priceitem{

font-family:Poppins;
font-weight: bold;
text-transform:capitalize;
font-size:14px;
padding:10px;
position: relative;

}

#conitem,#locitem,#catitem{

padding: 8px;
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
  word-wrap:break-word;
 text-align:center;
  font-family:poppins;  
}

}












#date{

float: right;margin-right: 13px;
}


.computer_details input{

font-size: 12px;
margin-left: 45px;

border:1px solid transparent;

box-shadow: 0px 0px 3px rgba(0,0,0,0.6);


}


.computer_details input:focus{

outline: 2px solid skyblue !important;
border:2px solid skyblue !important;


}





#label{

font-size: 12px;


}






input,textarea{

font-size: 12px;

}


input[type=text]{


  font-size: 12px !important;
}


input::placeholder{


  text-align: center;
}

#active{

  background-color:white;

  width: 100%;

}



@media only screen and (max-width:767px){

input::placeholder{


  text-align: left;
}

#date{

float:right;
margin-right: 31px;
font-size: 12px;
}


#battery{

  font-size: 11px;
}

}


div p{


  font-size: 12px;

  width: 100%;

  padding: 15px 30px;

  margin-top: 25px;

  border:1px solid rgba(225,225,285,0.8);


  background-color: rgba(225,225,285,0.8);
}








@media only screen and (max-width:468px){


input::placeholder{


  text-align:left;
}

}


@media only screen and (max-width:767px){

#whatsapp{

  
  margin: 10px 0px !important;

  width: 100% !important;
}


}



#user_name{
position: relative;

font-weight: bold;

font-size: 14px !important;
}



@media only screen and (max-width:497px){


#user_name{

font-size: 13px !important;

}


#user_email{


position: relative;

margin-left:12%;

margin-top: -15px;

font-size: 12px !important;




}





}



#user_email{

position: relative;

left:16.5%;

top:-37px;

font-size: 13px !important;

}



@media only screen  and (min-width:498px) and (max-width:767px){



#user_email{


position: relative;

margin-left: 8px;

margin-top: -15px;

font-size: 12px !important;




}



}


select{

  font-size: 12px !important;
  margin-top: 10px;

}



.col-md-6{


  margin-top: 10px;

}



.col-md-6 h6{

  font-weight: bold;

  font-size: 15px;
}


.col-md-9 h6{

  font-weight: bold;
}


#label{

  font-size: 13px;

  background-color:rgba(240,240,240,0.9);

  padding: 20px 23px;

  width: 100%;
  margin-top: 30px;
}



#product input{

  width: 100%;

  
}
/*--------------------------------------------------------------
# overlay dashboard
--------------------------------------------------------------*/

#overlay{

display: block;
position:relative;
z-index: 300;
width: 100%;
background-color:skyblue;

}


.overlay-content{
position:relative;
top: 28px;
width: 100%;
text-align:left;
margin-left: 20px;
}

#overlay a{
padding: 5px;
font-size:13px;
color:black !important;
display: block;
text-transform: capitalize;
font-weight:normal;
 font-family:poppins;
transition: 0.3s;
}




.overlay a:hover,.overlay a:focus{
  opacity: 0.5;
  text-decoration: none;
}

#overlay hr{

  border:2px solid rgba(0,0,0,0.6);

  width: 40%;

  position: absolute;

  left: 0% !important;

  margin-top: 10px;



}


@media only screen and (max-width:767px){


#overlay{

  overflow-x:hidden;
  overflow-y:hidden;



}


#overlay hr{

 width: 20%;



}


}





@media only screen and (max-width:468px){


#overlay{

  overflow-x:hidden;
  overflow-y:hidden;
}


#overlay hr{

 width: 20%;



}




}



@media only screen and (max-width:767px){

#overlay img{

  width: 12px;

  height: 11px;
}


.fa-envelope{

  color: black;

  font-size: 12px;

}



}






.fa-envelope{

  color: black;

}


.fa-bell{

  font-size: 21px;

}


.bell{

  margin-left: 45px;

  position: relative;

  top: -53px;


}





.button_dashboard{

  margin-top: 10px;
}

.button_logout{

  margin-top: 10px;
}

.button_logout:hover{

  text-decoration: none;

  color:red;
}


#first_name, #last_name {

width: 44%;

margin-right: 45px;

margin-bottom: 30px;

border: 1px solid transparent;

padding: 5px;

border-radius: 3px;

}

@media only screen and (max-width:498px){

#first_name, #last_name {width: 100%;

margin-right: 0px;

margin-bottom: 15px;

}

}



input[type=email],input[type=text],input[type=password]{

  border:1px solid transparent;

  box-shadow: 0px 0px 6px rgba(0,0,0,0.4);
}


input[type=email]:focus,input[type=text]:focus,input[type=password]:focus{

  outline: 3px solid skyblue;

  border:1px solid transparent;
}



#business_name{

  font-size: 14px;
}



#business_email{

  font-size: 14px !important;
}


#business_email::placeholder{

  font-size: 14px;
}


#contact{

  width: 30%;

margin-right: 20px;

margin-bottom: 30px;

border: 1px solid transparent;

padding: 5px;

border-radius: 3px;

}


@media only screen and (max-width:498px){




#contact{


  width: 100%;

  margin-right: 0px;


}

}




.address_details{

 width: 43%;

margin-right: 5px;

margin-bottom: 30px;

border: 1px solid transparent;

padding: 5px;

border-radius: 3px;

 box-shadow: 0px 0px 6px rgba(0,0,0,0.4);

 text-transform: capitalize;

}



@media only screen and (max-width:498px){

 .address_details{

  width: 100%;

margin-right: 0px;

}

}




textarea{

 box-shadow: 0px 0px 6px rgba(0,0,0,0.4);

  font-size: 13px !important;

}



#business_category{

 box-shadow: 0px 0px 6px rgba(0,0,0,0.4);

  font-size: 13px !important;

}

#time{
 width: 32%;

margin-right: 10px;

margin-bottom: 30px;

border: 1px solid transparent;

font-size: 14px;

padding: 5px;

 box-shadow: 0px 0px 6px rgba(0,0,0,0.4);

}



@media only screen and (max-width:498px){


#time{
 width: 100%;

margin-right: 0px;



}


}





#links{

 width: 22%;

margin-right: 10px;

margin-bottom: 30px;

font-size: 14px;

padding: 5px;



}





@media only screen and (max-width:498px){

#links{


 width: 100%;

margin-bottom: 30px;

font-size: 14px;

padding: 5px;



}


}







.btn-danger{

  font-size:12px;

  margin-left: -20px;

  margin-right: 10px;
}


</style>
</head>
<body>


<!------------------------------------------overlay content--------------------------------------------------->

<div style="overflow: hidden;">

<div style="" class="  row">


  <div id="overlay" class="col-md-3">

<div class="overlay-content">

 

<a href="index.php" class="button_home" ><img src="assets/icons/Vector.png"> Home<span id="date"><?php echo date("F d, Y");?></span></a><br>
<a href="dashboard.php" class="button_dashboard"><img src="assets/icons/round-dashboard.png"> Dashboard</a><br>
    
<?php 
if (isset($_SESSION['business_id'])) {

echo'<a href="postadvert.php"><img src="assets/icons/healthicons_person.png"> Post product<i class="fa fa-caret"></i> </a><br>';
echo'<a href="mylistings.php" id=""> <img src="assets/icons/material-symbols_box-add-outline.png"> My listing</a><br>';

}
?>



<a id="active"><img src="assets/icons/icon-park-outline_add-pic.png"> Profile</a><br>
<a href="messages.php"><i class="fa fa-envelope"></i> Messages</a><br>
<?php if (isset($_SESSION["sp_id"])) {
?>
<a href="services-provided.php">Service Provided</a><br>

<a href="work-experience.php">Work Experience</a><br>
<?php
 }
?>
<?php if (isset($_SESSION['business_id'])) {
 
 echo'<a href="sold-history.php">Sold History</a><br>';
}


?>



<hr>

<br>


<a href="Logout.php" class="button_logout"><img src="assets/icons/icon-park_logout.png"> Logout</a><br>

</div>




 </div>

 
<?php if (isset($_SESSION['business_id'])) {
    //Check if user is a vendor
$username = $_SESSION['business_name'];
$useremail = $_SESSION['business_email'];
}

    //Check if user is a service provider
if (isset($_SESSION['sp_id'])) {
$sp_id =  $_SESSION['sp_id'];
$username =  "<a style='color:black;' href='sp_details.php?sp_id=$sp_id'>".$_SESSION['sp_name']."</a>";
$useremail = $_SESSION['sp_email'];
}
    //Check if user is a buyer
if (isset($_SESSION['id'])) {
$username = $_SESSION['name'];
$useremail = $_SESSION['email'];
}
?>


  <div class="col-md-9">
<div class="container row"> 
<div class="col-md-6">
<br>
<h6 style="text-transform:capitalize;">Hello, <?php echo $username;?></h6>
</div>
<div class="col-md-6">
<?php
    //Check if user is a vendor

if (isset($_SESSION['business_id'])) {
    require 'engine/configure.php';
    $vendor = mysqli_query($conn,"select * from vendor_profile where id = '$userId'");
    if ($vendor) {     
     while ($dataVendor = mysqli_fetch_array($vendor)) {
      $vendorName = $dataVendor['business_name'];
      $vendorImg = $dataVendor['business_image'];

     }

    }
}
     ?>


    <?php

       //Check if user is a  service provider

if (isset($_SESSION['sp_id'])) {
    require 'engine/configure.php';
    $vendor = mysqli_query($conn,"select * from service_providers where sp_id = '$userId'");
    if ($vendor) {
    while ($dataVendor = mysqli_fetch_array($vendor)) {
     $vendorName = $dataVendor['sp_name'];
      $vendorImg = $dataVendor['sp_img'];

     }

    }
}
     ?>



    <?php

       //Check if user is a  buyer

if (isset($_SESSION['id'])) {
    require 'engine/configure.php';
    $vendor = mysqli_query($conn,"select * from user_profile where id = '$userId'");
    if ($vendor) {
    while ($dataVendor = mysqli_fetch_array($vendor)) {
      $vendorName = $dataVendor['user_name'];
      $vendorImg = $dataVendor['user_image'];

     }

    }
}
     ?>

  

    
<div id="bom">

<div id="my">

<img id="user_image" src="<?php echo $vendorImg;?>">

<span id="user_name"> <?php echo $username?></span><br>

<small style="" class="user_email" id="user_email"><?php echo $useremail;?></small>


<?php

require 'engine/configure.php';
if (isset($_SESSION['business_id'])) {
$you = $_SESSION['business_id'];
$getnotification = mysqli_query($conn,"select * from vendor_notifications where recipient_id ='".htmlspecialchars($you)."'");
echo'<a href="vendor-notifications.php"><span class="bell">&nbsp; <i class="fa-solid fa-bell"></i><span class="notification">';
$countNotifications = $getnotification->num_rows;
if ($countNotifications>0) {
?>
<?php echo$countNotifications;?>
<?php    }  }  ?>
</span></span></a>

<?php

require 'engine/configure.php';
if (isset($_SESSION['sp_id'])) {
$you = $_SESSION['sp_id'];
$getnotification = mysqli_query($conn,"select * from sp_notifications where recipient_id ='".htmlspecialchars($you)."'");
echo'<a href="sp-notifications.php"><span class="bell">&nbsp; <i class="fa-solid fa-bell"><span class="notification">';
$countNotifications = $getnotification->num_rows;
if ($countNotifications>0) {
?>
<?php echo$countNotifications;?>
   <?php   }  } ?>
</span></i></span></a>




<?php

require 'engine/configure.php';
if (isset($_SESSION['id'])) {
$you = $_SESSION['id'];
$getnotification = mysqli_query($conn,"select * from user_notifications where recipient_id ='".htmlspecialchars($you)."'");
echo'<a href="vendor-notifications.php"><span class="bell">&nbsp; <i class="fa-solid fa-bell"><span class="notification">';
$countNotifications = $getnotification->num_rows;
if ($countNotifications>0) {
?>
<?php echo$countNotifications;?>
   <?php   }  } ?>
   </span></i></span></a>




</div>

</div>

</div>


</div>

<div class="">
<div id="label">
<div id="messages_home" style="text-align: center;">
<div class="tab">
<a class="tablinks btn btn-primary"  id="defaultOpen" onclick="openCity(event,'London')">My profile</a>
<a class="tablinks btn btn-trash" onclick="openCity(event,'Paris')">Edit Profile</a>

</div>

</div>



<br>





<div id="London" class="tabcontent">

<table style="width: 100%;">
<thead>
<tr style="border-top: 2px solid rgba(192,192,192,0.4);border-bottom: 2px solid rgba(192,192,192,0.4);">
 <td style="padding:10px;" class="inbox" id="Home">Personal details</td>
</tr>
</thead>
</table>



<br><br>

 <small> <?php echo$username;?></small><br>

<?php if (isset($_SESSION['business_id']) ) {
?>

<small> <?php  echo $_SESSION['business_contact'];?></small><br>
<small>Dial code +234</small><br>

<?php
}
?>
<?php if (isset($_SESSION['sp_id']) ) {
?>

<small> <?php  echo $_SESSION['sp_phonumber1'];?></small><br>
<small> <?php  echo $_SESSION['sp_phonumber2'];?></small><br>

<small>Dial code +234</small><br>

<?php
}
?>

<small><?php echo $useremail;?></small>

   <br>

   <i class="fa-solid fa-user-alt"></i><br>

<form id="editpage-form" method="post">

<input type="hidden" name="id" value="<?php echo $userId?>">
<input type="file" name="fileupload"><br><br>
<input type="submit" name="submit" id="submit" value="Change photo" class="btn btn-success " style="color: white;"><br>

</form>


</div>


<div id="Paris" class="tabcontent">

<h6>My profile</h6>






<?php

if (isset($_SESSION['business_id'])) {
$getuser = mysqli_query($conn,"select * from vendor_profile where id = '".$_SESSION['business_id']."'");
while ($datafound = mysqli_fetch_array($getuser)) {
$user_name = $datafound['business_name'];
$user_password = $datafound['business_password'];
}
}


if (isset($_SESSION['sp_id'])) {

$getuser = mysqli_query($conn,"select * from service_providers where sp_id = '".$_SESSION['sp_id']."'");
while ($datafound = mysqli_fetch_array($getuser)) {
$user_name = $datafound['sp_name'];
$user_password = $datafound['sp_password'];
}
}


if (isset($_SESSION['id'])) {

$getuser = mysqli_query($conn,"select * from user_profile where id = '".$_SESSION['id']."'");
while ($datafound = mysqli_fetch_array($getuser)) {
$user_name = $datafound['user_name'];
$user_password = $datafound['user_password'];
  
}

}



?>

<?php if (!isset($_SESSION['business_id']) ) {
?>
<input type="text" id="first_name" name="Full name" placeholder="Full Name"><br>
<?php }
?>



<?php if (isset($_SESSION['business_id']) ) {
?>
<input id="business_name" name="business_name" type="text" class="form-control" placeholder="Business Name"><br>

<?php }

?>
<input id="first_name"  type="password" name="password" placeholder="Password"><input id="first_name"  type="password" name="cpassword" placeholder="Confirm Password"><br>

<h6>Contact information</h6>

<input id="contact" type="text" name="country_code" placeholder="Country code"><input id="contact" type="text" name="contact" placeholder="Phone number">

<input id="whatsapp" type="text" name="" placeholder="Whatsapp"><br>


<?php if (isset($_SESSION['business_id']) ) {

  $email_address =  $_SESSION['business_email'];
}

if (isset($_SESSION['sp_id']) ) {

  $email_address =  $_SESSION['sp_email'];

}

if (isset($_SESSION['id']) ) {

  $email_address =  $_SESSION['email'];
}




?>


<input id="business_email" type="email" style="font-size:14px !important" name="" class="form-control" value="<?php echo$email_address?>" placeholder="Email Address"><br>

<h6> Address Details</h6><br>




<?php

require 'engine/connection.php';

$getStates = mysqli_query($con,"SELECT * from states_in_nigeria GROUP by state");

echo'<select class=" location address_details" name="location" id="location">
<option value="">Entire Nigeria</option>';
while ($states = mysqli_fetch_array($getStates)) {
?>
<option value="<?php echo $states['state']?>"><?php echo $states['state']?></option>
<?php }?>

</select>

<span id='lg'></span>

<?php if (isset($_SESSION['business_id']) ) {
?>
<h6> About Your Organisation</h6><br>

<textarea class="form-control" name="about" placeholder="About Your Organization" wrap="physical"></textarea><br>

<textarea class="form-control" name="services" placeholder="Services Your Organization Provides, ...." wrap="physical"></textarea><br>

<select name="business_category" id="business_category" class="form-control">
<?php

require 'engine/configure.php';

$query_category = mysqli_query($conn,"SELECT e_auto_categories FROM categories");

while ($row = mysqli_fetch_array($query_category)) {?>

<option value="<?php echo$row['e_auto_categories']?>"><?php echo$row['e_auto_categories']?></option>
<?php } ?>

</select><br>

<h6>Availability</h6><br>

<select name="days" id="time">

<option value="days">Days</option>
<option value="monday">Monday</option>
<option value="tuesday">Tuesday</option>
<option value="wednesday">Wednesday</option>
<option value="thursday">Thursday</option>
<option value="friday">Friday</option>
<option value="saturday">Saturday</option>
<option value="sunday">Sunday</option>

</select>   

<input id="time" type="text" name="opening_time" placeholder="Opening Time">  <input id="time" type="text" name="closing_time" placeholder="Closing Time"><br>
<?php

}

?>
<h6>Social Media</h6><br>

<input id="links" type="text" name="facebook" placeholder="Facebook">
<input id="links" type="text" name="twitter" placeholder="Twitter">
<input id="links" type="text" name="linkedin" placeholder="Linkedin ">
<input id="links" type="text" name="intagram" placeholder="Instagram">

<div style="text-align: right;">
<a class="btn btn-danger" href="">Cancel</a><a id="btn-submit" class="btn btn-success" href="">Submit</a>
</div>
</div>
</div>
</div>
</div>
</div>



<script>

function openCity(evt, cityName) {
var i, tabcontent, tablinks;
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
tabcontent[i].style.display = "none";
 }
tablinks = document.getElementsByClassName("tablinks");
for (i = 0; i < tablinks.length; i++) {
 tablinks[i].className = tablinks[i].className.replace(" active", "");
 }
document.getElementById(cityName).style.display = "block";
evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>






<script type="text/javascript">

$('#editpage-form').on('submit',function(e){

if (confirm("Are you sure to change this?")) {

 e.preventDefault();

$(".loading-image").show();


var formdata = new FormData();
   $.ajax({
           type: "POST",

           url: "changeprofilepic.php",

           data:new FormData(this),

           cache:false,

           processData:false,

           contentType:false,

           success: function(response) {

           $(".loading-image").hide();

          if(response==1){

            swal({

          text:"Image has been changed",
          icon:"success",
        });
       $('#bom').load(location.href + " #my");
}

else
 { 
  swal({
            icon:"error",
            text:response

           });
            $("#editpage-form")[0].reset();      

            }
 }
        });
 }
    });

</script>

<script type="text/javascript">

$('#lg').html("<select  id='lga' class=' lga address_details'><option>Business Axis</option></select>");
  
$('.location').on('change',function() {
  
var location = $(this).val();

      $.ajax({


          type:"POST",

            url:"engine/get-lga.php",

            data:{'location':location},

            success:function(data) {

              $('#lg').html(data);
              
            }


     });

});

</script>

</body>
</html>
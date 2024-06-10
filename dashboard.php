
<?php session_start();


if (isset($_SESSION["admin_id"])) { 
  
echo"<script>location.href='admin.php'</script>";

}






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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<style type="text/css">

body{

  font-family: poppins;
}


#discount{

  display: none;
}



#count{


color:white;
background-color: red;
border-radius: 50%;
padding:0px 5px !important;
font-weight: bold;
position: absolute;
right:;
margin-top: -5px;
font-size: 10px;
z-index: 1;

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


#views{

  display: none;
}

#user_image{

  height: 80px;

  width: 80px;

  border-radius: 50%;

  padding: 5px;

  border:2px solid skyblue;


}


#request{
display: inline-block;
width:160px;
background-color:#cce6ff;
margin-right:6px;
margin-bottom: 10px;
padding:7px;
border-radius: 15px;
}




#request h6{

  color:blue;

  font-weight: bold;

  font-size: 13px;
}


#request p{



font-size: 21px;

color:blue;

font-weight: bold;


}


#request .fa-star{


  color:white;

 font-size:0.8rem;

 
}



#deals{

background-color: red;

border:1px solid transparent;

border-radius:50%;

padding:8px;


}


#listings{


background-color:green;

border:1px solid transparent;

border-radius:50%;

padding:8px;
}




 .fa-shopping-cart{color: white;background-color: green;border-radius: 50%;padding: 8px;font-size:13px; }
.fa-eye{color: white;background-color: rgba(192,192,192,0.7);border-radius: 50%;padding: 8px;}
.fa-share-alt{color: white;background-color:red;border-radius: 50%; padding: 8px;}
.fa-comments{color: white;background-color:skyblue;border-radius: 50%;padding: 8px;}





#bar-chart{
padding: 20px;

border:2px solid rgba(0,0,70,0.3);

margin-top: 25px;

border-radius: 15px;

}



#star{

  font-size:11px;

  color:blue;
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






#active{

  background-color:white;

  width: 100%;

}



@media only screen and (max-width:767px){

input::placeholder{


  text-align: left;
}

#date{


margin-right: 25px;
font-size: 12px;
}


#battery{

  font-size: 11px;
}

}





#user_name{

position: relative;

font-weight: bold;

font-size: 14px !important;

margin-top: -30px;
}



@media only screen and (max-width:497px){


#user_name{

font-size: 13px !important;

}




}


#user_email{

position: relative;

left:17%;

top:-36px;

font-size: 13px !important;

}



@media only screen and (max-width:767px){



#user_email{


position: relative;

margin-left: 0px;

margin-top: -18px;

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
# circle
--------------------------------------------------------------*/



#higher{

  margin-bottom: 10px;

  margin-top: 10px;

 color: rgba(0,40,90,0.6) !important;

  font-size: 25px;

  margin-left: 10px;
}






#high{

  margin-bottom: 10px;

  margin-top: 10px;

 color: rgba(192,192,192,0.6) !important;

  font-size: 25px;

  margin-left: 10px;
}













/*--------------------------------------------------------------
# pie chart
--------------------------------------------------------------*/


  .chart-container {
    position: relative;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background: conic-gradient(
      red 0% 45%,
      green 45% 70%,
      lightblue 70% 90%,
      rgba(192,192,192,1) 90% 100%
    );
  }



  .chart-inner {
    position: absolute;
    top: 25px; /* Adjust to control the inner circle size */
    left: 25px; /* Adjust to control the inner circle size */
    width: 150px; /* Adjust to control the inner circle size */
    height: 150px; /* Adjust to control the inner circle size */
    border-radius: 50%;
    background-color: white;
  }

  
  .label {
    position: absolute;
    font-size: 14px;
    font-weight: bold;
  }
  .label.red { color: yellow; top: 5px; left: 110px; }
  .label.green { color: green; top: 110px; right: 5px; }
  .label.lightblue { color: lightblue; bottom: 5px; left: 45px; }
  .label.blue { color: blue; bottom: 60px; left: 5px; }










/*--------------------------------------------------------------
# progress circle
--------------------------------------------------------------*/




.progress-circle {
    position: relative;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: conic-gradient(skyblue 0% 70%, #ddd 70% 100%);
}

.progress-circle::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 80%;
    height: 80%;
    background-color: #fff;
    border-radius: 50%;
    transform: translate(-50%, -50%);
}

.progress-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 14px;
    color: #333;
    text-align: center;
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

</style>
</head>
<body>


<!------------------------------------------overlay content--------------------------------------------------->

<div style="overflow-y: hidden;overflow: hidden;">

<div style="" class="  row">

<div id="overlay" class="col-md-3">

<div class="overlay-content">




 <a href="index.php" class="button_home" ><img src="assets/icons/Vector.png"> Home<span id="date"><?php echo date("F d, Y");?></span></a><br>

 <a id="active" href="" class="button_dashboard"><img src="assets/icons/round-dashboard.png"> Dashboard</a><br>

<?php 
if (isset($_SESSION['business_id'])) {

echo'<a href="postadvert.php"><img src="assets/icons/healthicons_person.png"> Post product<i class="fa fa-caret"></i> </a><br>';
echo'<a href="mylistings.php" > <img src="assets/icons/material-symbols_box-add-outline.png"> My listing</a><br>';

}
?>
<a href="profile.php"><img src="assets/icons/icon-park-outline_add-pic.png"> Profile</a><br>

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


<a href="Logout.php" class="button_logout"><img src="assets/icons/icon-park_logout.png"> Logout</a>

<br><br><br>
</div>



 </div>




  <div class="col-md-9">

<div class="container">

<div class=" row"> 
  
  <div class="col-md-6">
 
<?php if (isset($_SESSION['business_id'])) {
    //Check if user is a vendor
 $username = $_SESSION['business_name'];

 $useremail = $_SESSION['business_email'];

}

    //Check if user is a service provider
if (isset($_SESSION['sp_id'])) {

  $sp_id = $_SESSION['sp_id'];

 $username = "<a style='text-decoration:none;color:black' href='sp_details.php?sp_id=$sp_id'>".$_SESSION['sp_name']."</a>";

 $useremail = $_SESSION['sp_email'];

}
    //Check if user is a buyer
if (isset($_SESSION['id'])) {

 $username = $_SESSION['name'];

 $useremail = $_SESSION['email'];



}
?>
<br>
  <h6>Overview</h6>

 

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

  

    

<img id="user_image" src="<?php echo $vendorImg;?>">

<span id="user_name"> <?php echo $username?></span><br>

<small style="" class="user_email" id="user_email"><?php echo $useremail;?></small>
<?php

require 'engine/configure.php';
if (isset($_SESSION['business_id'])) {
$you = $_SESSION['business_id'];
$getnotification = mysqli_query($conn,"select * from vendor_notifications where recipient_id ='".htmlspecialchars($you)."'");
echo'<a href="vendor-notification.php"><span class="bell">&nbsp; <i class="fa-solid fa-bell"></i>';
$countNotifications = $getnotification->num_rows;
if ($countNotifications>0) {
?>
<span class="notification"><?php echo$countNotifications;?>
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
$getnotification = mysqli_query($conn,"select * from buyer_notifications where recipient_id ='".htmlspecialchars($you)."'");
echo'<a href="buyer-notifications.php"><span class="bell">&nbsp; <i class="fa-solid fa-bell"><span class="notification">';
$countNotifications = $getnotification->num_rows;
if ($countNotifications>0) {
?>
<?php echo$countNotifications;?>
   <?php   }  } ?>

   </span></i></span></a>

  </div>


</div>



<div class="container">


    <div  id="label">

    <div class="row">
      
    <div class="col-md-8">
      
   
    <div id="request">

      <h6>Total request</h6>

      <p>10, 680</p><br>

      <i id="deals" class="fa fa-star"></i>  <span id="star"><span style="color: red;"> -12.76</span> than last month</span>

    </div>
    
    <div  id="request">
      
 <h6>Total listings</h6>

      <p>40, 080</p><br>

      <i id="listings" class="fa fa-star"></i> <span id="star"><span style="color:green;"> +343</span> than last month</span>


    </div>

    <div  id="request">


       <h6>Done Deals</h6>

      <p>10, 680</p><br>

      <i id="deals" class="fa fa-star"></i>  <span id="star"><span style="color:red;"> -12.76</span> than last month</span>



    </div>

<div id="bar-chart">

  <br>
  
<h6>Bar chart</h6>



            <canvas id="myChart" style="width:100%;max-width:800px"></canvas>


</div>



    </div>


   <div class="col-md-4">
     
<div style="border:2px solid rgba(0,0,0,0.1);padding: 5px;border-radius: 10px;">
     <h6>Previous month performance</h6> 

      

<div class="chart-container">
  <div class="chart-inner"></div>
  <div class="label red">&nbsp;</div>
  <div class="label green">&nbsp;</div>
  <div class="label lightblue">&nbsp;</div>
  <div class="label blue">&nbsp;</div>


 </div> 




<div class="row">
 <div class="col-md-6 col-6"><i class="fa fa-shopping-cart"></i><span style="font-size:12px;"> Added to cart</span></div>
 <div class="col-md-6 col-6"><i class="fa fa-eye"></i> <span style="font-size:12px;">Views</span></div>
<div class="col-md-6 col-6"><i class="fa fa-share-alt"></i><span style="font-size:12px;"> shares</span></div>
<div class="col-md-6 col-6"><i class="fa fa-comments"></i><span style="font-size:12px;"> Reviews</span></div>
</div>




</div>

    </div>



    </div>




<br>

<div class="row">
  
<div class="col-md-4" id="audience">

<div style="border:2px solid rgba(0,0,0,0.1);padding: 5px;border-radius: 10px;">
  <h6>Reached Audience</h6><br>

 <span><i id="higher" class="fa fa-circle"></i><b> 70% audience</b></span>

<br>

 <span><i id="high" class="fa fa-circle"></i><b> 30% audience</b></span>



<img src="assets/img/circle.JPG">

</div>
</div>

<div class="col-md-4" id="target">

<div style="border:2px solid rgba(0,0,0,0.1);padding: 5px;border-radius: 10px;">

  <h6><b>Target</b></h6>

 <span>

<i id="higher" class="fa fa-circle"></i><b> 50% Target reached</b></span><img src="assets/img/Group3.png">

</div>

</div>

<div class="col-md-4">
<div style="border:2px solid rgba(0,0,0,0.1);padding: 5px;border-radius: 10px;">

  <h6 id="Engagements"><b>Engagements</b></h6><br>

<div class="progress-circle">

<span class="progress-text">70% Interaction</span>

</div>
    </div>


</div>

</div>














     </div>













  </div>



</div>

</div>
  <script src="assets/js/Chart-pie.js"></script>

  <script src="assets/js/Chart.js"></script>
</body>
</html>
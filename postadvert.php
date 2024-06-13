
<?php session_start();
if (!isset($_SESSION["business_id"])) { 
echo"<script>location.href='dashboard.php'</script>";
exit();
}
date_default_timezone_set('Africa/Lagos');
date_default_timezone_get();
?>




<?php 
if (!empty($_SESSION["id"])) {
$date = $_SESSION['date'];
$myid = $_SESSION['id'];
}

if (!empty($_SESSION["business_id"])) {
$business_date = $_SESSION['business_date'];
$business_id = $_SESSION['business_id'];
}

if (!empty($_SESSION["sp_id"])) {
$sp_date = $_SESSION['sp_date'];
$sp_id = $_SESSION['sp_id'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>E-stores | Post product </title>
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

.close{

  float: right;
  color:white;
  border-radius: 50%;
  background-color:black;
  padding:3px 8px;
  cursor: pointer;
}

@media only screen and (max-width:767px){
#btn-duration{

margin:17px 1px;
opacity: 0.7;
}
}


#date{

float: right;margin-right: 13px;
}

@media only screen and (max-width:767px){

#btn-denomination{

margin:15px 1px;

opacity: 0.7;

}

}


.btn-accordion{

  font-size: 13px;

  border:1px solid transparent;

  box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.3);

  transition: 0.3s ease-out;

  width: 70%; 
}




@media only screen and (max-width:767px){


.btn-accordion{

  font-size: 13px;

  border:1px solid transparent;

  box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.3);

  transition: 0.3s ease-out;

  width: 100%; 

  margin: 10px 0px;
}


}


select:focus{

  outline: 2px solid skyblue;
}





ul{

  list-style-type: none;

  display: inline-block;


}

ul li{

border:1px solid rgba(0,0,0,0.4);

padding:5px 10px;

border-radius: 50%;

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

.active{

  display: none;
}


.popup{

  z-index: 2;

  height: 150px;

  width: 480px;

  font-size: 13px;

  transform: translate(-50% ,-50%);

  background-color: white;

  background-color: white;

  position: fixed;

  top: 20%;
left: 50%;

  transition: 0.3s ease-in;


}





.popup .btn-sucess{

  
  color: white !important;
  font-size: 13px !important;
}


#loader{
  height: 50px;
  width: 50px;
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





.computer_details label{
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
margin-right:31px;
font-size: 12px;
}


#battery{

  font-size: 11px;
}

}


@media only screen and (max-width:468px){


input::placeholder{


  text-align:left;
}

}




#user_image{

  height: 80px;

  width: 80px;

  border-radius: 50%;

  padding: 5px;

  border:2px solid skyblue;


}





#user_name{
position: relative;

font-weight: bold;

font-size: 14px !important;
}



#user_email{

position: relative;

left:13%;

top:-37px;

font-size: 12px !important;

}



@media only screen and (min-width:498px) and (max-width:767px){



#user_email{


position: relative;

margin-left:-46px;

top: -34px !important;
font-size: 13px !important;




}



}







@media only screen and (min-width:768px) and (max-width:1203px){



#user_email{


position: relative;

margin-left:0px !important;

margin-top: -14px;
font-size: 12px !important;




}



}









.col-md-2 select{

  font-size: 12px;
  margin-top: 10px;

  text-align-last: center;
}

@media only screen and (max-width:767px){


.col-md-2 select{


  text-align-last:left;
}



}


@media only screen  and (min-width:498px) and (max-width:767px){

#user_email{

position: relative;

left:22%;

top:-16px;

font-size: 12px !important;

}

}






.col-md-6{

  font-size: 13px;
  margin-top: 10px;

}



.col-md-6 h6{

  font-weight: bold;

  font-size: 15px;
}


.col-md-9 h6{

  font-size: 15px;
  font-weight: bold;
}


label{

  font-size: 13px;
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
z-index:1;
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

  top: -54px;


}





.button_dashboard{

  margin-top: 10px;
}

.button_logout{

  margin-top: 10px;
}


.button_logout:hover{

  text-decoration: none;

  color:red !important;
}


</style>
</head>
<body>


<!------------------------------------------overlay content--------------------------------------------------->
<div style="overflow: hidden;">

<div style="" class="row">


  <div id="overlay" class="col-md-3">

<div class="overlay-content">
<a href="index.php" class="button_home" ><img src="assets/icons/Vector.png"> Home<span id="date"><?php echo date("F d, Y");?></span></a><br>
<a href="dashboard.php" class="button_dashboard"><img src="assets/icons/round-dashboard.png"> Dashboard</a><br>
<a id="active" href=""><img src="assets/icons/healthicons_person.png"> Post product<i class="fa fa-caret"></i> </a><br>
<a href="mylistings.php"><img src="assets/icons/material-symbols_box-add-outline.png"> My listing</a><br>
<a href="profile.php"><img src="assets/icons/icon-park-outline_add-pic.png"> Profile</a><br>
<a href="messages.php">Messages</a><br>
<?php if (!empty($_SESSION["sp_id"])) {

?>
<a href="services-provided.php">Service Provided</a><br>
<?php
$sp_id = $_SESSION['sp_id'];

 }

 else{
 echo'<a href="sold-history.php">Sold History</a><br>';

 }

?>
<hr>

<br>
<a href="logout.php" class="button_logout"><img src="assets/icons/icon-park_logout.png"> Logout</a><br>
</div>




 </div>

<div class="col-md-9">
<div class="container">
<div class="row"> 
<div class="col-md-6">
<br>
<h6>Post your product</h6>

  <p><input type="checkbox" onclick="discount()" name="Discount">  Discount sales</p>

  <p><input type="checkbox" onclick="foreign()" name="foreign"> Foreign products</p>

</div>

  <div class="col-md-6">
    
<?php

    require 'engine/configure.php';
    
    $vendor = mysqli_query($conn,"select * from vendor_profile where id = '$business_id'");

    if ($vendor) {
     
     while ($dataVendor = mysqli_fetch_array($vendor)) {

      $vendorName = $dataVendor['business_name'];

      $vendorImg = $dataVendor['business_image'];

     }

    }

     ?>
    

<img id="user_image" src="<?php echo $vendorImg;?>">

<span id="user_name"> <?php echo $_SESSION['business_name'];?></span><br>

<small style="" class="user_email" id="user_email">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['business_email'];?></small>

<?php

require 'engine/configure.php';
if (isset($_SESSION['business_id'])) {
$you = $_SESSION['business_id'];
$getnotification = mysqli_query($conn,"select * from vendor_notifications where recipient_id ='".htmlspecialchars($you)."'");
echo'<a href="vendor-notification.php"><span class="bell">&nbsp; <i class="fa-solid fa-bell"></i><span class="notification">';
$countNotifications = $getnotification->num_rows;
if ($countNotifications>0) {
?>
<?php echo$countNotifications;?>
<?php    }  }  ?>
</span></span></a>


  </div>


</div>




<div id="popup" class="popup active">
<a class="close"  onclick="verify_id()">&times;</a>  

<form method="post" id="formPopup" enctype="multipart/form-data">
<div class="row jumbotron">
<div class="col-md-6">
<h4>Upload passport / Selfie</h4> 
<p>Please upload a passport size photograph or a selfie to continue. This to reduce spamming and phising. All sellers are required to  upload a valid ID card and a selfie or passport size photograph.</p>
<input type="hidden" name="sid" value="<?php echo$_SESSION['business_id']?>">
<input type="hidden" name="verified" value="0">
<input  type="file" name="img" accept="image/*" capture='camera'>
<br>
<br></div>

<div class="col-md-6">
<h4>Upload Valid ID</h4>
<p>Please upload any valid ID card. Verification process takes about 6-24 hrs for new sellers account to be active, please bear with us.</p>
<input type="file" name="valid_id">


<br>
<br>  
</div>
<button name="submit" style="font-size:13px;" class="btn btn-success form-control">Submit</button>
<div align="center" style="display: none;" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>
</div>
<br>

</form>
</div>


<br>

<h6>Product details</h6>

<div  class="row">
  
<div class="col-md-6">

<form id="form-product">

 <input type="text" class="form-control" name="product_name" placeholder="....Write product Name">

</div>


<div class="col-md-2">

<select name="product_category" style="text-transform: capitalize;" class="form-control">

<option>Choose Category</option>

<?php

require 'engine/configure.php';

$query_category = mysqli_query($conn,"SELECT e_auto_categories FROM categories");

while ($row = mysqli_fetch_array($query_category)) {
   
?>
<option value="<?php echo$row['e_auto_categories']?>"><?php echo$row['e_auto_categories']?></option>

<?php

}

?>
</select>


</div>

<div class="col-md-2">
<select style="text-transform: capitalize;" name="product_color" class="form-control">
  <option>blue</option>
    <option>Brown</option>
      <option>Red</option>
        <option>Yellow</option>
          <option>Pink</option>
            <option>Purple</option>
              <option>White</option>
                <option>Gold</option>
                  <option>Black</option>
                    <option>Green</option>
                      <option>Magenta</option>
                        <option>Orange</option>
</select>

</div>


</div>


<br>
<h6>Address details</h6>

<div class="row">

<div class="col-md-6"><select name="product_location"  style="font-size: 12px;text-transform: capitalize;"class="form-control">
            <option selected="" value="">Entire Nigeria</option>
        <option value="Kwara">Kwara</option>
        <option value="Kogi">Kogi</option>
          <option value="Oyo">Oyo</option>
            <option value="Kano">Kano</option>
              <option value="Enugu">Enugu</option>
              <option value="Ebonyi">Ebonyi</option>
                <option value="Owerri">Owerri</option>
                  <option value="FCT-Abuja">FCT-Abuja</option>
                    <option value="Osun">Osun</option>
                    <option value="Ogun">Ogun</option>
                      <option value="Lagos">Lagos</option>
                        <option value="Port-Harcourt">Port-Harcourt</option>
                        <option value="Bauchi">Bauchi</option>
                          <option value="Benue">Benue</option>
                            <option value="Borno">Borno</option>
                              <option value="Cross-River">Cross-River</option>
                                <option value="Delta">Delta</option>
                                  <option value="Edo">Edo</option>
                                  <option value="Imo">Imo</option>
                                    <option value="Ondo">Ondo</option>
                                      <option value="Niger">Niger</option>
                                        <option value="Sokoto">Sokoto</option>
                                          <option value="Zamfara">Zamfara</option>
                                          <option value="Kebbi">Kebbi</option>
                                          <option value="Kaduna">Kaduna</option>
                                          <option value="Abia">Abia</option>
                                           <option value="Adamawa">Adamawa</option>
                                            <option value="Akwa-Ibom">Akwa-Ibom</option>
                                            <option value="Anambra">Anambra</option>
                                            <option value="Bauchi">Bauchi</option>
                                            <option value="Gombe">Gombe</option>
                                            <option value="Pleateau">Pleateau</option>
                                            <option value="Rivers">Rivers</option>
                                            <option value="Nassarawa">Nassarawa</option>



        <br>
</select></div>

<div class="col-md-6">

  <input class="form-control" type="text" name="product_address" placeholder="Street / Estate / Neighbourhood"></div>

</div>

<br>
<h6>Price details</h6>

<div class="row">


  <div class="col-md-3"><input style="font-size:13px" class="form-control" type="number" min="1" minlength="4" name="product_price" id="product_price" placeholder="Price"></div>

  <div class="col-md-3"><select name="product_denomination" id="btn-denomination" class="btn btn-accordion">

    <option value="">Denomination</option>
   <option value="200">200</option>
    <option value="500">500</option>
    <option value="1000">1000</option>
    


  </select> </div>

  <div class="col-md-3"></div>

  <div class="col-md-3">

    <select style="padding:8px;border-radius:3px;" id="discount_hide" class="btn-accordion active" name="discount">
     <option value="">How many percentage</option>
     <option value="10">10</option>
     <option value="20">20</option>
     <option value="30">30</option>
     <option value="40">40</option>
     <option value="50">50</option>
    <option value="60">60</option>
    <option value="70">70</option>
    <option value="80">80</option>
    <option value="90">90</option>

  </select>

</div>


</div>
<br>


<h6>Phone number</h6>

<div><input style="font-size:13px;" class="form-control" type="number" min="1" minlength="4" name="phone_number" placeholder="Phone number"></div>

<br>
<input style="display: none;" type="checkbox" onclick="installment()" name=""> <label><b style="font-size:13px;display: none;">Installment</b></label>

<div class="active"  id="installment_plan">



<h6>Select payment methods</h6>   

<div class="payment_dates">

 <br> <a id="weekly"  class="btn btn-accordion " onclick="btn_weekly()">Weekly <i class="fa fa-caret-down"></i></a><br><br>
  
<div class="drop_down_weekly active">

 <?php
   
   for ($i=1; $i < 42; $i++) { 
     
     if ($i % 2 ==0) {

        echo "<ul><li><a name='week' id='".$i."' class='week'>".$i."</a></li></ul>";

     }
   }

    ?>




  </div>

  <br><a id="Monthly"  class="btn btn-accordion " onclick="btn_monthly()" >Monthly</a><i class="fa fa-caret-down"></i><br><br>

<div class="drop_down_monthly active">
 <?php
   
   for ($i=1; $i <13; $i++) { 
     
     if ($i % 2 ==0) {

          echo "<ul><li><a name='month' id='".$i."' class='month'>".$i."</a></li></ul>";

  


     }
   }

    ?>


</div>


  </div>



   </h6>

<div class="row">
<div class="col-md-4"> <a type="button" class="btn btn-accordion" onclick="ini_pay()">Initial payment   <i class="fa fa-caret-down"></i></a>

<div class="initial_payment_dropdown active">  <br>

<input style="font-size:13px;" type="number" min="1" id="initial_payment"  name="initial_payment" class="form-control" placeholder="Initial payment">  <br>

</div>

</div>


<div class="col-md-4">   

<select id="btn-denomination" style="padding: 8px;" class="btn-accordion">

   <option value="">Denomination</option>
    <option value="200">200</option>
    <option value="500">500</option>
    <option value="1000">1000</option>


  



</select>



</div>




</div><br>

<div class="row">

<div class="col-md-4"> 

<a type="button" class="btn btn-accordion" onclick="sub()">Subsequent payment  <i class="fa fa-caret-down"></i></a>

<div id="" class="sub_payment_dropdown active">

<br>

<input style="font-size: 13px;" type="number" id="subsequent_payment" name="subsequent_payment" min="1" class="form-control" placeholder="Subsequent payment">

</div>

</div>

<div class="col-md-4"> 
<a type="button" class="btn btn-accordion" onclick="btn_duration()">Duration  <i class="fa fa-caret-down"></i></a>
<div class="duration_form active">
<br><input type="number" style="font-size:13px;" name="duration" min="1" class="form-control " id="duration"  placeholder="Duration">
</div>
</div>
<div class="col-md-4"> 
<div id="demo" class="collapse">
</div>

</div>

</div>

</div>

<br>
<span class="active" id="discount_hide"><b>How long will the discount last</b><input type="text" name="discount_time"></span>

<br>

<br>


<h6>Description</h6>
<textarea style="font-size: 12px;" name="product_details"  rows="5" class="form-control" wrap="physical" placeholder="Describe your product"></textarea><br>
<br>
<label class="form-control"  style="text-align: center;background-color: rgba(192,192,192,0.8);width: 100%;padding:15px;"><small  id="file-label"  style="font-size: 12px;padding: 1px;background-color: rgba(0,0,0,0.6);color: white;">Choose a file</small><br></span><span id="fileName"></span><input style="display: none;" type="file" class="form-control" name=""  onchange="updateFileName(this)"></label><br>

</div>

<input type="hidden" name="user_id" value="$_SESSION['business_id'">
<input type="hidden" name="sold" value="0">
<input type="hidden" name="gift_picks" value="0">
<input type="hidden" name="deals" value="0">
<input type="hidden" name="views" value="0">
<input type="hidden" name="likes" value="0">
<input type="hidden" name="featured" value="0">
<div id="bom"><div id="cy">
<div style="float: right;">
 
<?php 
require 'engine/configure.php';
$getverification = mysqli_query($conn,"select * from verify_seller where sid ='".htmlspecialchars($_SESSION['business_id'])."' and verified = 1 ");
if ($getverification->num_rows==0) {?> 
<a type="submit" name="verify_id" onclick="verify_id()" class="btn btn-success"> Verify ID </a>
<?php }else{?>
<input type="submit" name="submit" value="Submit" class="btn btn-success">
<div align="center" style="display: none;" id="loading-image"><img id="loader" height="50" width="50" src="loading-image.GIF"></div>
<?php }?>
</div>
</form>
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript">

$('#form-product').on('submit',function(e){

        e.preventDefault();

        $("#loading-image").show();
        
        var formdata = new FormData();

        alert('Are you sure to submit this?');

      $.ajax({

            type: "POST",

            url: "postads-process.php",

            data:new FormData(this),

            cache:false,

            processData:false,

            contentType:false,

             success: function(response) {

             $("#loading-image").hide();

if (data==1) {
                swal({
                       text:"Item(s) uploaded successfully",
                      icon:"success",

              });
                
               $('#bom').load(location.href + " #cy");
               $("#form-product")[0].reset();
               
              } 

      else{
          swal({icon:"error",
                text:response

  }); 
        }

            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });





</script>




<script type="text/javascript">
  
function updateFileName(input) {
var fileName = input.files[0].name;
  document.getElementById('file-label').innerText = fileName;
}

</script>


<script type="text/javascript">
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
  


function installment() {
 $("#installment_plan").toggleClass("active");}

function discount() {
  $("#discount_hide").toggleClass("active");}

function verify_id() {
$('#popup').toggleClass('active');
}
</script>

<script>
  
$('#formPopup').on('submit',function(e){

        e.preventDefault();

        $("#loading-image").show();
        
        var formdata = new FormData();

      $.ajax({

            type: "POST",

            url: "seller-verify.php",

            data:new FormData(this),

            cache:false,

            processData:false,

            contentType:false,

             success: function(data) {

             $("#loading-image").hide();

            

if (data==1) {

          
              swal({
                       text:"Image upload successful. We will revert back shortly",
                      icon:"success",

              });
                
               $('#bom').load(location.href + " #cy");
               $("#formExperience")[0].reset();
               
} 

else{
          swal({

            icon:"error",
            text:data}); 
 }

            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });





</script>

<script>
  
function btn_weekly(){
$('.drop_down_weekly').toggleClass('active');
}

function btn_monthly(){
$('.drop_down_monthly').toggleClass('active');
}

function ini_pay(){
$('.initial_payment_dropdown').toggleClass('active');
}

function sub(){
$('.sub_payment_dropdown').toggleClass('active');
}

function btn_duration() {
$('.duration_form').toggleClass('active');
} 

</script>






<script>
  
$('.month').on('click',function() {
var month = $(this).attr('id');
var price = $('#product_price').val();
var math = Math.round(price/month);
$('#initial_payment').val(math);
$('#subsequent_payment').val(math);
$('#duration').val(month);
});

</script>



<script>
  
$('.week').on('click',function() {
var week = $(this).attr('id');
var price = $('#product_price').val();
var math = Math.round(price/week);
$('#initial_payment').val(math);
$('#subsequent_payment').val(math);
$('#duration').val(week);

});

</script>



</body>
</html>
<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<title>E-stores | vendor sign up </title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/flickity.min.css">
       <link rel="stylesheet" href="assets/css/btn_scroll.css">
          <link rel="stylesheet" href="assets/css/overlay.css">
    <link rel="stylesheet" href="assets/css/cart.css">
  <script src="assets/js/sweetalert.min.js"></script> 
  <script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/flickity.pkgd.min.js"></script>
<style type="text/css">

body{

	font-family: poppins;

}



#think{
margin-left: 210px !important;

}

@media only screen and (max-width:497px){
#think{
margin-left: 110px !important;

}
}



.btn-default{
background-color:#4788c8;
color: white;
float: right;
}

#back{
  cursor:pointer; 

}

#loader{

  height:50px;

  width:50px;
}

/*--------------------------------------------------------------
# style file
--------------------------------------------------------------*/

input[type=file]{

display: none;

}


select{

  width: 47%;

  margin-right: 17px;

  margin-bottom:20px;

  box-shadow: 0px 0px 5px rgba(0,0,0,0.4);

  font-size: 13px;

  border:1px solid transparent;

  opacity: 0.7;

padding: 4px;

text-transform: capitalize;
}


@media only screen and (max-width:767px){

select{

width: 100%;

}


}







label{

  border: 1px solid rgba(0,0,0,0.1);



  background-color:rgba(192,192,192,0.4); 

align-content: center;

height: 51px;

width: 100%;

padding: 2px;

padding-left:;

text-align: center;

color:black;



font-size:13px;

cursor: pointer;

}




label:hover{

opacity: 0.5;}




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

color: white !important;

background-color: skyblue;

padding: 5px;


}


.nav_login{



font-size: 13px;

color: black;



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
	width:85%;
	padding: 5% 5%;
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

font-size: 13px;

}


.main span{

	font-size: 13px;
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
	width:85%;
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
<span style="float: right;"><a href="login.php" class="nav_login" style="text-decoration: none;color:;">Login</a>
<a class="nav_signup" style="text-decoration: none; color:;">Sign up</a></span></p>
<div id="thinking"><b style="text-align:">Think of it? Buy it now</b></div>
</div>
<br>
<div class="main">
<h6>Sign up</h6>
<div style="text-align: center">
<small style="">Enter Your Credentials to sign up</small>
</div>
<form method="post" id="signup_sp">
<div class="first-form">
<input type="text" class="form-control" placeholder="Name" name="sp_name"><br>

<input type="text" class="form-control"  placeholder="Email"  name="sp_email"><br>

<select name="category" class="category">
<option value="">Service category</option>
<option value="information technology">Information technology</option>
<option value="mechanic">Mechanic</option>
<option value="vulganizer">Vulganizer</option>
<option value="teaching">Teaching</option>
<option value="plumbing services">Plumbing services</option>
<option value="electrical/inverter services">Electrical / Inverter services</option>
<option value="cleaning/laundy/fumigation">Cleaning / Laundry / Fumigation</option>
<option value="carpentry services">Carpentry Services</option>
<option value="appliances electronics">Appliances Electronics</option>
<option value="Ac/refrigeration services">AC /Refrigeration Services</option>
</select>

<span class="speciality"></span><br>

<input type="text" class="form-control"  placeholder="Experience (years)"  name="sp_experience"><br>
<textarea  class="form-control"  placeholder="Bio"  name="sp_bio"></textarea><br>

</div>
<div id="hide" class="hide">


<input type="password" class="form-control"  placeholder="Password"  name="sp_password"><br>
<input type="password" class="form-control"  placeholder="Confirm Password"  name="confirm_password"><br>
<input type="number" class="form-control"  min="1" minlength="12" placeholder="Phone number"  name="sp_phonenumber1"><br>
<input type="number" class="form-control" min="1" minlength="12"  placeholder="Phone number(Optional)"  name="sp_phonenumber"><br>
<input type="text" class="form-control" min="1" minlength="12"  placeholder="Location"  name="sp_location"><br>

<input type="hidden" value="0" name="sp_ratings">

<input type="hidden" value="0" name="verified">

<small style="font-size: 12px;">Upload photo</small><br>
<label><i id="file-label" class="fa-solid fa-upload"></i><input type="file" class="form-control" name="imager"  id="imager" onchange="updateFileName(this)"></label><br>



<p>Have an account?  <a href="login.php">Log In</a><span style="float: right;"><a id="back" onclick="back()">Go back</a></span></p>
<button id="btn-signup" class="btn btn-info form-control">Sign up</button>
</div>
<div align="center" style="display: none;" id="loading-image"><br><img id="loader" src="loading-image.GIF"></div>
</form>

<button class="btn btn-default form-control">Continue</button>
</div>
</div>
<br>

<?php

include 'footer.php';


?>

<script type="text/javascript">
$('#signup_sp').on('submit',function(e){
e.preventDefault();
$("#loading-image").show();
$('#btn-signup').prop('disabled', true);
var formdata = new FormData();
$.ajax({
 type: "POST",
url: "engine/sp_signup.php",
data:new FormData(this),
cache:false,
processData:false,
contentType:false,
success: function(response) {
$("#loading-image").hide();
if (response==1) {
swal({
        text:"A verification link has been sent to the email provided",
        icon:"success",

              });

              $("#signup_sp")[0].reset();

              $('input:file').val("");

               $('input').css('border-color','skyblue');
            } 
else{
      swal({

         icon:"error",
        text:response
      });
            $('#btn-signup').prop('disabled', false);
            $('input').css('border-color','red');
 }
},
            error: function(jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
}

        })

    });
</script>

<script type="text/javascript">
$('#hide').hide();  
  $('.btn-default').on('click',function() {
$('.first-form').slideUp();
$('#hide').slideDown().show();
$('.btn-default').hide();
});
</script>


<script type="text/javascript">
  
function back() {
$('.first-form').slideDown().show();
$('#hide').slideUp().hide();
$('.btn-default').show();
}
</script>










<script type="text/javascript">
	function updateFileName(input) {
var fileName = input.files[0].name;
	document.getElementById('file-label').innerText = fileName;
}</script>



<script type="text/javascript">

$('.speciality').html('<select name="speciality"><option value="">Select Category</option></select>');
 
$('.category').on('change',function() {

var category = $(this).val();
if (category=='information technology') {

$('.speciality').html('<select name="speciality"><option value="web developer">Web developer</option><option value="UI UX designer">UI UX designer</option><option value="Graphics designer">Graphics designer</option></select>');}


else if (category=='mechanic') {
$('.speciality').html('<select name="speciality"><option value="motorcycles">Motorcycles</option><option value="trucks">Trucks</option><option value="vehicles">Vehicles</option><option value="buses">Buses</option></select>');}


else if (category=='vulganizer') {
$('.speciality').html('<select name="speciality"><option value="truck">Trucks</option><option value="buses">Buses</option><option value="motorcycles">Motorcycles</option><option value="vehicles">Vehicles</option></select>');}

else if (category=='teaching') {
$('.speciality').html('<select name="speciality"><option value="primary schools">primary schools</option><option value="secondary schools">secondary schools</option><option value="tertiary institutions">tertiary institutions</option></select>');}

else if (category=='household') {
$('.speciality').html('<select name="speciality"><option value="plumber">plumber</option><option value="bricklayer">bricklayer</option><option value="painter">painter</option><option value="gardener">Gardener</option></select>');}

else if (category=='electrical/inverter services') {
$('.speciality').html('<select name="speciality"><option value="electrical installations">electrical installations</option><option value="electrical repairs">electrical repairs</option><option value="fixtures/fittings/outlets">fixtures/fittings/outlets</option><option value="inverter repair/installation">inverter repair/installation</option><option value="prepaid meter install">prepaid meter install</option></select>');}

else if (category=='plumbing services') {
$('.speciality').html('<select name="speciality"><option value="plumbing repair/ install">plumbing repair/ install</option><option value="drain/leaks fixing">drain/leaks fixing</option><option value="pumping machine">pumping machine</option><option value="toilet repairs">toilet repairs</option><option value="water treatment/tank washing">water treatment/tank washing</option></select>');}

else if (category=='Ac/refrigeration services') {
$('.speciality').html('<select name="speciality"><option value="ac gas filling">ac gas filling</option><option value="ac repair and installations">ac repair and installations</option><option value="refrigerator repair">refrigerator repair</option><option value="freezer repair">freezer repair</option><option value="water dispenser">water dispenser</option><option value="cold room servicing">cold room servicing</option></select>');}


else if (category=='appliances electronics') {
$('.speciality').html('<select name="speciality"><option value="washing machine">washing machine</option><option value="blender">blender</option><option value="excercise equipment">excercise equipment</option><option value="gas/electric cooker">gas/electric cooker</option><option value="microwave">microwave</option><option value="tv-installation/mounting/repair">tv-installation/mounting/repair</option><option value="fan">fan</option><option value="home theater">home theater</option></select>');}

else if (category=='cleaning/laundy/fumigation') {
$('.speciality').html('<select name="speciality"><option value="indoor cleaning">indoor cleaning</option><option value="outdoor cleaning">outdoor cleaning</option><option value="fumigation">fumigation</option><option value="laundry service">laundry service</option></select>');}


else if (category=='carpentry services') {
$('.speciality').html('<select name="speciality"><option value="windows and doors">windows and doors</option><option value="cabinetry">cabinetry</option><option value="furniture">furniture</option><option value="roofing">roofing</option></select>');}


else{
$('.speciality').html('<select name="speciality"><option value="">Select Category</option></select>')}


});


</script>

<!------------------------------------------btn-scroll--------------------------------------------------->

<a class="btn-down" onclick="topFunction()">&#8593;</a>

<script src="assets/js/scroll.js" type="text/javascript"></script>

<script src="assets/js/overlay.js" type="text/javascript"></script>
</body>
</html>




<?php session_start(); ?><?php

if (!isset($_SESSION['admin_id'])) { ?>
  
<script>

alert("You are not admin");

setTimeout(function() {

window.location.href ='login.php';
  
},2500);

</script>

<?php } ?>


<!DOCTYPE html>
<html>
<head>

<title>E-stores | admin</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

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
  


body{font-family: poppins;}

h1 img{

  margin-left: 10px;
}


#btn-changepassword{

  background-color: rgba(255,165,50,1);
}




.nav_signup,.nav_login{

opacity: 0;
display: none;

}


table tbody tr td{

font-size: 0.8rem;

text-transform: capitalize;

padding: 8px;

text-align: center;



}


table tbody tr td img{

width: 100px;

height: 80px;



}



table tbody tr td a{

font-size: 0.8rem !important;




}



table thead tr th{

font-size: 0.7rem;

opacity: 0.6;

text-transform: capitalize;

text-align: center;

}






table{

width: 100%;
border-collapse: collapse;
margin-top: 30px;

}


#th-action{

  width:19%;
}


#th-id{

  width:5%;
}






#think{
margin-left: 210px !important;

}

@media only screen and (max-width:797px){
#think{
margin-left: 120px !important;

}
}




#user_type_home select{

padding: 5px 10px;

border:1px solid transparent;

box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.3);

font-size: 0.8rem;

}



#user_type_home select:focus{

outline: 2px solid skyblue;

}




input[type=search]{



border:1px solid transparent;

box-shadow: 0px 0px 4px rgba(0,0,0,0.3);

font-size: 0.8rem;

}

#btn-search{

  font-size: 10px;
  border-radius:0px 13px 13px 0px;
  margin-left: -80px;
  padding: 7px 8px;
  position: relative;
z-index: 9;
color: white !important;
}


#user,#love,#carting{

  display: none !important;

  opacity: 0;
}

#popup-password{
background-color: rgba(248,248,248,0.3);  
background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 400px;
padding:5px;
z-index: 99;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;

}



#popup-dollar{
background-color: rgba(248,248,248,0.3);  
background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 400px;
padding:5px;
z-index: 99;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;

}







#popup-password.active,#popup-dollar.active,#popupAccount.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }

#close-password,.close-password,#close-dollar{
float: right;
background-color: black;
color: white;
padding:0px 7px;
border-radius: 50%;
cursor: pointer;


}


#popup-password h6{
  
font-weight: bold;
font-size: 0.8rem;
color: #17a2b8;

    }









ul{

  list-style-type: none;
}

ul li{

  display: block;

  margin: 20px 0px;

  font-size: 0.8rem;

  font-weight: bold;
}




ul li{

cursor: pointer;


}

.active{

opacity:0;

}

.active-button{

  background-color:white;

  padding: 10px;

  border:1px solid transparent;

  box-shadow: 0px 0px 4px rgba(0,0,0,0.3);

  
}


.btn-success{

 padding: 10px;

}


.link-active,#link-acive{

  background-color: skyblue;

  padding: 10px;

  border-radius: 15px;

  
}




@media only screen and (max-width:498px){

.category_select{

  font-size: 13px;
  margin-left:8px;
  height: 33px;
    width: 125px;
  font-weight: bold;
  text-transform: capitalize;
  border:1px solid transparent;
  box-shadow: 0px 0px 3px rgba(0,70,90,0.5);
}


}






.category_select{

  font-size: 13px;
  margin-left: 20px;
  height: 33px;
  font-weight: bold;
  text-transform: capitalize;
  border:1px solid transparent;

  box-shadow: 0px 0px 3px rgba(0,70,90,0.5);
}






.h6{

  font-size: 13px;
  font-weight: bold;
}


#discount{
background-color: rgba(255,195,50,0.4);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position:relative;
top:45px;
font-weight: bold;
padding:3px;
left: 80%;


font-size:13px;

} 




.nav_signup{


border:1px solid none;
border-left:1px solid white;
border-left-color: rgba(192,192,192,1);
margin-left:0px;
font-weight: normal !important;



}


#main{

background: linear-gradient(to top right,rgba(0,70,90,0.9),rgba(0,44,70,1)),url(assets/img/coca_cola.png);
background-size: cover;
background-position: center;

width: 100%;

height: 80px;

margin-top: 50px;

}


#main h6{

color: white;

text-align: center;

font-weight: bold;

position: relative;

top: 35px;

text-transform: uppercase;

font-size: 16px;


}

@media only screen and (max-width:767px){

#main h6{

top: 20px;


}


}


/*--------------------------------------------------------------
# product list
--------------------------------------------------------------*/



#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding:0px;

width:190px;

display: inline-block;
margin:1em 1em;

}

@media only screen and (max-width:498px){


#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding: 0px;

width:185px;

display: inline-block;
margin:1em 1.5em;

}



}





/*--------------------------------------------------------------
# view icon
--------------------------------------------------------------*/

#noviews{

position:relative;
top:45px;
left:0px;
background-color: rgba(0,0,0,0.8);
color: white;
font-weight: bold;
padding: 7px;
z-index: ;
font-size:11px;

}



 
#views{

position:relative;
top:45px;
left:-37px;
background-color: rgba(0,0,0,0.8);
color: white;
font-weight: bold;
padding: 7px;
z-index: ;
font-size: 11px;

}




.discount_main{

  padding-top: 10px;

  margin-top: 15px;

  width: 100%;

  height: 50px;

  background-color: rgba(192,192,192,0.4);


  border:1px solid transparent;

  box-shadow: 0px 0px 5px rgba(0,0,0,0.3);

  text-align: center;
}


.discount_main p{ 
font-size: 13px;
}




.nav_login{



margin-left:80px;
font-weight: normal !important;

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








#coca_cola img{

  
width:100%;


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
  justify-content: space-between;*/ }


/*--------------------------------------------------------------
# anchor category
--------------------------------------------------------------*/



@media only screen and (max-width:480px){







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


opacity:;


}


/*--------------------------------------------------------------
# navigation search bar button
--------------------------------------------------------------*/



/*--------------------------------------------------------------
# section product  mobile
--------------------------------------------------------------*/




/*--------------------------------------------------------------
# product list
--------------------------------------------------------------*/


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


  padding: 10px 30px;

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

  display: none;






}

.footer{

  margin-top: 30px;
}




@media only screen and (max-width:1200px){

.button_navigation{

display: none;

}





}

</style>
</head>
<body>


<?php include 'nav.php'; ?>
<?php include 'overlay.php';?>

<br>





<br>




<br>

<div style="padding: 20px;">

<div class="row">

<div class="col-md-2">

<div id="main">

<h6>Welcome Admin</h6>

</div>

<br><br>

<ul>
   <li class="link-active"><a style="color: black;opacity: 0.9;" href="admin.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
<li><a onclick="dollar()"><i class="fa fa-money"></i> Dollar rate ($)</a></li>
<li><a style="color: black;opacity: 0.9;" href="admin-notify.php"><i class="fa fa-envelope"></i> Messages</a></li>
   <li>    
<a style="cursor: pointer;" onclick="settings()"><i  class="fa fa-gear"></i> Settings &gt;</a>
<ul id="subsettings" class="active">
<li><a onclick="togglepassword()">Change Password</a></li>
<li><a style="text-decoration:none;color:black;opacity: 0.7;" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
</ul>    
</li>

</ul>


<br>

</div>

<div class="col-md-10">

<input type="search" name="q" id="q" class="form-control" placeholder="Filter users">
<br>

<div id="user_type_home">
<select name="user_type" id="user_type" style="float: right;">
<option selected="" value="buyer">Buyer</option>
  <option value="service provider">Service Provider</option>
  <option value="vendor">Vendor</option>
</select>

</div>

<div id="table">



</div>


</div>
</div>
</div>


<div id="popup-password">
<a onclick="togglepassword()" id="close-password">&times;</a>
<h6 align="center" id="h6">Change Password</h6>
<hr>
<div class="container">

<?php


require 'engine/configure.php';
 $sql="select * from admin where admin_id='".htmlspecialchars($_SESSION['admin_id'])."'";
   $dbc=mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($dbc)) {
   $myid=$row['admin_id'];
    $mypassword=$row['admin_password'];
    
    
  
  }
    
 ?>

  <form method="POST" id="changepassword" enctype="multipart/form-data" >
  <input type="hidden" name="id" value="<?php echo$_SESSION['admin_id']?>">
  <input style="font-size:14px;" type="password" name="opassword" id="opassword" class="form-control" value="" placeholder="Enter old password"><br>
  <input style="font-size:0.8rem;" type="password" name="password" id="password" class="form-control" value="" placeholder="Enter new password"><br>
  <input style="font-size:0.8rem;" type="password" name="cpassword" id="cpassword" class="form-control" value="" placeholder="Confirm password" >
  <label style="font-size:0.8rem;">User name: <b>Admin</b></label> 
  <input type="submit" name="submit" id="btn-changepassword" value="Update password" class="btn btn-changepassword form-control" style="color: white;font-size:0.7rem !important;"><br>
<div align="center" style="display: none;" id="loading-image"><img id="loader" height="50" width="50" src="loading-image.GIF"></div>
</form>
</div>
 <br> 

</div>

<!------------------------------------Dollar rate---------------------------------->

<div id="popup-dollar">
<a onclick="dollar()" id="close-dollar">&times;</a>
<h6 align="center" id="h6"><b style="color:skyblue;">Enter dollar rate</b></h6>
<hr>
<div class="container">
<form id="form-dollar">
<input type="text" name="dollar_rate" id="dollar_rate" style="border:1px solid transparent;box-shadow : 0px 0px 5px rgba(0,0,0,0.3);" class="form-control" placeholder="$ Enter dollar rate"><br>
<button class="btn btn-warning form-control">Update</button>
<div align="center" style="display: none;" id="loading-image"><img id="loader" height="50" width="50" src="loading-image.GIF"></div>
</form>
</div>


 <br> 

</div>



<!------------------------------------------footer--------------------------------------------------->


<?php
include 'footer.php';
?>



<script type="text/javascript">
function togglepassword() {
var popup = document.getElementById('popup-password');
popup.classList.toggle('active');
}

</script>



<script type="text/javascript">
function dollar() {
var popup = document.getElementById('popup-dollar');
popup.classList.toggle('active');

}

</script>




<script type="text/javascript">
var postData = "text";
$('.btn-warning').on('click',function(e){
var dollar_rate = $("#dollar_rate").val();
e.preventDefault();
$("#loading-image").show();
$.ajax({
 type: "POST",
url: "engine/add-dollar.php",
data:  $("#form-dollar").serialize(),
cache:false,
contentType: "application/x-www-form-urlencoded",
success: function(response) {
$("#loading-image").hide();
if (response==1) {
swal({
text:"Dollar rate has been modified",
icon:"success",
});
$("#popup-dollar").hide(1000);
}
else{
swal({
icon:"error",
text:response
 });
$("#form-dollar")[0].reset();

}
 },
error: function(jqXHR, textStatus, errorThrown) {
 console.log(errorThrown);
}

        });

    });

</script>



<script type="text/javascript">
var postData = "text";
$('#btn-changepassword').on('click',function(e){
var password = $("#password").val();
e.preventDefault();
$("#loading-image").show();
$.ajax({
type: "POST",
url: "engine/edit-password.php",
data:  $("#changepassword").serialize(),
cache:false,
contentType: "application/x-www-form-urlencoded",
success: function(response) {
$("#loading-image").hide();
if (response==1) {
swal({
 text:"Password has been modified",
  icon:"success",
});
$("#popup-password").hide(1000);             
}
else{
 swal({

 title:"Oops!!", 
icon:"error",
text:response
});
 $("#form-signup").find('input:text').val('');
$("#form-signup").find('input:password').val('');
$("#form-signup").find('input:email').val('');
$('input:checkbox').removeAttr('checked');
 }
 },
error: function(jqXHR, textStatus, errorThrown) {
console.log(errorThrown);

            }

        })

    });





</script>


<script type="text/javascript">

$("#loading-image").hide();
$("#q").on('keyup',function() {
var x = $('#q').val();
var user_type = $('#user_type').val();
if (x=='') {$("#reset").hide();}
else{
$("#reset").show();
}
getData(user_type,x);
});

$('#user_type').on('change',function(e) {
var user_type = $('#user_type').val();
if (user_type !='all') {
getData(user_type);
}
});

$(document).on('click','.btn-success',function(e) {
e.preventDefault();
var page = $(this).attr('id');
var user_type = $('#user_type').val();
var x = $('#q').val();
if (page!='') {
$('.btn-success').removeClass('active-button');
$(this).addClass('active-button');
}

getData(user_type,x,page);
  
});

function getData(user_type,x,page) {
$.ajax({
url:"admin-engine.php",
type:"POST",
data:{'user_type':user_type,'q':x,'page':page},
success:function(data) {
$("#loading-image").hide();
$("#table").html(data).show();

  }


});


};



</script>



<script>
  
$('#user_type').trigger('change');

</script>


<script>
$(document).ready(function(){
    $(document).on('click','.btn-danger',function(e){
        if(!confirm('Are you sure you want to delete this message?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});

</script>


<script>

$(document).on('click','.check_all',function() {

 var isChecked = $(this).prop('checked');

 $('.checkbox').prop('checked', isChecked);

 if (isChecked) {

 $('.delete_all').css("opacity","1");

}

else{

 $('.delete_all').css("opacity","0");


}
 
});


</script>




<!------------------------------------------btn-scroll--------------------------------------------------->

<a class="btn-down" onclick="topFunction()">&#8593;</a>

<script src="assets/js/scroll.js"></script>

<script src="assets/js/overlay.js"></script>

<script>
  
function settings() {
 
$("#subsettings").toggleClass("active");

}

</script>




<script type="text/javascript">
var postData = "text";
$(document).on('click','.delete_all',function(e){
  if(!confirm('Are you sure you want to delete this message?')){
            e.preventDefault();
            return false;
       
var user_type = $("#user_type").val();
var id = $(".check").val();
e.preventDefault();
$("#loading-image").show();
$.ajax({
 type: "POST",
url: "engine/delete-all.php",
data:{'id':id,'user_type':user_type},
cache:false,
contentType: "application/x-www-form-urlencoded",
success: function(response) {
$("#loading-image").hide();
if (response==1) {
swal({
text:"These members have been deleted successfully",
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

 }

    });

</script>


















</body>
</html>
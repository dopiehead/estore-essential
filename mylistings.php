
<?php session_start();

require 'engine/get-dollar.php';

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

.category{

  text-transform: capitalize;
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


/*--------------------------------------------------------------
# view icon
--------------------------------------------------------------*/

#noviews{

position:relative;
top:45px;
left:7px;
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
left:-28px;
background-color: rgba(0,0,0,0.8);
color: white;
font-weight: bold;
padding: 7px;
z-index: ;
font-size: 11px;

}



#count{


color:white;
background-color: red;
border-radius: 50%;
padding:0px 6px;
font-weight: bold;
position: absolute;
right:;
margin-top: -5px;
font-size: 10px;
z-index: 1;

}



/*--------------------------------------------------------------
# discount styles
--------------------------------------------------------------*/

#discount{
background-color: rgba(255,195,50,0.4);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position:relative;
top:40px;
font-weight: bold;
padding:3px;
left: 75%;

font-size:13px;

} 



.btn-info{
  font-size: 12px;
}


@media only screen and (max-width:497px){

.btn-info{
  font-size: 12px;
  padding:3px 8px;
}


}

.loader{
  width:50px;
  height:50px;
}

/*--------------------------------------------------------------
# user picture
--------------------------------------------------------------*/


#user_image{

  height: 80px;

  width: 80px;

  border-radius: 50%;

  padding: 5px;

  border:2px solid skyblue;


}

.simple{

color:white !important;

}


#addx,.addx{

color:white !important;
font-family:poppins;
cursor: pointer;
font-size: 12px !important;
background:#17a2b8;
border:none; 
padding:8px;
margin: 1px 3px 1px 3px;
box-shadow:0px 2px 8px rgba(0,40,90,0.6);
border-radius:5px; 


}

#addx:hover,.addx:hover,#addx:focus,.addx:focus,{

  opacity: 0.6 !important;
}


/*--------------------------------------------------------------
#iitem container
--------------------------------------------------------------*/



#package{

background-color:white;padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);


width:200px;



display: inline-block;
margin:1em 2em;

}

#close-popup{

  float:right;
  color:white;
  font-size: 18px !important;
  cursor: pointer;
  box-shadow: 0px 0px 5px rgba(0,0,0,0.4);
  padding: 0px 7px;
  border-radius: 50%;
  background-color:black;
  background-color:black;
}



.edit{

  
  font-size: 12px;
  color: white !important;
  cursor: pointer;
  z-index:;
  position: absolute;
  background-color:#17a2b8;
  padding: 2px 5px;



}


#header_edit{

border-bottom: 2px solid rgba(0,0,0,0.2);
padding: 10px;
font-weight: bold;
color: #17a2b8;
font-size: 13px;


}







/*--------------------------------------------------------------
# Edit popup
--------------------------------------------------------------*/


.edit-page{
background-color: white;  
background-color: white;  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 600px;
height:500px;
padding:5px;
z-index:1;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
transition: 0.3s;
display: none;
font-size:0.7em !important;

}




.edit-page input[type=text]{

  border:1px solid transparent;
  box-shadow: 0px 0px 4px rgba(0,0,0,0.5);
}


#interactions{

  margin-top: 50%;

  box-shadow: 0px 8px 5px rgba(0,0,0,0.7);

  padding:3px;

  font-size: 12px;


}



#myview,#myshare,#myheart{
  color:white !important;
  background-color: skyblue !important;
  padding:2px 5px;
}



@media only screen and (max-width:497px){

.edit-page{

width: 460px;
height: 500px;
font-size: 12px;
z-index: 999;


}



}





#close{

font-size: 12px;
position: absolute;
top: 15px;
left: 93%;
color:white;
cursor: pointer;



}
#close:hover, #close:focus{
opacity: 0.6;
border: none;
outline: none;
 outline: none;

}



#wrap.active{

background-color: rgba(0,0,0,0.6);

}


#wrap {

overflow-y: hidden;overflow: hidden;

}


/*--------------------------------------------------------------
# Item details
--------------------------------------------------------------*/



#priceitem{

font-family:Poppins;
font-weight: bold;
color:black;
opacity: 0.8;
text-transform:capitalize;
font-size:12px;
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


@media only screen and (max-width:497px){

#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.1);
padding: 8px;

width:198px;

display: inline-block;
margin:1em 1em;
z-index: 1;

}




@media only screen and (min-width:497px) and (max-width:767px){

#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.1);
padding: 8px;

width:198px;

display: inline-block;
margin:1em 1em;

}

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


#active{

  background-color:white;

  width: 100%;

}



@media only screen and (max-width:767px){


#date{


margin-right: 25px;
font-size: 12px;

}



#battery{

  font-size: 11px;
}

}


div p{


  font-size: 12px;

  width: 100%;

  padding: 10px 30px;

  margin-top: 25px;

  border:1px solid rgba(225,225,285,0.8);


  background-color: rgba(225,225,285,0.8);
}








@media only screen and (max-width:468px){


input::placeholder{


  text-align:left;
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

left:18%;

top:-38px;

font-size: 13px !important;

}



@media only screen and (max-width:767px){



#user_email{


position: relative;

margin-left: 8px;

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

  margin-left: 41px;

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

<div class="edit-page"></div>
<!------------------------------------------overlay content--------------------------------------------------->

<div id="wrap">
<div style="" class="  row">
<div id="overlay" class="col-md-3">
<div class="overlay-content">
<a href="index.php" class="button_home" ><img src="assets/icons/Vector.png"> Home<span id="date"><?php echo date("F d, Y");?></span></a><br>
<a href="dashboard.php" class="button_dashboard"><img src="assets/icons/round-dashboard.png"> Dashboard</a><br>

    
<?php 
if (isset($_SESSION['business_id'])) {

echo'<a href="postadvert.php"><img src="assets/icons/healthicons_person.png"> Post product<i class="fa fa-caret"></i> </a><br>';
echo'<a href="mylistings.php" id="active"> <img src="assets/icons/material-symbols_box-add-outline.png"> My listing</a><br>';

}
?>
  <a href="profile.php"><img src="assets/icons/icon-park-outline_add-pic.png"> Profile</a><br>
 <a href="messages.php"><i class="fa fa-envelope"></i> Messages</a><br>


    <?php if (isset($_SESSION["sp_id"])) {
?>
<a href="services-provided.php">Service Provided</a><br>
<?php
 }
?>

<?php if (isset($_SESSION['business_id'])) {
 echo'<a href="sold-history.php">Sold History</a><br>';
}?>
 <hr>
 <br>
<a href="Logout.php" class="button_logout"><img src="assets/icons/icon-park_logout.png"> Logout</a><br>
</div>
</div>
<div class="col-md-9">
<div class="container row"> 
  <div class="col-md-6">
<?php if (isset($_SESSION['business_id'])) {
    //Check if user is a vendor
 $username = $_SESSION['business_name'];
$useremail = $_SESSION['business_email'];
}
//Check if user is a service provider
if (isset($_SESSION['sp_id'])) {
$username = $_SESSION['sp_name'];
$useremail = $_SESSION['sp_email'];
}
    //Check if user is a buyer
if (isset($_SESSION['id'])) {
$username = $_SESSION['name'];
$useremail = $_SESSION['email'];
}
?>

      <br>

      <h6>My listings</h6>

 

     </div>

     <div class="col-md-6">

     
    <?php
    //Check if user is a vendor

if (isset($_SESSION['business_id'])) {
 require 'engine/configure.php';
    $vendor = mysqli_query($conn,"select * from vendor_profile where id = '".htmlspecialchars($userId)."'");
if ($vendor) {
while ($dataVendor = mysqli_fetch_array($vendor)) {
$vendorName = $dataVendor['business_name'];
$vendorImg = $dataVendor['business_image'];}}}?>
<?php
//Check if user is a  service provider
if (isset($_SESSION['sp_id'])) {
require 'engine/configure.php';
  $vendor = mysqli_query($conn,"select * from service_providers where sp_id = '$userId'");
if ($vendor) {
 while ($dataVendor = mysqli_fetch_array($vendor)) {
$vendorName = $dataVendor['sp_name'];
$vendorImg = $dataVendor['sp_image'];}}}
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
// getting vendor notification
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
</div>
</div>
<div id="label">
       <div class="row">
         <div class="col-md-6">
             <input style="font-size: 12px;" type="search" class="form-control q" name="q" id="q"  placeholder="Search by title">

    </div>
 

    <div class="col-md-6">
    <select name="category" id="category" class="category form-control">
    <option value="">Select by category</option>
    
<?php
require 'engine/configure.php';
$query_category = mysqli_query($conn,"SELECT product_category, COUNT(*) AS count FROM item_detail GROUP BY product_category");
while ($row = mysqli_fetch_array($query_category)) {?>
<option value="<?php echo$row['product_category']?>"><?php echo$row['product_category']?></option>
<?php }?>
</select>
</div></div>

<div class="row">
  <div class="col-md-6">
    <select id="price"  class="price form-control">
  <option selected="selected" value="">Price</option>
  <option value="1000">&#8358;1000 $<?php echo round(1000/1500,2); ?></option>
  <option value="5000">&#8358;5000 $<?php echo round(5000/1500,2); ?></option>
  <option value="20000">&#8358;20000 $<?php echo round(20000/1500,2); ?></option>
  <option value="50000">&#8358;50000 $<?php echo round(50000/1500,2); ?></option>
  <option value="100000">&#8358;100000 $<?php echo round(100000/1500,2); ?></option>
 <option value="500000">&#8358;500000 $<?php echo round(500000/1500,2); ?></option>
  <option value="1000000">&#8358;1000000 $<?php echo round(1000000/1500,2); ?></option>
  <option value="10000000">&#8358;10000000 $<?php echo round(10000000/1500,2); ?></option>
<option value="50000000">&#8358;50000000  $<?php echo round(50000000/1500,2); ?></option>
<option value="100000000">&#8358;100000000 $<?php echo round(100000000/1500,2); ?></option></select>
</div>

<div class="col-md-6">
    <select name="sold" id="sold" class="sold form-control"><option value="">Status</option>
        <option value="available">Available</option>
        <option value="sold">Sold</option></select>
      </div></div>
<div>


</div><br>
<div class="myitems"></div>
</div>



<div class="container">
 
<?php
require 'engine/configure.php';
echo"<br><h6><b> Wish List </b></h6>";
$getwishList = mysqli_query($conn,"select item_detail.id,item_detail.product_name,item_detail.product_location,item_detail.product_price,item_detail.product_image,item_detail.views,item_detail.discount,heart_like.buyer,heart_like.itemId from item_detail,heart_like where heart_like.itemId=item_detail.id and heart_like.buyer = '$userId'");

while ($datafound = mysqli_fetch_array($getwishList)) {
echo "<div id='package'>";
$price = $datafound['product_price'];
$dollar = round($price/$dollar_rate,2);
if ($datafound['discount']>0) {
 echo "<span id='discount'>-".$datafound['discount']."%</span>";}
 if ($datafound['discount']==0) {
echo "<span class='' id='noviews'>".$datafound['views']." <i class='fa fa-eye'></i></span>";

}
   
?>


<a href='product-details.php?id=<?php echo$datafound["id"]?>' target='_blank'><img loading='lazy' id='imgitem' src="<?php echo $datafound['product_image']?>"></a>
<?php
            if ($datafound['discount']>0) {


       $price = $datafound['product_price'];

  echo"<span style='text-decoration:line-through;' id='priceitem'>&#8358;".$price."</span> ";
  echo"<span id='priceitem'>&#8358;".round(( $price)-($datafound['discount']/100 * $price))."</span><br>";
  echo"<span style='text-decoration:line-through;' id='priceitem'>$".round($dollar)."</span>";
  echo"<span id='priceitem'>$".round(($dollar)-($datafound['discount']/100 * $dollar))."</span><br>";



}
if ($datafound['discount']==0) {
echo"<span id='priceitem'>&#8358;".$price."</span> ";
echo" <span id='priceitem'>$".($dollar)." </span><br>";


}

echo "<span id='nameitem' style='' ><a target='_blank' href='product-details.php?id={$datafound['id']}'>".$datafound['product_name']."</a></span>"."<br>";
echo"<span id='locitem'>".$datafound['product_location'].""."</span><br>";
 
}

 ?>



















</div>








</div></div>




</div></div>


<script type="text/javascript">


$(document).on('click','.btn-edit',function() {
 var id = $(this).attr('id');
$.ajax({
url:"popup.php",
type:"POST",
data:{'id':id},
success:function(data) {
$(".edit-page").html(data).show();
}
});
});
</script>


<script type="text/javascript">
  
function updateFileName(input) {
var fileName = input.files[0].name;
document.getElementById('file-label').innerText = fileName;
}

</script>

<script type="text/javascript">
$(".myitems").load("myitems.php");
</script>


<script type="text/javascript">
function changeBackground(obj) {
        $(obj).removeClass("bg-success");
        $(obj).addClass("bg-danger");
        $(obj).addClass("simple");

    }

    function saveData(obj, id, column) {
        var customer = {
            id: id,
            column: column,
            value: obj.innerHTML
        }
        $.ajax({
            type: "POST",
            url: "engine/savedata.php",
            data: customer,
            dataType: 'json',
            success: function(data){
                if (data) {

                swal({

                text:"Record saved",
                icon:"success",


                });  
                 
                  $(obj).removeClass("bg-danger");
                 $(obj).removeClass("simple"); 

                  swal({

              text:"Item was modified successfully",

              icon:"success",

            });
                   
                }
            }
       });
    };
    </script>



<script type="text/javascript">
  
$(document).on('click','#close-popup',function() {
 $('.edit-page').hide();
});
</script>


<script type="text/javascript">
$('.btn-pay').on('click',function(e){
if (confirm("Do you want to add this item to featured product list?")) {
var pay = $('.btn-pay').attr('id');
$.ajax({
             type: "POST",
             url: "product-pay.php",
             data: 'id='+pay,
             success: function(data) {
             if (data==1) {
             window.location="payment.php"; 
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
})
}
    });
</script>

<script type="text/javascript">
var postData = "text";
$(document).on('submit','#discount-form',function(e){
 e.preventDefault();
$("#loading-image").show();
var form_data = new FormData();
        $.ajax({

            type: "POST",
            url: "engine/discount.php",
            data: new FormData(this),
            cache:false,
            processData:false,
            contentType:false,
            success: function(response) {
            $("#loading-image").hide();
            if (response==1) {
             swal({
              text:"Saved successfully",
                icon:"success",
                               });
          $("#discount-form").find('input:text').val('');
               $("#discount-form").find('textarea').val('');
               $('input:checkbox').removeAttr('checked'); }
else{

swal({
  icon:"error",
   text:response
 }); 
}
},
error: function(jqXHR, textStatus, errorThrown) {
            console.log(errorThrown); }
 })
      });
</script>

<script type="text/javascript">
$(document).on('submit','#myformx',function(e){
$("#loading-image").show();
$('#submitx').prop('disabled', true);
e.preventDefault();
var formdata = new FormData();
$.ajax({
type: "POST",
url: "addnewpic.php",
data:new FormData(this),
cache:false,
processData:false,
contentType:false,
success: function(response) {
$("#loading-image").hide();
if (response==1) {
 swal({icon:"success",

  text:"Image was uploaded successfully",

});
$('#submitx').prop('disabled',false);
 $("#myformx").find('input:file').val('');
$("#myformx").find('textarea').val('');
$('input:checkbox').removeAttr('checked');

 } else{
swal({
icon:"error",
text:response
 }); 
$('#submitx').prop('disabled',false);
}
},
error: function(jqXHR, textStatus, errorThrown) {
console.log(errorThrown);
 }
})
});
</script>



<script type="text/javascript">
$(document).on('click','.btn-sold',function(e){
if (confirm("Are you sure to update this?")) {
$('.btn-sold').prop('disabled',true);
var del_id = $(this).attr('id');
$.ajax({
type: "POST",
url: "engine/update-sold.php",
data: 'id='+del_id,
success: function(response) {
$('.btn-sold').prop('disabled',false);
if (response==1) {
swal({
text:"Record saved successfully",
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
})
}
    });
</script>





<script type="text/javascript">
$(document).on('click','.btn-gift-picks',function(e){
if (confirm("Are you sure to update this?")) {
$('.btn-gift-picks').prop('disabled',true);
var del_id = $(this).attr('id');
$.ajax({
type: "POST",
url: "engine/update-gift-picks.php",
data: 'id='+del_id,
success: function(response) {
$('.btn-gif-picks').prop('disabled',false);
if (response==1) {
swal({
text:"Record saved successfully",
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
})
}
    });
</script>






<script type="text/javascript">

$("#loading-image").hide();
$(".myitems").load('myitems.php?page=1'); 
$("#q").on('keyup',function() {
var x = $('#q').val();
if (x=='') {$("#reset").hide();}
else{
$("#reset").show();
}
getData(x);
});

$('#category').on('change',function(e) {
$(".myitems").hide();
var x = $('#q').val();
var category = $(this).val();
if (category !='all') {
getData(x,category);
}
});

$('.sold').on('change',function(e) {
$(".myitems").hide();
var x = $('#q').val();
var sold = $('.sold').val();
var category = $('#category').val();
if (category !='all') {
getData(x,category,sold);
}
});

$('.price').on('change',function() {
var sold = $('.sold').val()
var price = $(this).val();
var x = $('#q').val();
var category = $('#category').val();

getData(x,category,sold,price);

});

function getData(x,category,sold,price) {
$.ajax({
url:"myitems.php",
type:"POST",
data:{'q':x,'category':category,'sold':sold,'price':price},
success:function(data) {
$("#loading-image").hide();
$(".myitems").html(data).show();
}

});

};



</script>






<script type="text/javascript">
$(document).on('click','.btn-delete',function(e){
if (confirm("Are you sure to delete this?")) {
$('.btn-delete').prop('disabled',true);
var del_id = $(this).attr('id');
$.ajax({
type: "POST",
url: "engine/del.php",
data: 'id='+del_id,
success: function(response) {
$('.btn-delete').prop('disabled',false);
if (response==1) {
swal({
text:"Item has been deleted",
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
})
}
    });
</script>











</body>
</html>
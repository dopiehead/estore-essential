
<?php
session_start();
require 'engine/configure.php';

$user_id=$_SESSION['id'];

$product_id=$_SESSION['product'];

$txn_ref = time();


if (!isset($_SESSION["id"]) && !isset($_SESSION["business_id"]) && !isset($_SESSION["sp_id"] )) { 
echo"<script>location.href='login.php'</script>";
exit();
}



$mypay=mysqli_query($conn,"select * from comment where id='$product_id' and sid ='$user_id'");
while ($pay=mysqli_fetch_array($mypay)) {
    
$phone_number = $pay['cell'];
$package = $pay['price'] * 0.10;



}



  ?>



<!DOCTYPE html>
<html>
<head>
<title>E-stores | payment </title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/flickity.min.css">
   <link rel="stylesheet" href="assets/css/cart.css">
     <link rel="stylesheet" href="assets/css/overlay.css">
  <script src="assets/js/sweetalert.min.js"></script> 
  <script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/flickity.pkgd.min.js"></script>
<style type="text/css">


  

html{
    
    scroll-behavior:smooth;
}




.col-md-4{

border:1px solid transparent;
box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
padding:15px;margin-bottom:18px;
border-radius:10px;


}


.icon-bar{


  position: fixed;
  top: 75%;
  left: 0px;
  transform: translateY(-50%);
  -ms-transform: translateY(-50%);
}
.icon-bar a{

display:  block;
  text-align: center;
  padding: 10px;
  transition: all 0.5s;
  color: white;
  font-size: 15px;
}

.btn-warning{

  color:white;
}

.facebook{

background-color: #3b5998;
  color: white;

}
.twitter{

background-color: #55acee;
  color: white;
  
}

.instagram{

background-color: #dd4b39;
  color: white;
 
}

.telegram{

background-color: #bb0000;
  color: white;
 
}


.col-md-6{


margin-bottom:32px;
margin-top:20px;
padding:20px;
font-size:14px;
font-family: 'monserrat',sans-serif;
}

.fa{

  font-size:15px;;
}

.container{


  z-index: 55;
}

figure{margin-top: 50px;mb}

#about{
  font-size: 18px;
  font-weight: bold;
  font-family:'monserrat',sans-serif;
margin-top: 20px;
margin-bottom:30px;
color:black;
}



#content{
margin-top:-15px;
font-weight: bold;
font-family:'monserrat',sans-serif;
text-transform:capitalize;
position: absolute;
left:45.4%;
font-size:14px;
color:lightgreen;


}

.gallery:hover{

opacity: 0.8;

text-decoration: none;

color: white;

}


.overlay,#overlay{

  display:none;
}

.open-btn{

display: none;
font-size:31px;
margin-top:-12px;

}
.btn-danger{

	border:1px solid transparent;
	box-shadow: 0px 3px 12px rgba(0,0,0,0.5);
	border-radius:15px;
  padding:8px;
}





#activex{
 border-bottom: 2px solid rgba(255,165,50,1);
 border-radius: none;
   
}



.faq:hover,.how:hover{

opacity: 0.8;

text-decoration: none;

color: white;



}

.how{
font-weight: bold;
font-family:'monserrat',sans-serif;
float: right;

font-size:15px;

cursor: pointer;

color:white;



padding:8px 1px;

margin-right:15px;

}

.gallery{

font-family:'monserrat',sans-serif;
opacity:;
float: right;

font-size:15px;

cursor: pointer;

color:white;



padding:8px 1px;

margin-right:15px;

font-weight: bold;

}



.imgitem{
 margin-top:10%;   
 box-shadow:0px 0px 5px rgba(0,0,0,0.4);
 
 width:60%;
 border-radius:50%;     
}







.btn-down{
    
box-shadow:0px 5px 8px 0px rgba(0,0,0,0.5);    
   

  top: 80%;
  display: none;

border:2px transparent transparent;

margin-left: 15px;

font-weight: bold;

cursor: pointer;

background-color:rgba(255,165,50,1);

color: white !important;

font-size: 20px;

position: fixed;

z-index: 100;



  }

.col-md-3{
    
    display:;
    
}




.group{

}

h6 {

margin-top:30px;

}







h6 span{
padding:8px;
background-color: rgba(0,70,90,0.7);
  color:white;
  margin-bottom:10px;
  
  font-size:16px;

}







.btn-search{
display:none;
  background-color: rgba(255,165,50,1);
    color: white;
     box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.2);

}
.btn-search:focus{

  background-color: rgba(255,165,50,1);
    color: white;
    outline: none;
    box-shadow: none;
}


.btn-search:hover{

    color: white;
    opacity: 0.8;
}



a:hover{

opacity: 0.8;

}

#price{

	text-align:;
	padding:8px;
	color:rgba(255,0,100,0.7);
	font-size:16px;
	font-family:sans-serif;
	font-weight: bold;
}

#duration{

	text-align:;
	padding:8px;
	color:green;
	font-size:16px;
	font-family:sans-serif;
}






h1{
position:;
top:0;

z-index:100;


width:100%;

height:68px;

background-color:rgba(0,70,90,0.7);

padding:10px 8px;
transition:top o.3s;

-webkit-box-shadw:0 0 5px red !;

box-shaow:0 0 5px ;



} 



h1 img{

float:left; 

opacity:1;

height: 60px;

width:135px;

margin-left:-8px;

margin-top: -6px;

}
.faq{

display: block;

float: right;

font-size:15px;

cursor: pointer;

color: white;

border-radius:8px;

padding:8px 3px;

margin-right:13px;
font-weight: bold;
font-family:'monserrat',sans-serif;

}









@media only screen and (orientation:landscape){

  
  

  
 




}









@media only screen and (max-width:497px){

h6 span{
padding:8px;
background-color: rgba(0,70,90,0.7);
  color:white;
  margin-bottom:10px;
  font-size:16px;
  
  

} 



h1 {

height:60px;

}



} 
@media only screen and (max-width:767px){
#open-btn{
   display: block;
  color: white;
  font-size: 35px;
  float: right;
  cursor: pointer;
  
  
}


h1{
 height:63px;

    
    
} 
h1 img{

float:left; 

opacity:1;

height:43px;

width:125px;

margin-left:-3px;
margin-top:-1px;


    
}










#nameitem,#locitem,#conitem,#catitem,#messageitem,#priceitem{
  font-size:15px; 
   margin-left:0px; 
   padding:8px; 
 width:100%;
 word-wrap:break-word;
    
}
#main{
    
height:140px;
    
    
    
}
.imgitem{
    
 box-shadow: 0px 0px 8px rgba(0,0,0,0.4);   
    
    
}


 

.faq,.gallery,.how{

  font-size:14px;
}

h1 img{



}

@media only screen and (max-width:1266px){
    

   
    
    
    
    
    
    
    
    
    
 body{
    
    font-size:18px;
}   
.fa-cc-mastercard,.fa-paypal,.fa-credit-card{
    
 font-size:19px;margin-left:3px;margin-right:3px;   
    
}    
    
.fa-paypal{color:blue;}    
    
 .how,.gallery,.faq{display: none;}
 
.overlay{
height: 0%;
width: 100%;
display: block;
position:absolute;
z-index: 300;
top: 67px;
right: 0;
color:#818181;
background-color:#f5f5f5;
background-color:#f5f5f5;
overflow-x:hidden;
transition: 0.5s;

}
.overlay-content{
position:relative;
top: 20%;
width: 100%;
text-align: center;

}

.overlay a{
padding: 8px;
font-size:15px;
color: #818181; 
display: block;
text-transform: capitalize;
font-weight: bold;
font-family:'monserrat',sans-serif;
transition: 0.3s;
}
.overlay .close-btn{
position: absolute;
top: 2px;
left: 4px;

font-size: 25px;
color:white;
border:1px solid transparent;
background-color:rgba(255,40,30,0.8);
border-radius:50%;
padding:0px 10px;


}

.overlay a:hover,.overlay a:focus{
  color: #f1f1f1;
  text-decoration: none;
}













}









</style>




</head>




<body>


<h1>



<div id="myform" class="overlay" id="overlay">
  <button class="btn close-btn" onclick="closeform()">&times;</button>  
 <div class="overlay-content">

<a href="hoverdowntabs.php" class="" >

<?php 

if (!empty($_SESSION['email'])) {
  


$you=$_SESSION['email'];

require 'connection.php';

$inbox="select * from messages where receiver_email = '$you' and is_receiver_deleted = 0 and has_read = 0 group by sender_email order by id desc ";

$inx =mysqli_query($con, $inbox);

$datafound=$inx->num_rows;



echo "(".$datafound.")<i class='fa fa-envelope'></i> MESSAGES</a>";

}

 ?>






<?php

 if (!empty($_SESSION['email'])) {

echo'

<a href="sport.php" class="" >GALLERY</a>

';





  echo'


<a  href="logoutkwasaf.php" class="" ><i class="fa fa-sign-out"></i> SIGN OUT</a>
 ';



} 


else{

echo'

<a href="newsignup.php" class="" ><i class="fa fa-user"></i> PROFILE</a>

';

}

     ?>










  </div></div>












<?php

 if (!empty($_SESSION['email'])) {echo'

<a  href="logoutkwasaf.php" class="faq" ><i class="fa fa-sign-out"></i> SIGN OUT</a>


 ';


echo'

<a href="sport.php" class="faq" >GALLERY </a>

';






} 


else{

echo'<a href="newsignup.php" class="gallery" ><i class="fa fa-user"></i> PROFILE</a>';

}

     ?>




<a href="hoverdowntabs.php" class="gallery" >

<?php 

if (!empty($_SESSION['email'])) {
  


$you=$_SESSION['email'];

require 'connection.php';

$inbox="select * from messages where receiver_email = '$you' and is_receiver_deleted = 0 and has_read = 0 group by sender_email order by id desc ";

$inx =mysqli_query($con, $inbox);

$datafound=$inx->num_rows;



echo "(".$datafound.")<i class='fa fa-envelope'></i></a>";

}

 ?>




<a class="btn open-btn" id="open-btn" onclick="openform()" ><i style="color: white;font-size:28px;" class="fa fa-align-justify"></i></a>


<?php

if (!empty($_SESSION['email'])) {

 echo'<a href="index.php" style="text-decoration: none;"><img style="" align="" src="mymain.PNG" height="" width=""></a>';
}

else{
  echo'<a href="signup.php" style="text-decoration: none;"><img style="" align="" src="mymain.PNG" height="" width=""></a>';
}





?>

</h1>




<br>


<div class="container">

<div align="center" class="card">

<div class="card-head">

<h6 class="container" align=""><span>Featured Products</span></h6></div><br>

<div class="card-body">

<i style=" " class="fa fa-credit-card"></i>
<i style="color:darkred;" class="fab fa-cc-mastercard"></i>
<i style=" "  class="fab fa-paypal"></i>

<br><br>


<p style="font-family: 'montserrat';font-size:13px;">Each ad can only be promoted once. Package is <b style='color:red;'>10% of the item been paid uploaded</b>. <br>If you still wish to make payment, please continue to the proceed button and click below. <br><br>All featured products will be at the top of every page, all social media platforms including <b style='color:blue'>Facebook, Twitter plus Instagram </b>and Ad list till the duration expires(<b style="color:darkgreen;">4 weeks</b>).</p>

<span id="price">Price: &#8358;<?php echo $package;  ?></span><br>


<span id="duration">Duration: 4 weeks</span><br><br>


<form method="post" action="https://checkout.flutterwave.com/v3/hosted/pay">

<input type="hidden" name="public_key" value="FLWPUBK_TEST-588208bcbb9412e4341e6527c4b95018-X">

<input type="hidden" name="redirect_url" value="https://atemarket.com/response.php">

<input type="hidden" name="amount" value="<?php echo $package;  ?>">

<input type="hidden" name="currency" value="NGN">

<input type="hidden" name="product_id" value="<?php echo$_SESSION['product']?>">

<input type="hidden" name="customer[name]" value="<?php echo$_SESSION['name']?>">

<input type="hidden" name="customer[email]" value="<?php echo$_SESSION['email']?>">

<input type="hidden" name="phone_number" value="<?php echo$phone_number?>">

<input type="hidden" name="tx_ref" value="<?php echo$txn_ref;?>">

<button id='individual' name="individual" id="start-payment-button" onClick="pay()" style="color: white;font-family: sans-serif;font-size:;" class="btn btn-danger ">PROCEED</button>
</form>




</div>



<script>
 
    
    
    
    
    
</script>















</div>






















<script>
      
      
     $(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 20) {
    $('.btn-down').fadeIn();
  } else {
    $('.btn-down').fadeOut();
  }
});



$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 20) {
    $('.btn-down').fadeIn();
  } else {
    $('.btn-down').fadeOut();
  }
}); 
      
      
    
      
  </script>



  <script>
      
    function topFunction() {



  document.body.scrollTop = 0;
  


  document.documentElement.scrollTop = 0;



}
  
      
      
  </script>



<script type="text/javascript">
function openform() {
  document.getElementById("myform").
  style.height="38%";
}

function closeform() {
  document.getElementById("myform").
  style.height="0%";
}
  




</script>

<script type="text/javascript">
$(document).ready(function(){
    $("#delete").click(function(e){
        if(!confirm('Are you sure you want to delete this item?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});

</script>

<script>
  $(window).load(function() {
    $('#over').hide();
    $('#over-parent').hide();
  });
</script>

<script src="https://newwebpay.interswitchng.com/inline-checkout.js"></script>
<br><br>
</body>

</html>

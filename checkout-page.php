
<?php session_start();
error_reporting(E_ALL ^ E_NOTICE);
if (!isset($_SESSION["id"]) && !isset($_SESSION["business_id"]) && !isset($_SESSION["sp_id"] )) { 
echo"<script>location.href='login.php'</script>";
exit();
}
$txn_ref = time();
?>

<?php

require 'engine/configure.php';

$_SESSION['itemId'];
$_SESSION['userid'];
$_SESSION['noofItem'];
$_SESSION['location'];
$_SESSION['buyer'];
?>

<?php



if (isset($_SESSION['business_id']) && !empty($_SESSION['business_id'])) {
$buyer = mysqli_escape_string($conn,$_SESSION['business_id']);
$getbuyer = mysqli_query($conn,"select * from vendor_profile where id='".htmlspecialchars($buyer)."'");
while ($businessRow = mysqli_fetch_array($getbuyer)) {
	$userName = $businessRow['business_name'];
	$userAddress = $businessRow['business_address'];
	$userContact = $businessRow['business_contact'];
	$userEmail = $businessRow['business_email'];
}
}





if (isset($_SESSION['sp_id'])) {
$buyer = mysqli_escape_string($conn,$_SESSION['sp_id']);
$getbuyer = mysqli_query($conn,"select * from service_providers where sp_id='".htmlspecialchars($buyer)."'");
while ($spRow = mysqli_fetch_array($getbuyer)) {
	$userName = $spRow['sp_name'];
    $userContact = $spRow['sp_contact'];
	$userEmail= $spRow['sp_email'];
}

}


if (isset($_SESSION['id'])) {
$buyer = mysqli_escape_string($conn,$_SESSION['id']);

$getbuyer = mysqli_query($conn,"select * from user_profile where id='".htmlspecialchars($buyer)."'");
while ($row = mysqli_fetch_array($getbuyer)) {
	$userName = $row['user_name'];
	$userEmail = $row['user_email'];
}




}

$cart_item = "SELECT cart.itemId,cart.userid,cart.noofitem,cart.lga,cart.location,cart.buyer,item_detail.id,item_detail.views,item_detail.discount,item_detail.user_id,item_detail.product_name,item_detail.product_image,sum(item_detail.product_price) AS product_price ,item_detail.product_category,item_detail.product_location FROM cart,item_detail WHERE cart.itemId=item_detail.id AND cart.buyer = '".htmlspecialchars($buyer)."'";
$item = mysqli_query($conn,$cart_item);


?>

<!DOCTYPE html>
<html>
<head>
	<title>E-stores | checkout page </title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/flickity.min.css">
   <link rel="stylesheet" href="assets/css/cart.css">
     <link rel="stylesheet" href="assets/css/overlay.css">
       <link rel="stylesheet" href="assets/css/btn_scroll.css">
  <script src="assets/js/sweetalert.min.js"></script> 
  <script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/flickity.pkgd.min.js"></script>
<style type="text/css">
body{font-family: poppins;}


h1 img{
	margin-left: 10px;
}



#think{
margin-left: 210px !important;

}

@media only screen and (max-width:797px){
#think{
margin-left: 30px !important;

}
}

.loader{

	width: 50px;
	height: 50px;
}

.btn-default{
background-color:#4788c8;
color: white;
float: right;
  font-size: 13px;
}

.btn-primary{
  cursor:pointer; 
  color: white !important;
  font-size: 13px;

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



.button_navigation:hover{

opacity: 0.8;
text-decoration: none;
color: white;

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
width: 420px !important;


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
}


/*--------------------------------------------------------------
# section cart 
--------------------------------------------------------------*/


#search_page{

  margin-left: -350px;
}



@media only screen and (max-width:498px){


#search_page{

  margin-left: -350px;
  display: none !important;
}

}

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
width: 310px;


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
}


/*--------------------------------------------------------------
# jumbotron
--------------------------------------------------------------*/
.jumbotron h6{

font-weight: bold;

}



.jumbotron p{

font-size: 12px;

font-weight: 400;

}


.jumbotron input,.jumbotron select{

font-size: 12px;



border:1px solid transparent;

}

.user_forms{
	width: 100%;
	margin-top: 30px;
	display: flex;
	align-items: center;
	justify-content: space-between;}


	/*--------------------------------------------------------------
# jumbotron
--------------------------------------------------------------*/


@media only screen and (max-width:767px){

#mysearch{
	display: none !important;
}




.user_forms{
	width: 100%;
	margin-top: 30px;
	display: flex;
	gap: 20px;
	flex-direction: column;
	align-items: center;
	justify-content: space-between;
}


}




.jumbotron{

	margin-top: 30px;
	background-color: rgba(192,192,192,0.4);
}




/*--------------------------------------------------------------
# order summary
--------------------------------------------------------------*/

.order_summary table{

font-size: 12px;

border-collapse: separate;

border-spacing: 8px;



}



.order_summary h6{

	font-size: 13px;

	font-weight: bold;

}

#summary_name{

	font-weight: bold;

	font-size: 11px;

	opacity: 0.6;
}


/*--------------------------------------------------------------
# payment method
--------------------------------------------------------------*/

.payment_method h6{

	font-weight: bold;

	font-size: 13px;



}



.payment_method {

	

	font-size: 12px;



}


.btn-warning{
margin-top: 10px;
	color: white;
	box-shadow: 0px 3px 15px rgba(0,0,0,0.3);
	font-size: 13px;
}




/*--------------------------------------------------------------
# footer
--------------------------------------------------------------*/

.footer h6{

  font-weight: bold;

  font-size: 15px;

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

	<!------------------------------------------Navigation bar--------------------------------------------------->

<?php include 'nav.php'; ?>

<?php include 'overlay.php'; ?>

<br><br>


<?php
while ($product = mysqli_fetch_array($item)) {
$user_id = $product['id'];
$product_name = $product['product_name'];
$product_image = $product['product_image'];
$product_category = $product['product_category'];
$product_name =preg_split('/\s+/', $product['product_name']);
$product_location = $product['product_location'];
$discount = $product['discount'];
$price = $product['product_price'];
$dollar = round($price/1500);
?>



<div class="nav-container container">

<a class="category" href=""><?php echo$product_category?></a><a class="category" href=""><?php echo$product_location?> / <?php echo$product_category?></a><a class="category" style="color: skyblue;" href="">Check out</a>


</div>


	<!------------------------------------------jumbotron--------------------------------------------------->

<div class="container jumbotron">


<!------------------------------------------First part--------------------------------------------------->	

<div class="first-form">
	
<h6>Billing information</h6>

<p>Customer information</p>

<form id="paymentForm">


<div class="row">
<div class="col-md-4"><input type="text" required=""  name="full_name" value="" class="form-control" placeholder="Full name"><br></div>
<div class="col-md-4"><input type="text"  required=""  value="" name="address"  class="form-control" placeholder="Address" ><br></div>
<div class="col-md-4"><input type="number"  required=""  name="phone_number" value="<?php echo$userContact?>" class="form-control" placeholder="Phone number"><br></div><br>

</div>

</div>

<br>
<!------------------------------------------Shipping Address--------------------------------------------------->

<h6>Shipping address</h6>

<p>Street address</p>


<input type="text" class="form-control" name=""  placeholder="Street address"><br>

<div class="row">
<div class="col-md-3"><input type="text"  name="city" class="form-control" value="<?php echo$_SESSION['lga']?>" placeholder="City"><br></div>
<div class="col-md-3"><input type="text" name="state" class="form-control" value="<?php echo$_SESSION['location']?>" placeholder="State"><br></div>
<div class="col-md-3"><input type="text" name="pin_code" class="form-control" placeholder="Pin code"><br></div>
<div class="col-md-3"><input type="text" name="country" class="form-control" placeholder="Country"><br></div>
<br>
</div>








<!------------------------------------------Second part--------------------------------------------------->

<div id="hide" class="hide">

<div>

<h6>Billing address</h6>

<input type="text" class="form-control" name="Billing_address"  placeholder="Billing address"><br>

<textarea style="font-size: 12px;" class=" form-control" name="additional_notes" placeholder="Additional notes" wrap="physical"></textarea>
<input type="checkbox" name="term_agree" checked="" ><span style="font-size: 12px;margin-top: 3px;">&nbsp;I agree with the terms & conditions</span>


<br>

</div>







<br>


<!------------------------------------------order summary--------------------------------------------------->

<div class="container order_summary">


<h6>Order summary</h6>
	

<table><tbody>

<tr>


<?php

$noofitem = $_SESSION['noofItem'];
if ($product['discount']>0) {
$price = $product['product_price'];
$dollar =$product['product_price']/1500;
$discount_price_ngn = round(( $product['product_price'])-($product['discount']/100 * $price));
$discount_price_dollar = round(($dollar)-($product['discount']/100 * $dollar));
}
if ($product['discount']==0) {
$price ="<span id='cart_price'>&#8358;".$price."</span> ";
$dollar=" <span id='cart_price'>$".round($product['product_price']/1500)." </span><br>";}
?>



	
<td id="summary_name"><?php echo implode('&', $product_name);?></td>

<td><?php if ($discount>0) {
    # code...
   echo " $".round(($dollar)-($product['discount']/100 * $dollar))*$noofitem." | &#8358;". round(( $product['product_price'])-($product['discount']/100 * $price))*$noofitem;} else{ echo" &#8358;".$product['product_price']*$noofitem.",  $".round($product['product_price']/1500,2)*$noofitem;}?></td>

</tr>

<tr>
	


<td>Subtotal:</td>

<td><?php if ($discount>0) {
    # code...
   echo" $".$discount_price_dollar*$noofitem." | &#8358;".$discount_price_ngn*$noofitem;} else{ echo$_SESSION['product_price']=" &#8358;".$product['product_price']*$noofitem.",  $".round($product['product_price']/1500,2)*$noofitem;}?></td>


</tr>


<tr>
	


<td>Tax:</td>

<td><span style="color: green;">+ $14.00</span></td>

	
</tr>


<tr>
	


<td>Total</td>

<td><span style="color: green;"><b><?php echo"14"+round($product['product_price']/1500,2)*$noofitem."dollar"; ?></b></span></td>


<td><span style="color: green;"><b><?php echo$_SESSION['product_price'] = (14*1500)+($product['product_price'])*$noofitem."NGN"; ?></b></span></td>
	
</tr>

<?php }?>
	
</tbody>
	
</table>

<br>


	<!------------------------------------------payment method--------------------------------------------------->

</form>

<input type="submit" class="btn btn-warning" name="submit" value="Place order"><a class='btn btn-primary' style="float: right;" onclick="back()">Go back</a>

<div align="center" style="display: none;" id="loading-image"><br><img id="loader" class="loader" src="loading-image.GIF"></div>

</div>


</div>


<button class="btn btn-default form-control">Continue</button>






</div>

</div>






<!------------------------------------------footer--------------------------------------------------->

<?php


echo'<br><br>';

include 'footer.php';


?>

<script type="text/javascript">
	
	$('.numbering').load('engine/item-numbering.php');
</script>

<!------------------------------------------btn-scroll--------------------------------------------------->

<a class="btn-down" onclick="topFunction()">&#8593;</a>

<script src="assets/js/scroll.js" type="text/javascript"></script>

<script src="assets/js/overlay.js" type="text/javascript"></script>

</body>

<script >
	
$('.btn-warning').on('click',function(e) {
e.preventDefault();
var data = $('#paymentForm').serialize();
$.ajax({
 type: "POST",
url: "engine/checkout-process.php",
data: data,
cache:false,
processData:false,
contentType:false,
success: function(response) {
if (response==1) {
window.location.href='payment.php';
}

else{

	swal({
           
           icon:"error",
           text:response

	});
}

}


});


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

<a class=" btn-down" onclick="topFunction()">&#8593;</a>

</html>

<?php  
session_start();
error_reporting(E_ALL ^ E_NOTICE);
require 'engine/configure.php';  
if(isset($_POST["submit"]))  
{ if(!empty($_POST["search"])) {  
  $query = str_replace(" ", "+", mysqli_real_escape_string($conn,$_POST["search"]));
header("location:search-process.php?search=" . htmlspecialchars($query));   
  }  

 }  

 ?>  
<?php
if (isset($_SESSION['business_id'])) {
$buyer = $_SESSION['business_id'];
}
if (isset($_SESSION['sp_id'])) {
$buyer = $_SESSION['sp_id'];
}
if (isset($_SESSION['id'])) {
$buyer = $_SESSION['id'];
}?>

<?php
if (isset($_SESSION)) {
$_SESSION['itemId'];
$noofItem=$_SESSION['noofItem'];
$_SESSION['location'];


}
$seller = mysqli_query($conn,"select * from vendor_profile where id = '".htmlspecialchars($_SESSION['userid'])."'");
if ($seller) {
while ($seller_id = mysqli_fetch_array($seller)) {
$vendor = $seller_id['business_name'];
}
}?>





<!DOCTYPE html>
<html>
<head>
		<title>E-stores | cart page </title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/flickity.min.css">
    <link rel="stylesheet" href="assets/css/overlay.css">
   <link rel="stylesheet" href="assets/css/cart.css">
      <link rel="stylesheet" href="assets/css/btn_scroll.css">
  <script src="assets/js/sweetalert.min.js"></script> 
  <script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/flickity.pkgd.min.js"></script>
<style type="text/css">


body{

	font-family: poppins;

  font-size: 13px;
}

h1 img{

  margin-left: 10px;
}



/*--------------------------------------------------------------
# item styling
--------------------------------------------------------------*/

#think{
margin-left: 210px !important;

}

@media only screen and (max-width:797px){
#think{
margin-left: 30px !important;

}
}



@media only screen and (max-width:498px){


#package{

background-color:white;padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding:0px;

width:205px !important;

position: relative;

display: inline-block;
margin:1em 1em !important;

}



}


@media only screen and (min-width:499px) and (max-width:797px){


#package{

background-color:white;padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding: 10px;

width:230px;

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


/*--------------------------------------------------------------
# item styling cart
--------------------------------------------------------------*/





.nav_signup{


border:1px solid none;
border-left:1px solid white;
border-left-color: rgba(192,192,192,1);
margin-left:0px;
font-weight: normal !important;


}

.nav_login{



margin-left:50px;
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
}


/*--------------------------------------------------------------
# section cart 
--------------------------------------------------------------*/



.cart_header{

	color: skyblue;

	border: 1px solid rgba(192,192,192,0.5);

	border-radius: 50%;

	padding: 10px;

	font-size: 12px;
}


.cart_container {

	margin-top: 40px;
}


.menu_board{

	padding: 30px 15px;

	background-color: rgba(192,192,192,0.3);

	text-align: center;

	box-shadow: 0px 0px 5px rgba(0,0,0,0.4);
}


.menu_board img{

	width: 100px;
}


.menu_board h6{

	font-weight: bold;

	margin-top: 13px;
}


.menu_board p{

	font-size: 12px;

}




.button_shopping{

	color: white !important;

	font-size: 12px;
	padding: 8px;
}


small
{
	margin-top: 8px;
}




/*--------------------------------------------------------------
# section product 
--------------------------------------------------------------*/


#package{

background-color:white;padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding: 10px;

width:210px;

display: inline-block;
margin:1em 1.7em;

}



.section_product h6{

	font-weight: bold;

	font-size: 15px;
}




.section_product{
background-color: white !important;
}







/*--------------------------------------------------------------
# section product  mobile
--------------------------------------------------------------*/






/*--------------------------------------------------------------
# view icon
--------------------------------------------------------------*/

#noviews{

position:relative;
top:45px;
left:10px;
background-color: rgba(0,0,0,0.8);
color: white;
font-weight: bold;
padding: 7px;
z-index: ;
font-size:13px;

display: none;
}



 
#views{

position:relative;
top:45px;
left:-27px;
background-color: rgba(0,0,0,0.8);
color: white;
font-weight: bold;
padding: 7px;
z-index: ;
font-size: 13px;
display: none;
}



.count{position: relative;top:89%;left: 23%;padding:10px;color:white;font-weight: bold;border:1px solid transparent transparent transparent; background-color:rgba(0,0,0,0.8);z-index: 999;}



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

font-size:12px;

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




@media only screen and (max-width:1200px){

.button_navigation{

display: none;

}





}


.cart table{

  width: 100%;
}

.cart{

border:1px solid transparent !important;
}

#cart_image{

margin-top:20px;

width: 130px !important;
}





#rowSummary{

  margin-top: 40px;

  background-color: rgba(192,192,192,0.4) !important;
  padding: 15px 30px;

  


}

#rowSummary .col-md-9, #rowSummary .col-md-3{

  background-color: white;
}



#rowSummary .col-md-9{

 
}





#rowItem{

  margin-top: 20px !important;

  margin-bottom: 20px !important;
}

#details{

  font-size: 12px;
  margin-top: 21px;
  

  font-style: initial !important;

}

.btn-warning{

  font-size: 14px;

  color: white !important;

  font-weight: 700;

  text-transform: uppercase;

}

#cart_discount{

color: rgba(255,165,50,1);

background-color:  rgba(255,165,50,0.3);

padding: 8px;

margin-top: 10px !important;

}

#adds,#subs{

  background-color: rgba(255,165,50,1);
  color: white;
  margin-top: 8px;
}


.delete-button{

  color:red !important;
  cursor: pointer;
}


#cart_name a{

  color:black;
  text-transform: capitalize;
}

#seller{

opacity:0.5;

}


#vendor{

  font-size: 12px;
}

</style>
</head>
<body>


<!------------------------------------------header--------------------------------------------------->
<?php include 'nav.php'; ?>

<?php include 'overlay.php'; ?>

<br>
<br>


<!------------------------------------------Cart--------------------------------------------------->

<?php
require 'engine/configure.php';
?>
<?php
//join table cart and group
$cart_item = "SELECT cart.itemId,cart.userid,cart.noofitem,cart.location,cart.buyer,item_detail.id,item_detail.views,item_detail.discount,item_detail.user_id,item_detail.product_name,item_detail.product_image,item_detail.product_price,item_detail.product_category,item_detail.product_location FROM cart,item_detail WHERE cart.itemId=item_detail.id AND cart.buyer = '".$buyer."'";

$cart = mysqli_query($conn,$cart_item);
$num_cart = $cart->num_rows;

if ($num_cart>0) {
?>
<div id="rowSummary" class="container">
<div id="rowItem" class="row">
<div class="col-md-9">
  <br>
<?php
if (isset($_SESSION['itemId']) && !empty($_SESSION['itemId'])) {
 echo"<span style='float:left'>Cart(".$num_cart.")</span>";
while ($data_cart = mysqli_fetch_array($cart)) {
?><?php   
echo"<table style='width:100%;'><tbody>";
echo "<div class='cart'>";
$price = $data_cart ['product_price'];
$dollar = round($price/1500);
$cart_discount = $data_cart['discount'];
echo"<tr><td style='width:25%;'>";
echo "<a href='product-details.php?id={$data_cart['id']}' target='_blank'><div style=''><img id='cart_image' width='' src=".$data_cart ['product_image'].">"." "."</div></a>";
echo"</td>";
echo"<td>";
echo "<span id='cart_name'><a target='_blank' href='product-details.php?id={$data_cart['id']}'>".$data_cart ['product_name']."</a></span>"."<br>";
?>
<?php echo"<span id='vendor'><span id='seller'>Seller:</span> ".$vendor." </span>";?>
<?php
echo"</td><td style='text-align: center;'>";
if ($data_cart['discount']>0) {
$price = $data_cart['product_price'];
echo"<span id='cart_name' style='text-decoration:line-through;'> &nbsp;&#8358;".$data_cart['product_price']." </span> ";
echo"<span id='cart_price'> &#8358;".round(( $data_cart['product_price'])-($data_cart['discount']/100 * $price))."</span><br>";
$discount_price_ngn = round(( $data_cart['product_price'])-($data_cart['discount']/100 * $price));
echo"<span id='cart_price' style='text-decoration:line-through;'> $".round(($price/1500))."</span>";
echo"<span id='cart_price'> &nbsp;$".round(($dollar)-($data_cart['discount']/100 * $dollar))."</span><br>";
$discount_price_dollar = round(($dollar)-($data_cart['discount']/100 * $dollar));
}
if ($data_cart['discount']==0) {
echo"<span id='cart_price'>&#8358;".$price."</span> ";
 echo" <span id='cart_price'>$".round($price/1500)." </span><br>";}
if ($data_cart['discount']>0) {

echo "<br><span id='cart_discount'>-".$data_cart ['discount']."%</span>";}

?>
<br><br>
<input type="button" value="-" id="subs" class="btn btn-default" style="margin-right: 2%" onclick="subst()">
<input type="text" style="width:50px;text-align: center; margin: 0px;" class="onlyNumber" id="noOfItem" value="<?php echo$_SESSION['noofItem'];?>" name="noOfItem">
<input type="button" value="+" id="adds" onclick="add()" class="btn btn-default">
<?php
echo"</td></tr>";
?> <?php
 echo"</div>";
}
}
  }
?>


</tbody></table>
<br>
<?php  if (isset($_SESSION['itemId']) && !empty($_SESSION['itemId'])) {
?> 
<a class="delete-button remove" id='<?php echo$_SESSION['itemId']?>'><i class='fa fa-trash'></i> Remove</a>
<input type="hidden" id="buyer" class="buyer" value="<?php echo$buyer?>">
</div>
<div class="col-md-3">
<br>
<h6>CART SUMMARY</h6>
<hr>
<div>
<?php    }              ?>
<?php
if (isset($_SESSION['itemId'])) {

require 'engine/configure.php';
  //join table cart and group
$cart_item = "SELECT cart.itemId,cart.userid,cart.noofitem,cart.location,cart.buyer,item_detail.id,item_detail.views,item_detail.user_id,item_detail.product_name,item_detail.product_image,sum(item_detail.product_price) AS price ,item_detail.product_category,item_detail.product_location,item_detail.discount FROM cart,item_detail WHERE cart.itemId=item_detail.id AND cart.buyer = '".$buyer."'";

$cart_sum = mysqli_query($conn,$cart_item);
$num_cart = $cart_sum->num_rows;
if ($num_cart>0) {
while ($cart_data = mysqli_fetch_array($cart_sum)) {
       
            ?>
        <?php   
$price_ngn = $cart_data['price'];
$dlr = round($price_ngn/1500);
$discount_cart = $cart_data['discount'];
?>
<?php

if ($data_cart['discount']>0) {
$price_ngn = $cart_data['price'];
$discount_price_naira = round(( $cart_data['price'])-($cart_data['discount']/100 * $price_ngn));
$discount_price_dlr = round(($dlr)-($cart_data['discount']/100 * $dlr));
}
if ($cart_data['discount']==0) {


 $price_ngn = $cart_data['price'];
$price_ngn ="<span id='cart_price'>&#8358;".$price_ngn."</span> ";
$dlr=" <span id='cart_price'>$".($price_ngn/1500)." </span><br>";}

?>


<br>

<p>Subtotal<span style="float: right;"><?php if ($cart_discount>0) {
    # code...
   echo " $".$discount_price_dollar*$noofItem.", &#8358;".$discount_price_ngn*$noofItem;} else{ echo" &#8358;".$price*$noofItem.",  $".$dollar*$noofItem;}?></span></p>
</div>
<small>Delivery fees not included yet.</small><br>
<hr>
<a  name="submit" href='checkout-page.php' class="btn btn-warning form-control" >CheckOut<?php if ($cart_discount>0) {
    # code...
   echo " $".$discount_price_dollar*$noofItem.", &#8358;".$discount_price_ngn*$noofItem;} else{ echo" &#8358;".$price*$noofItem.",  $".$dollar*$noofItem;}?></a>
<?php

 }

}

?>
<br>
<br>
<span id="details">Returns are easy
Free return within 7 days for ALL eligible items </span>
</div>
</div></div>
<?php
}
else{
?>
<div class="cart_container container">
<span class="cart_header">Cart</span>
</div>
<br>
<div class="container menu_board">
  <div id="menu_board">
  <img src="assets/img/cart_main.png">




<h6>Your Cart Is Empty!</h6>
<p>Browse our category and discover our best deals</p>
<small><a href="deals.php" class="btn btn-primary button_shopping">Start shopping!</a></small>

</div>
</div>

<?php

}

?>

<br><br><br>


<!------------------------------------------Product--------------------------------------------------->

<div class="container section_product">
	<h6>Trending</h6>
<?php
require 'engine/configure.php';
$condition = "SELECT * from item_detail where sold = 0 and user_id !='".$_SESSION['business_id']."' order by id desc limit 8";
$data = mysqli_query($conn,$condition);
$datafound = $data->num_rows;
echo "<table><tbody id='mytable' class='cart'>";

        while($row=mysqli_fetch_array($data))

        {        
            ?>
        <?php   

echo "<div class='container' id='package'>";
$price = $row['product_price'];
require_once 'engine/get-dollar.php';
$dollar = round($price/$dollar_rate);
if ($row['discount']>0) {

 echo "<span id='discount'>-".$row['discount']."%</span>";

 echo "<span class='' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";
}
if ($row['discount']==0) {

 echo "<span class='' id='noviews'>".$row['views']." <i class='fa fa-eye'></i></span>";
}
   echo "<a href='product-details.php?id={$row['id']}&{$row['product_name']}&{$row['product_location']}&{$row['product_category']}&{$row['product_details']}' target='_blank'><div style=''><img loading='lazy' id='imgitem' width='' src=".$row['product_image'].">"." "."</div></a>";

 if ($row['discount']>0) {

$price = $row['product_price'];
echo"<span style='text-decoration:line-through;' id='priceitem'>&#8358;".$price."</span> ";
  echo"<span id='priceitem'>&#8358;".round(( $price)-($row['discount']/100 * $price))."</span><br>";
  echo"<span style='text-decoration:line-through;' id='priceitem'>$".round($dollar)."</span>";
   echo"<span id='priceitem'>$".round(($dollar)-($row['discount']/100 * $dollar))."</span><br>";
}

if ($row['discount']==0) {
echo"<span id='priceitem'>&#8358;".$price."</span> ";
echo" <span id='priceitem'>$".($dollar)." </span><br>";


}

echo "<span id='nameitem' style='' ><a target='_blank' href='product-details.php?id={$row['id']}&{$row['product_name']}&{$row['product_location']}&{$row['product_category']}&{$row['product_details']}'>".$row['product_name']."</a></span>"."<br>";
echo"<span id='locitem'>".$row['product_location'].""."</span><br>";


  ?> 
                <?php


          echo"</div>";      
                
}
        ?>


</tbody></table>

</div>
</div>

<!------------------------------------------footer--------------------------------------------------->

<?php

include 'footer.php';


?>

<script type="text/javascript">
  
function add() {
    var a = $("#noOfItem").val();
    a++;
    if (a && a >= 1) {
        $("#subs").removeAttr("disabled");
    }
    $("#noOfItem").val(a);
};

function subst() {
    var b = $("#noOfItem").val();
    // this is wrong part
    if (b && b >= 1) {
        b--;
        $("#noOfItem").val(b);
    }
    else {
        $("#subs").attr("disabled", "disabled");
    }
};

</script>


<script>

$(document).ready(function(){
  $('.numbering').load('engine/item-numbering.php');
 $('.remove').click(function(){
  if(confirm("Are you sure you want to delete this?"))
  {
   var id = $(this).attr('id');
   var buyer = $('#buyer').val();
   var rowElement =$(this).parent().parent();
  $.ajax({
     url:'engine/remove.php',
     method:'POST',
     data:{'id':id,'buyer':buyer},
    success:function(response)
     {
     if (response==1) {
       swal({
         
         text:"Item(s) has been deleted",
         icon:"success",});
  $('.numbering').load('engine/item-numbering.php');
       rowElement.fadeOut('slow').remove();
      $('.menu_board').load(location.href + "  #menu_board");

} 

else{
swal({
  icon:"error",
  text:response
});

}
}
});
   }
   });
 
});

</script>

<!------------------------------------------btn-scroll--------------------------------------------------->

<a class=" btn-down" onclick="topFunction()">&#8593;</a>

<script src="assets/js/scroll.js" ></script>
<script src="assets/js/overlay.js"></script>


</body>
</html>
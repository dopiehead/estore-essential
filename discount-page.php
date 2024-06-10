<?php  session_start();
require 'engine/get-dollar.php';
 require 'engine/configure.php';  
if(isset($_POST["submit"]))   {  
if(!empty($_POST["search"]))   {  
$query = str_replace(" ", "+", mysqli_real_escape_string($conn,$_POST["search"]));
header("location:search-process.php?search=" .htmlspecialchars($query)); 
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
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>E-stores | Discount page</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/flickity.min.css">
    <link rel="stylesheet" href="assets/css/btn_scroll.css">
    <link rel="stylesheet" href="assets/css/cart.css">
      <link rel="stylesheet" href="assets/css/overlay.css">
  <script src="assets/js/sweetalert.min.js"></script> 
  <script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/flickity.pkgd.min.js"></script>
<style type="text/css">
	

body{font-family: poppins;}


.h6{

	font-size: 13px;
	font-weight: bold;
}

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

/*--------------------------------------------------------------
# compare button
--------------------------------------------------------------*/
.btn-compare{

  margin-left: -2px;
  cursor: pointer;
}

.hide{
  display: none;
  position: absolute;
  color: white ;
  background-color:rgba(0,0,0,0.6);
  margin-top: -23px;
  font-size: 12px;
  padding: 0px 3px;


}


.btn-hover:hover + .hide{

  display: block;




}

#button_navigation img{

  height: 15px;
}

.fa-cart-shopping{

  margin-top: -4px;
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





/*--------------------------------------------------------------
# product discount
--------------------------------------------------------------*/


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


#share{

	height:14px;
	width: 15px;
}



.fa-cart-shopping{

font-size: 14px;


padding:3px;

}







.fa-check{

font-size: 12px;

color: white;

border:1px solid transparent;

border-radius: 50%;

background-color: darkgreen;
padding:3px;

}

/*--------------------------------------------------------------
# Navigation
--------------------------------------------------------------*/
.nav_signup{


border:1px solid none;
border-left:1px solid black;
border-left-color: rgba(192,192,192,1);
margin-left:0px;
color:black !important;

font-weight: normal !important;

}


/*--------------------------------------------------------------
# product list
--------------------------------------------------------------*/



#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding: 10px;

width:240px;

display: inline-block;
margin:1em 1em;

}

@media only screen and (max-width:498px){


#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding: 10px;

width:210px;

display: inline-block;
margin:1em 1em;

}



}


@media only screen and (min-width:499px) and (max-width:797px){


#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding: 10px;

width:250px;

display: inline-block;
margin:1em 1em;

}



}








#coca_cola img{

	
width:100%;


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
color:black;
font-weight: normal !important;

}


/*--------------------------------------------------------------
# navigation bar mobile
--------------------------------------------------------------*/

@media only screen and (max-width:1200px){

.button_navigation{


font-size:12px;

cursor: pointer;

color:black !important;

padding:5px 0px;

margin-right:11px !important;

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
height: 15px;

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
# section product  mobile
--------------------------------------------------------------*/

@media only screen and (max-width:797px){


#package{

width:12.5em;



}


}


/*--------------------------------------------------------------
# product list
--------------------------------------------------------------*/


#priceitem{

font-family:Poppins;
font-weight: bold;
color:black;
opacity: 0.8;
text-transform:capitalize;
font-size:13px;
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




</style>
</head>
<body>

<?php include 'nav.php'; ?>

<?php include 'overlay.php';?>

<br><br>
	<div class="nav-container container">

<a class="category" style="color: skyblue;" href="">Discount deals</a>


</div>


<br><br>

<div class="container">

<div class="row">

<div id="coca_cola" class="col-md-6">

	<img src="assets/img/coca_cola.png">

</div>


<div id="coca_cola" class="col-md-6">

	<img src="assets/img/coca_cola.png">


</div>

</div>

<div class="discount_main">

<p>Discount deals</p>

</div>

<br><br>

<h6><b style="font-size:13px;">Farm products on discount deals</b></h6>

<div class="item_images">



<?php


require 'engine/configure.php';
$condition = "SELECT * from item_detail where sold = 0 and product_category='farm products' and discount > 0";
$data = mysqli_query($conn,$condition);
$datafound = $data->num_rows;
echo "<table><tbody id='mytable' class=''>";

        while($row=mysqli_fetch_array($data))

        {        
            ?>
        <?php   

echo "<div id='package'>";
$price = $row['product_price'];
$dollar = round($price/$dollar_rate);
if ($row['discount']>0) {

 echo "<span id='discount'>-".$row['discount']."%</span>";
 echo "<span class='' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";
}

       if ($row['discount']==0) {

 echo "<span class='' id='noviews'>".$row['views']." <i class='fa fa-eye'></i></span>";
}
   echo "<a href='product-details.php?id={$row['id']}&{$row['product_name']}&{$row['product_location']}&{$row['product_category']}&{$row['product_details']}' target='_blank'><div style=''><img loading='lazy' id='imgitem' width='' src=".$row['product_image'].">"." "."</div></a>";

echo"<span id=''><i class='fa-solid fa-check'></i>"."</span><br>";

 echo"<span style='float:right;color:white;border:1px solid transparent;background-color:rgba(0,0,0,0.5);font-size:10px;padding:2px;margin-top:-20px;' id=''>"."New"."</span>";

   if ($row['discount']>0) {
   $price = $row['product_price'];
  echo"<span style='text-decoration:line-through;' id='priceitem'>&#8358;".$price."</span> ";
  echo"<span id='priceitem'>&#8358;".round(( $row['product_price'])-($row['discount']/100 * $price))."</span><br>";
  echo"<span style='text-decoration:line-through;' id='priceitem'>$".round($price/$dollar_rate)."</span>";
   echo"<span id='priceitem'>$".round(($dollar)-($row['discount']/100 * $dollar))."</span><br>";



}
if ($row['discount']==0) {
echo"<span id='priceitem'>&#8358;".$price."</span> ";
echo" <span id='priceitem'>$".($price/$dollar_rate)." </span><br>";
}
echo "<span id='nameitem' style='' ><a target='_blank' href='product-details.php?id={$row['id']}&{$row['product_name']}&{$row['product_location']}&{$row['product_category']}&{$row['product_details']}'>".$row['product_name']."</a></span>"."<br>";

echo"<span id='locitem'>".$row['product_location'].""."</span><br>";

if ($_SESSION['id']!='' || $_SESSION['business_id']!='' || $_SESSION["sp_id"]!='') {

    if ($row['user_id']!=$_SESSION['business_id']) {
    
  echo"<span style='font-weight:normal;font-size:11px;' id='locitem'><a style='font-weight:normal;font-size:11px;' id='{$row['id']}' class='btn-compare' >Compare</a></span>";
}

  }

else{
 echo"<a style='font-weight:normal;font-size:11px;' id='locitem' id='' disabled class='btn-hover' >Compare</a><span class='hide'>Please <a href='login.php?step=discount-page'>login</a> to use feature</span>";

}
echo"<span style='font-weight:normal;font-size:11px;' id='locitem'>&nbsp;<span style='float:right'><i class='fa-solid fa-cart-shopping'></i>&nbsp;&nbsp;<a href='https://facebook.com/e-stores/product-details.php?id=".urldecode($row['product_name'])."'><img id='share' src='assets/icons/material-symbols_share.png'"."></a>"."".""."</span></span><br>";


  ?> 
                <?php


          echo"</div>";      
                
}
        ?>


</tbody></table>

</div>
</div>
<br><br>
<div class="container">
<h6><b style="font-size:13px;">Hotel use on discount deals</b></h6>
<div class="item_images">
<?php
require 'engine/configure.php';
$condition = "SELECT * from item_detail where sold = 0 and product_category='hotel products' and discount > 0";
$data = mysqli_query($conn,$condition);
$datafound = $data->num_rows;
echo "<table><tbody id='mytable' class=''>";

        while($row=mysqli_fetch_array($data))

        {        
            ?>
        <?php   

echo "<div id='package'>";
$price = $row['product_price'];
$dollar = round($price/$dollar_rate);
if ($row['discount']>0) {
echo "<span id='discount'>-".$row['discount']."%</span>";
echo "<span class='' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";
}

if ($row['discount']==0) {

 echo "<span class='' id='noviews'>".$row['views']." <i class='fa fa-eye'></i></span>";
}
   
echo "<a href='product-details.php?id={$row['id']}&{$row['product_name']}&{$row['product_location']}&{$row['product_category']}&{$row['product_details']}' target='_blank'><div style=''><img loading='lazy' id='imgitem' width='' src=".$row['product_image'].">"." "."</div></a>";

echo"<span id=''><i class='fa-solid fa-check'></i>"."</span><br>";
echo"<span style='float:right;color:white;border:1px solid transparent;background-color:rgba(0,0,0,0.5);font-size:10px;padding:2px;margin-top:-20px;' id=''>"."New"."</span>";

  if ($row['discount']>0) {


       $price = $row['product_price'];
echo"<span style='text-decoration:line-through;' id='priceitem'>&#8358;".$price."</span> ";
echo"<span id='priceitem'>&#8358;".round(( $row['product_price'])-($row['discount']/100 * $price))."</span><br>";
echo"<span style='text-decoration:line-through;' id='priceitem'>$".round($price/$dollar_rate)."</span>";
echo"<span id='priceitem'>$".round(($dollar)-($row['discount']/100 * $dollar))."</span><br>";



}

if ($row['discount']==0) {

echo"<span id='priceitem'>&#8358;".$price."</span> ";

echo" <span id='priceitem'>$".round($price/$dollar_rate)." </span><br>";


}

echo "<span id='nameitem' style='' ><a target='_blank' href='product-details.php?id={$row['id']}&{$row['product_name']}&{$row['product_location']}&{$row['product_category']}&{$row['product_details']}'>".$row['product_name']."</a></span>"."<br>";

 echo"<span id='locitem'>".$row['product_location'].""."</span><br>";


if ($_SESSION['id']!='' || $_SESSION['business_id']!='' || $_SESSION["sp_id"]!='') {

   if ($row['user_id']!=$_SESSION['business_id']) {
    
  echo"<span style='font-weight:normal;font-size:11px;' id='locitem'><a style='font-weight:normal;font-size:11px;'  id='{$row['id']}' class='btn-compare' >Compare</a></span>";
}
   }

else{
 
   echo"<a style='font-weight:normal;font-size:11px;' id='locitem' id='' disabled class='btn-hover' >Compare</a><span class='hide'>Please <a href='login.php?step=discount-page'>login</a> to use feature</span>";

}

echo"<span style='font-weight:normal;font-size:11px;' id='locitem'>&nbsp;<span style='float:right'><i class='fa-solid fa-cart-shopping'></i>&nbsp;&nbsp;<a href='https://facebook.com/e-stores/product-details.php?id=".urldecode($row['product_name'])."'><img id='share' src='assets/icons/material-symbols_share.png'".""."></a>".""."</span></span><br>";



  ?> 
                <?php
echo"</div>";      
                
}
        ?>


</tbody></table>

</div>

<br><br>

<h6><b style="font-size:13px;">Auto parts on discount deals</b></h6>

<div class="item_images">
<?php

require 'engine/configure.php';

$condition = "SELECT * from item_detail where sold = 0 and product_category='autoparts' and discount > 0";
$data = mysqli_query($conn,$condition);
$datafound = $data->num_rows;
 echo "<table><tbody id='mytable' class=''>";
while($row=mysqli_fetch_array($data))

        {        
            ?>
        <?php   

echo "<div id='package'>";
$price = $row['product_price'];
$dollar = round($price/$dollar_rate);
       if ($row['discount']>0) {
echo "<span id='discount'>-".$row['discount']."%</span>";
echo "<span class='' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";
}

       if ($row['discount']==0) {
echo "<span class='' id='noviews'>".$row['views']." <i class='fa fa-eye'></i></span>";
}
   
echo "<a href='product-details.php?id={$row['id']}&{$row['product_name']}&{$row['product_location']}&{$row['product_category']}&{$row['product_details']}' target='_blank'><div style=''><img loading='lazy' id='imgitem' width='' src=".$row['product_image'].">"." "."</div></a>";

echo"<span id=''><i class='fa-solid fa-check'></i>"."</span><br>";
echo"<span style='float:right;color:white;border:1px solid transparent;background-color:rgba(0,0,0,0.5);font-size:10px;padding:2px;margin-top:-20px;' id=''>"."New"."</span>";

if ($row['discount']>0) {
 $price = $row['product_price'];
 echo"<span style='text-decoration:line-through;' id='priceitem'>&#8358;".$price."</span> ";
  echo"<span id='priceitem'>&#8358;".round(( $row['product_price'])-($row['discount']/100 * $price))."</span><br>";
  echo"<span style='text-decoration:line-through;' id='priceitem'>$".round($price/$dollar_rate)."</span>";
 echo"<span id='priceitem'>$".round(($dollar)-($row['discount']/100 * $dollar))."</span><br>";



}

if ($row['discount']==0) {

echo"<span id='priceitem'>&#8358;".$price."</span> ";

echo" <span id='priceitem'>$".round($price/$dollar_rate)." </span><br>";

}

echo "<span id='nameitem' style='' ><a target='_blank' href='product-details.php?id={$row['id']}&{$row['product_name']}&{$row['product_location']}&{$row['product_category']}&{$row['product_details']}'>".$row['product_name']."</a></span>"."<br>";

 echo"<span id='locitem'>".$row['product_location'].""."</span><br>";


if ($_SESSION['id']!='' || $_SESSION['business_id']!='' || $_SESSION["sp_id"]!='') {

   if ($row['user_id']!=$_SESSION['business_id']) {
    
  echo"<span style='font-weight:normal;font-size:11px;' id='locitem'><a style='font-weight:normal;font-size:11px;' id='{$row['id']}' class='btn-compare'>Compare</a></span>";
  }
}

else{
 
   echo"<a style='font-weight:normal;font-size:11px;' id='locitem' id='' disabled class='btn-hover' >Compare</a><span class='hide'>Please <a href='login.php?step=discount-page'>login</a> to use feature</span>";

}


   echo"<span style='font-weight:normal;font-size:11px;' id='locitem'>&nbsp;><span style='float:right'><i class='fa-solid fa-cart-shopping'></i>&nbsp;&nbsp;<a href='https://facebook.com/e-stores/product-details.php?id=".urldecode($row['product_name'])."'><img id='share' src='assets/icons/material-symbols_share.png'></a></span></span><br>";



  ?> 
                <?php


          echo"</div>";      
                
}
        ?>


</tbody></table>

</div>



<br><br>

<h6><b style="font-size:13px;">Building materials on discount deals</b></h6>
<div class="item_images">
<?php
require 'engine/configure.php';
$condition = "SELECT * from item_detail where sold = 0 and product_category='building material' and discount > 0";
$data = mysqli_query($conn,$condition);
$datafound = $data->num_rows;
echo "<table><tbody id='mytable' class=''>";

        while($row=mysqli_fetch_array($data))

        {        
            ?>
        <?php   

echo "<div id='package'>";
$price = $row['product_price'];
$dollar = round($price/$dollar_rate);
if ($row['discount']>0) {
echo "<span id='discount'>-".$row['discount']."%</span>";
echo "<span class='' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";
}
if ($row['discount']==0) {
echo "<span class='' id='noviews'>".$row['views']." <i class='fa fa-eye'></i></span>";
}
   
echo "<a href='product-details.php.php?id={$row['id']}&{$row['product_name']}&{$row['product_location']}&{$row['product_category']}&{$row['product_details']}' target='_blank'><div style=''><img loading='lazy' id='imgitem' width='' src=".$row['product_image'].">"." "."</div></a>";
echo"<span id=''><i class='fa-solid fa-check'></i>"."</span><br>";
echo"<span style='float:right;color:white;border:1px solid transparent;background-color:rgba(0,0,0,0.5);font-size:10px;padding:2px;margin-top:-20px;' id=''>"."New"."</span>";

  if ($row['discount']>0) {
  $price = $row['product_price'];
  echo"<span style='text-decoration:line-through;' id='priceitem'>&#8358;".$price."</span> ";
  echo"<span id='priceitem'>&#8358;".round(( $row['product_price'])-($row['discount']/100 * $price))."</span><br>";
  echo"<span style='text-decoration:line-through;' id='priceitem'>$".round($price/$dollar_rate)."</span>";
  echo"<span id='priceitem'>$".round(($dollar)-($row['discount']/100 * $dollar))."</span><br>";
}
if ($row['discount']==0) {
echo"<span id='priceitem'>&#8358;".$price."</span> ";
echo" <span id='priceitem'>$".round($price/$dollar_rate)." </span><br>";


}
echo "<span id='nameitem' style='' ><a target='_blank' href='product-details.php.php?id={$row['id']}&{$row['product_name']}&{$row['product_location']}&{$row['product_category']}&{$row['product_details']}'>".$row['product_name']."</a></span>"."<br>";

echo"<span id='locitem'>".$row['product_location'].""."</span><br>";
if ($_SESSION['id']!='' || $_SESSION['business_id']!='' || $_SESSION["sp_id"]!='') {
if ($row['user_id']!=$_SESSION['business_id']) {
    echo"<span><a style='font-weight:normal;font-size:11px;' id='{$row['id']}' class='btn-compare' >Compare</a></span>";
}
}

else{
 
   echo"<a style='font-weight:normal;font-size:11px;' id='locitem' id='' disabled class='btn-hover' >Compare</a><span class='hide'>Please <a href='login.php?step=discount-page'>login</a> to use feature</span>";
}

 echo"<span style='font-weight:normal;font-size:11px;' id='locitem'>&nbsp;<span style='float:right'><i class='fa-solid fa-cart-shopping'></i>&nbsp;&nbsp;<a href='https://facebook.com/e-stores/product-details.php?id=".urldecode($row['product_name'])."'><img id='share' src='assets/icons/material-symbols_share.png'"."".""."></a>"."</span></span><br>";



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

<input type="hidden" name="buyer" id="buyer" value="<?php echo$buyer?>">



<script type="text/javascript">
$('.numbering').load('engine/item-numbering.php');
$('.btn-compare').on('click',function() {
var id = $(this).attr('id');
var buyer =$('#buyer').val();
$(".loading-image").show();
$.ajax({
type:"POST",
url:"engine/compare-page.php",
data:{'id':id,'buyer':buyer},
success:function(data) {
$(".loading-image").hide();
window.location.href="compare-product.php?id="+id;
}
    });

});
</script>




<script src="assets/js/overlay.js"></script>

<!------------------------------------------btn-scroll--------------------------------------------------->

<a class="fa fa-arrow-up btn-down" onclick="topFunction()">&#8593;</a>

<script src="assets/js/scroll.js" ></script>



</body>
</html>
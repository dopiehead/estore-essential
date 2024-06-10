
<?php session_start();
 error_reporting(E_ALL ^ E_NOTICE);
 require 'engine/configure.php'; 
 require 'engine/get-dollar.php'; 
if(isset($_POST["submit"]))   {  
if(!empty($_POST["search"]))   {  
$query = str_replace(" ", "+", mysqli_real_escape_string($conn,$_POST["search"]));
header("location:search-process.php?search=" .htmlspecialchars($query)); 
 }  

 }  

 ?>   

<?php

require 'engine/configure.php';
$condition = "SELECT * from item_detail where sold = 0";
if (isset($_GET['search']) && !empty($_GET['search'])) {
$search_page = explode(" ",mysqli_escape_string($conn,$_GET['search'])) ;
foreach ($search_page as $text) {
$condition .= " AND (`product_name` LIKE '%".htmlspecialchars($text)."%' OR `product_details` LIKE '%".htmlspecialchars($text)."%' OR `product_category` LIKE '%".htmlspecialchars($text)."%' OR `product_location` LIKE '%".htmlspecialchars($text)."%')";
     } 

$num_per_page =4;
if (isset($_POST['page'])) {
 $page = $_POST['page'];
}
else{
$page = 1;  
}
$initial_page = ($page-1)*$num_per_page; 
$condition .= " limit $initial_page,$num_per_page";
$data = mysqli_query($conn,$condition);
$datafound = $data->num_rows;
?>
<!DOCTYPE html>
<html>
<head>
	<title>E-stores | <?php echo$text?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/flickity.min.css">
   <link rel="stylesheet" href="assets/css/cart.css">
      <link rel="stylesheet" href="assets/css/btn_scroll.css">
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

@media only screen and (max-width:797px){
#think{
margin-left: 30px !important;

}
}
.nav_signup{


border:1px solid none;
border-left:1px solid white;
border-left-color: rgba(192,192,192,1);
margin-left:0px;
font-weight: normal !important; 


}

.nav_login{


font-weight: normal !important; 
margin-left:50px;

}

#data_category{

	text-decoration: none !important;
}


#data_category:hover{

text-decoration: none !important;

}


#coca_cola img{

	
width:100%;


}


#search-page{


}


.main.flickity-prev-next-button {
  display: none;
}

    
.main .flickity-prev-next-button {
  display: none;
}
.flickity-button:disabled {

}    
  

@media only screen and (max-width:767px){

.main  .flickity-page-dots .dot.is-selected{

  background-color:rgba(255,165,50,1);
}
.main  .flickity-page-dots .dot{

  width:15px;
  height: 4px;
  margin: 0;
  border-radius: 0;
  
}

}





.main .flickity-page-dots{

 
  display: block;

   margin-top: 25px;
}


.main .flickity-page-dots .dot.is-selected{


background-color: orange;


}



/*--------------------------------------------------------------
# view icon
--------------------------------------------------------------*/

#noviews{

position:relative;
top:45px;
left:5px;
background-color: rgba(0,0,0,0.8);
color: white;
font-weight: bold;
padding: 7px;
z-index: ;
font-size:13px;


}



 
#views{

position:relative;
top:45px;
left:2px;
background-color: rgba(0,0,0,0.8);
color: white;
font-weight: bold;
padding: 7px;
z-index: ;
font-size: 13px;

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
left: 74%;
font-size:13px;

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

	text-transform: capitalize;
}


.discount_main p{ 
font-size: 13px;
}


h6{

	text-transform: capitalize;
}


/*--------------------------------------------------------------
# product list
--------------------------------------------------------------*/



#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding:0px;

width:235px;

display: inline-block;
margin:1em 1em;

}

@media only screen and (max-width:498px){


#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding: 10px;

width:200px;

display: inline-block;
margin:1em 1em;

}



}


@media only screen and (min-width:499px) and (max-width:797px){


#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding: 10px;

width:188px;

display: inline-block;
margin:1em 1em;

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
height: 125px;
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





.category{

	margin-top: 15px;

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


.open-btn{display: block !important;font-size: 16px; margin-top: -6px;color: black;}


}






</style>


</head>

<body>


<!------------------------------------------Header--------------------------------------------------->

<?php include 'nav.php';  ?>


<br><br>
	<div style="visibility: hidden;" class="nav-container container">

<a class="category" href="products.php?page=<?php echo$category?>"><?php echo $category?></a><span id="data_category" class="category"><?php echo$location?> / <?php echo$text?></span><a class="category" style="color: skyblue;display: none;" href="checkout-page?id=$product_id">Check out</a>


</div>
<br>

<div class="container">

<div class="row">

<div id="coca_cola" class="col-md-6">

	<img src="assets/img/coca_cola.png">

</div>


<div id="coca_cola" class="col-md-6">

	<img src="assets/img/coca_cola.png">


</div>

</div>

<br>


<div class="discount_main">


	<p><?php echo$text ?></p>


</div>

<br>

<span style="float: right;"><?php echo$datafound?> item(s) found!!</span>

<br>

        <?php  

if ($datafound<1) {
  
  echo "<span style='font-size:12px;opacity:0.7;'>No item yet</span>";
}

else{
echo "<table><tbody id='mytable' class=''>";
while($row=mysqli_fetch_array($data))

        {   $category = $row['product_category'];

            $location = $row['product_location'];

echo "<div id='package'>";
$price = $row['product_price'];
$dollar = round($price/$dollar_rate);
if ($row['discount']>0) {
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
echo" <span id='priceitem'>$".($dollar)." </span><br>";}
echo "<span id='nameitem' style='' ><a target='_blank' href='product-details.php?id={$row['id']}&{$row['product_name']}&{$row['product_location']}&{$row['product_category']}&{$row['product_details']}'>".$row['product_name']."</a></span>"."<br>";
?> 
                <?php
 echo"</div>";      
                
}

}

}
        ?>

<?php
$radius=3;
$pageres = mysqli_query($conn,"select * from item_detail where sold=0");
$numpage = $pageres->num_rows;
$total_num_page =ceil($numpage/$num_per_page);
?>
<div align='center'>
<?php
echo "<br>";
if ($page>1) {
$previous = $page-1;
echo'<span id="page_num"><a style="" class="btn-success prev" id="'.$previous.'">&lt;</a></span>';
}
for ($i=1; $i<=$total_num_page; $i++) { 
if(($i >= 1 && $i <= $radius) || ($i > $page - $radius && $i < $page + $radius) || ($i <= $total_num_page && $i > $total_num_page - $radius)) {
if($i == $page) {echo'<span id="page_num"><a class="btn-success active-button" id="'.$i.'">'.$i.'</a></span>';}
  }
elseif($i == $page - $radius || $i == $page + $radius) {
 echo "... ";
}
elseif ($page==$i) {
}
else{
echo'<span id="page_num"><a class="btn-success" id="'.$i.'">'.$i.'</a></span>';
}
} 
if ($page<$total_num_page) {
$next = $page+1;
echo'<span id="page_num"><a style="" class="btn-success next" id="'.$next.'">&gt;</a></span>';
}

?>










</tbody></table>

</div>






<br><br>


<div class="container">

<h6><b><?php echo$category ?> on discount</b></h6>

<div class="item_images">



<?php
require 'engine/configure.php';
$condition = "SELECT * from item_detail where sold = 0 and product_name like '%$text%' and discount>0";
$data = mysqli_query($conn,$condition);
$datafound = $data->num_rows;
if ($datafound<1) {
echo "<span style='font-size:12px;opacity:0.7;'>No item yet</span>";
}
else{
echo "<table><tbody id='mytable' class=''>";
while($row=mysqli_fetch_array($data))

        {        
            ?>
        <?php   

echo "<div id='package'>";
$price = $row['product_price'];
$dollar = round($price/1500);
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
?> 
<?php
 echo"</div>";      }
}
       ?>


</tbody></table>

</div>


<br><br>




<h6><b>Deals under 10, 000</b></h6>

<div class="item_images">
<?php
require 'engine/configure.php';
$condition = "SELECT * from item_detail where sold = 0 and product_category='$category' and product_price < 10000";
$data = mysqli_query($conn,$condition);
$datafound = $data->num_rows;
if ($datafound<1) {
	
	echo "<span style='font-size:12px;opacity:0.7;'>No item yet</span>";
}
else{
echo "<table><tbody id='mytable' class=''>";
while($row=mysqli_fetch_array($data))
{        
            ?>
        <?php   

echo "<div id='package'>";
$price = $row['product_price'];
$dollar = round($price/$dollar_rate);
if ($row['discount']>0) {
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
 ?> 
<?php
 echo"</div>";      
                
}


}
        ?>


</tbody></table>
</div>
<br><br>
<h6 style="font-weight: bold;text-transform: capitalize;">Other deals</h6><br>
<div class="main">
<?php
require 'engine/configure.php';

$condition = "SELECT * from item_detail where sold = 0";
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
<br>
</div>
<br>
<?php
include 'footer.php';
?>
<script>
  $('.numbering').load('engine/item-numbering.php');

$('.main').flickity({
 
  cellAlign: 'left',
  contain: true,
  autoPlay:true,
 
 

});

</script>


<!------------------------------------------btn-scroll--------------------------------------------------->

<a class="fa fa-arrow-up btn-down" onclick="topFunction()">&#8593;</a>

<script src="assets/js/scroll.js" ></script>
<script src="assets/js/overlay.js" type="text/javascript"></script>

</body>
</html>


<?php

require 'engine/get-dollar.php';

session_start();
error_reporting(E_ALL ^ E_NOTICE);
time();



if (isset($_SESSION['business_id'])) {
$buyer = $_SESSION['business_id'];
$location = $_SESSION['business_address'];
}
if (isset($_SESSION['sp_id'])) {
$buyer = $_SESSION['sp_id'];
$location = $_SESSION['sp_location'];

}
if(isset($_SESSION['id'])) {
$buyer = $_SESSION['id'];
$location = $_SESSION['user_locaion'];
}	

?>



<?php
//get the id  
if (isset($_GET['id']) && !empty($_GET['id'])) {
require 'engine/configure.php';
$id = mysqli_escape_string($conn,$_GET['id']);
$get_product = mysqli_query($conn,"select * from item_detail where id = '".htmlspecialchars($id)."'");
$sql = "UPDATE item_detail SET views = views +1 where id ='$id'";
$query = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($get_product)) {
$image = $row['product_image'];
$discount = $row['discount'];
 $product_name = $row['product_name'];
$category = $row['product_category'];
$vendorId = $row['user_id'];
$price = $row['product_price'];
$dollar = round($price/$dollar_rate);
$product_date = $row['date_posted'];
	}
	
}

?>

 <?php
require 'engine/configure.php';
$get_productVendor = mysqli_query($conn,"select * from vendor_profile where id = '".htmlspecialchars($vendorId)."'");
if ($get_productVendor->num_rows>0) {
while ($dataVendor = mysqli_fetch_array($get_productVendor)) {
$vendorImage = $dataVendor['business_image'];
$vendorName = $dataVendor['business_name'];
$vendorPhone = $dataVendor['business_contact'];
$vendorLocation = $dataVendor['business_address'];
$vendorEmail = $dataVendor['business_email'];
if ($dataVendor['verified']==1) {
 $vendorVerified = $dataVendor['verified'];
}
}
}
else{
$vendorImage = "No vendor found";
$vendorName = "No vendor found";
$vendorPhone = "No vender found";
$vendorLocation =  "No vender found";
$vendorEmail =  "No vender found";

	}


?>


<?php  

 require 'engine/configure.php';  

 if(isset($_POST["submit"]))  

 {  

      if(!empty($_POST["search"]))  

      {  

         $query = str_replace(" ", "+", mysqli_real_escape_string($conn,$_POST["search"]));  
         header("location:search-process.php?search=" . htmlspecialchars($query));  

      }  

 }  

 ?>  






<!DOCTYPE html>
<html>



<head>
	<title>E-stores | details page </title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/flickity.min.css">
     <link rel="stylesheet" href="assets/css/btn_scroll.css">
      <link rel="stylesheet" href="assets/css/overlay.css">
  <script src="assets/js/sweetalert.min.js"></script> 
  <script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/flickity.pkgd.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.lazy.min.js"></script>
<style type="text/css">

body{

	font-family: poppins;
}




#think{
margin-left: 210px !important;

}

@media only screen and (max-width:497px){
#think{
margin-left: 23px !important;
font-size: 0.8rem;

}
}


#heart{

position: absolute;

left:20px;

font-size: 25px;

cursor: pointer;

}


#heart-liked{

position: absolute;

left:20px;

font-size: 25px;

cursor: pointer;

color:orange;

}






.onlyNumber{
	border:1px solid transparent;
	box-shadow: 0px 0px 8px rgba(0,0,0,0.3);
}


.location,.lga{

	font-size: 13px;
	text-transform: capitalize;
}


.lga {

	width: 100%;
	padding: 5px;
	border:1px solid rgba(0,0,0,0.2);
}


.lga:focus {

    outline: 2px solid skyblue;
	border:1px solid rgba(0,0,0,0.2);
}


h1 img{

	margin-left: 10px;
}

/*--------------------------------------------------------------
# picture slides
--------------------------------------------------------------*/

.mySlides {
  display: none;
  width: 100%;

}


.mySlides img{

  width:100%;
  height:100%;

}


/*--------------------------------------------------------------
 Next & previous buttons
-------------------------------------------------------------- */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/*--------------------------------------------------------------
 Position the "next button" to the right 
 --------------------------------------------------------------*/
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}



/*--------------------------------------------------------------
 On hover, add a black background color with a little bit see-through 
--------------------------------------------------------------*/
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}



/*--------------------------------------------------------------
 Six columns side by side 
 --------------------------------------------------------------*/


/*-------------------------------------------------------------- 
Add a transparency effect for thumnbail images 
--------------------------------------------------------------*/
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}



/*--------------------------------------------------------------
# comment body
--------------------------------------------------------------*/

.comment-body{

margin-right: 25px;
width: 60%;
font-size: 13px;

}

.first-letter{

	font-weight: bold;

	border-radius: 50%;

	padding: 0px 6px;

	background-color: rgba(192,192,192,0.6);
}


.btn-comment{

	float: right;

	color:skyblue;

	font-weight: bold;

	border:2px solid skyblue;

	font-size: 14px;

	padding: 10px 5px;
}

/*--------------------------------------------------------------
# cart notifiction
--------------------------------------------------------------*/
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

#get_cart{

	background-color: rgba(0,90,60,0.4);

	background-color: rgba(0,90,60,0.4);

	color:white;

	font-weight:normal;
    
    z-index: 999;
   
    font-size: 12px;
     
	padding: 25px;

	position: absolute;


	width: auto;

	top: 35px;

	right:16%;

    animation:fadeOut 0.5s forwards;

    transition: 0.3s;


}

@keyframes fadeOut{

0%{

	opacity: 1
}

100%{

	opacity: 0;
}



}




/*--------------------------------------------------------------
# report form
--------------------------------------------------------------*/

#report-form input,#report-form textarea{
    
    border:1px solid transparent;
    box-shadow: 0px 0px 4px rgba(0,70,90,0.2);
	font-size: 13px;

}


.btn-report{
float: right;
font-size:13px;
border: none;
outline: none;
box-shadow: none;
font-family: verdana;
cursor: pointer;
}

.btn-report:focus{


border: none;
outline: none;
box-shadow: none;
}





/*--------------------------------------------------------------
# popup report form
--------------------------------------------------------------*/


#popup,#popup-comment{
background-color: rgba(248,248,248,0.3);  
background-color: rgba(248,248,248,0.3);  
position:fixed;
padding: 4px 8px !important;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 350px;
padding:5px;
z-index: 99;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;
text-align: center;
font-size: 13px !important;
font-family: poppins !important;

}



#popup.active,#popup-comment.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }

#close,#close-comment{

font-size: 12px;
position: absolute;
top: -6px;
left: 93%;
color:black;
cursor: pointer;
box-shadow: 0px 0px 5px rgba(0,0,0,0.5);
border-radius: 50%;
background-color: white;
z-index: 1;



}
#close:hover, #close:focus, #close-comment:hover,#close-comment:focus{
opacity: 0.6;
border: none;
outline: none;
 outline: none;

}


#popup input,#popup textarea,#popup-comment input,#popup-comment textarea{

border:1px solid transparent;

box-shadow: 0px 0px 4px rgba(0,0,0,0.2);



}


#btn-comment{

	text-transform: capitalize;
	font-family: poppins;
	color: white;
	box-shadow:0px 5px 8px rgba(0,0,0,0.3);
	border-radius:3px;
}

.btn-comment:hover,.btn-comment:focus{

outline: 3px solid skyblue;

}





h6{

	text-transform: capitalize;
}




#popup-messaging{

background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 400px;
padding:5px;
font-size:14px;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;
z-index: 999;
}

#popup-messaging.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }

#popup-messaging input, #popup-messaging textarea{
  
font-size:13px;
    }


#close-messaging{

font-size: 18px;
position: absolute;
top: -5px;
left: 93%;
color:black;
cursor: pointer;
box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
border-radius: 50%;
padding: 0px 8px;
z-index: 1px;
background-color: white;
background-color: white;


}
#close-messaging:hover, #close-messaging:focus{
opacity: 0.6;
border: none;
outline: none;
 outline: none;

}











/*--------------------------------------------------------------
# vendor details
--------------------------------------------------------------*/


#vendor_image{

	height: 130px;
	width:150px;

}


#vendor_name{

	font-weight: bold;
	text-transform: capitalize;
}



#vendor_email{

	font-size: 0.75rem;

	text-decoration: none;

	color:black;

	margin-left: 16px;
}




#vendor_phone{

	border:2px solid skyblue;
	padding: 8px;
	font-size:12px;
}


#verified{

background-color: green;

color: white;

font-size: 8px;

padding: 0px 50px;

border-radius: 15px;

z-index: -1;



}




#package .fa-check{

	
	position:relative;
	left: 0px;
}


.btn-compare{

cursor: pointer;

}






.fa-check{

font-size: 12px;

color: white;

border:1px solid transparent;

border-radius: 50%;

background-color:green;

padding:3px;

position: absolute;

right: -31px;

margin-top: 4px;

margin-right:100px;

}



#discount{
background-color: rgba(255,195,50,0.3);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position: relative;
top:38px;
font-weight: bold;
padding: 6px;
left:170px;
font-size:13px;

}
@media only screen and (max-width:497px){

#discount{

left:150px;
font-size:13px;

}
}


@media only screen and (max-width:767px){

.fa-check{

right:40px;

margin-top: 4px;



}

}





.fa-envelope{

	color:black;
	position: absolute;
	margin-top: 5px;

}



#views{

position:relative;
top:39px;
right:51px;
background-color: rgba(0,0,0,0.8);
color: white;
font-weight: bold;
padding: 7px;
z-index: ;
font-size:13px;
}



@media only screen and (min-width:499px) and (max-width:767px){
 
#discount{
background-color: rgba(255,195,50,0.3);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position: relative;
top:38px;
font-weight: bold;
padding: 5px;
right:-21px !important;

}

}






/*--------------------------------------------------------------
# navigation header
--------------------------------------------------------------*/



.nav_signup{


border:1px solid none;
border-left:1px solid white;
border-left-color: rgba(192,192,192,1);
margin-left:-9px !important;
font-size: 0.8rem !important;


}


.nav_login{

margin-left:70px;

font-size: 0.8rem !important;

}





#share{

	height:14px;
	width: 15px;
}



.fa-cart-shopping{

font-size: 14px;


padding:3px;

}




/*--------------------------------------------------------------
# product details
--------------------------------------------------------------*/

#product_image{

	margin-top: 30px;
		width:100%;

}


#product_image img{

	width:100%;

	max-height: 550px;
}






@media only screen and (max-width:497px){


#product_image img{

	width:100%;
}


}




#opening_hours{

	background-color:rgba(192,192,192,0.3);padding:20px;font-size:13px;
}


.housing_delivery{

padding: 10px;

background-color: rgba(192,192,192,0.3);

}

.housing_delivery p{

font-size: 13px;

}


.housing_delivery h6{

font-size: 14px;

}


#positive,#negative{

	font-size: 17px;
	font-weight: bold;
	margin: 10px;
}


#number{

	width: 45px;
	border:1px solid transparent;
	box-shadow: 0px 0px 4px rgba(0,0,0,0.5);
	margin: 10px;
}


.btn-info{

	font-size: 13px;
}


address{

	font-size: 13px;

	text-transform: capitalize;
}


#product_name{

	text-transform: capitalize;
}

/*--------------------------------------------------------------
# navigation bar mobile
--------------------------------------------------------------*/

@media only screen and (max-width:1200px){

.button_navigation{


font-size:14px;

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

font-size:14px;

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


.open-btn{display: block !important;color: black;}


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
# menu navbar
--------------------------------------------------------------*/






#discount{

	direction: none;
}



#make_request{



font-weight: bold;

font-size: 14px;

color: skyblue;

padding: 10px 10px;
cursor: pointer;


border:1px solid skyblue;


}


#report_abuse{

padding: 0px 10px;

color: white;

float: right;

cursor: pointer;

background-color: rgba(255,140,60,0.9);

border:1px solid transparent;

font-weight: bold;

font-size: 14px;




}



#make_request:focus,#report_abuse:focus,#make_request:hover,#report_abuse:hover{

opacity: 0.5;
}



/*--------------------------------------------------------------
# product listings
--------------------------------------------------------------*/



#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:40px;border:1px solid rgba(0,70,90,0.2);
padding: 10px;

width:230px;

position: relative;

margin:1em 1em;

}

@media only screen and (max-width:498px){


#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding: 10px;

width:210px;

position: relative;

display: inline-block;
margin:1em 1.5em;

}



}


@media only screen and (min-width:499px) and (max-width:797px){


#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);


width:240px;

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
height: 150px;
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


.main{

	position: relative;

	margin-bottom: 21px;
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

  width:20px;
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






</style>
</head>
<body>

<!------------------------------------------Header--------------------------------------------------->

<?php include 'nav.php';  ?>

<?php include 'overlay.php';?>


<br>

<!-----------------------------------report form --------------------------------------->

<div id="popup">
<div class="container">
<h6 align="center" id="h6" style="">Report Box</h6><br>
<form style="" mehod="post" id="report-form" enctype="multipart/form-data"> 

      <br>

        <p style="text-transform: capitalize;font-weight: bold;"><?php echo$product_name;?></p>
        <input type="hidden" name="pname" value="<?php echo$product_name; ?>">
        <input type="hidden" name="email" placeholder="&#xF1fa; Email" value="<?php echo$vendorEmail?>"  class="form-control" >
        <input type="email" style="font-family:arial,fontawesome;" name="sender_email" placeholder="&#xF1fa; Email" value=""  class="form-control"><br>
        <input type="hidden"  name="productId" placeholder="Product Details" value="<?php echo$product_id; ?>"  class="form-control">
        <textarea type="text" wrap="physical" name="issue" placeholder="Issue " rows="8" class="form-control"></textarea><br><br>
        <input type="submit" name="submit" id="submit" style="color: white;" class="btn btn-warning" value="Report ">

     </form>

   <a class="btn btn-danger" onclick="toggle()" id="close">&times;</a> 
    <br>
   </div>
</div>

<!---------------------------------product image------------------------------------------>

<div class="container">
<div id="product_image" class="row">
<div class="col-md-8">
<div class="mySlides">

<?php  

$heart_like = mysqli_query($conn,"select * from heart_like where buyer ='$buyer' and itemid ='$id'");

if ($heart_like->num_rows>0) {

if ($_SESSION['business_id'] != $vendorId) {
	
	
echo"<span id='heart-liked' class='heart'><i class='fa fa-heart'></i></span>";

}

else{

echo"<span id='heart' class='heart'><i class='fa fa-heart'></i></span>";

}

}

?>


<img style='height:400px !important;width:100%;' src="<?php echo$image  ?>">



</div>







<!------------------------------------------Add to cart--------------------------------------------------->




<?php
require 'engine/configure.php';
if (isset($_GET['id'])) {
$id= mysqli_escape_string($conn,$_GET['id']);
$more= mysqli_query($conn,"SELECT *from picx where sid='".htmlspecialchars($id)."'");


while ($pic=mysqli_fetch_array($more)) {
if ($more->num_rows>0) {
echo"<div class='mySlides'><img style='height:400px !important;width:100%;' src=".$pic['pictures']."></div>";
}  
}
} 
 ?>	

<?php

$more= mysqli_query($conn,"SELECT *from picx where sid='".htmlspecialchars($id)."'");
if ($more->num_rows>0) {
echo'<a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>';
}
?>

<br>
<b style="font-size:1.2rem;">&#8358; <?php if ($discount>0) {  echo round($price - ($discount/100 * $price)); 
}else{echo "".$price. " ";}  ?></b>&nbsp;
<b style="font-size:1.2rem;">$<?php if ($discount>0) {  echo round(($dollar) - ($discount/100 * $dollar)); 
}else{echo ($dollar);}  ?></b><br>
<b id="product_name" style="color:rgba(255,165,65,1);"><?php echo$product_name;?></b><br>
Posted on <?php echo$product_date?><br>
<address><?php echo$vendorLocation;?></address>


<?php
function getDistance($origin, $destination, $apiKey) {
    // URL encode the origin and destination
    $origin = urlencode($origin);
    $destination = urlencode($destination);

    // Build the URL for the Distance Matrix API request
    $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=$origin&destinations=$destination&key=$apiKey";

    // Initialize cURL
    $ch = curl_init();

    // Set the URL and other options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // Execute the request
    $response = curl_exec($ch);

    // Close cURL resource
    curl_close($ch);

    // Decode the response
    $data = json_decode($response, true);

    // Check if the response contains distance information
    if (isset($data['rows'][0]['elements'][0]['distance'])) {
        return $data['rows'][0]['elements'][0]['distance']['text'];
    } else {
        return "Distance information not available ";
    }
}

// Example usage
$origin = $vendorLocation;
$destination = $location;
$apiKey = "YOUR_API_KEY_HERE"; // Replace with your API key

$distance = getDistance($origin, $destination, $apiKey);
echo "  ".$distance." Km";
?>







</div>


     <div class="col-md-4">
       <div class="row">
       <div class="col-md-6 col-6">
       <span><img id="vendor_image" src="<?php echo$vendorImage;?>"></span><br>
       <i class="fa fa-envelope"></i><a id="vendor_email" href="mailto:<?php echo $vendorEmail;?>"> <?php echo$vendorEmail; ?></a>
        <br>
      </div>
      <div style="position: relative;" class="col-md-6 col-6">
      <span id="vendor_name"><?php echo$vendorName;?></span><br>
       <span><i class="fa-solid fa-phone"></i> <small><?php echo$vendorPhone;?></small></span><br>
        <?php
        if ($vendorVerified==1) {
        	
        	echo "<span id='verified'><span style='visibility:hidden'>1</span><i class='fa fa-check'></i></span><br><br>";}
?>
         <span><a id="vendor_phone" href="tel:+234 <?php echo$vendorPhone;?>">Request a call</a></span>

	


		 </div>

        </div>


<br>

<div  class="housing_delivery">
	
<h6><b>Delivery & Returns</b></h6>

<p>Choose your location</p>



<?php

require 'engine/connection.php';

$getStates = mysqli_query($con,"SELECT * from states_in_nigeria GROUP by state");

echo'<select class="form-control location" name="location" id="location">
<option value="">Entire Nigeria</option>';



while ($states = mysqli_fetch_array($getStates)) {

?>

<option value="<?php echo $states['state']?>"><?php echo $states['state']?></option>
<?php	
}

?>

</select><br>

<span id='lg'></span>

<br>

<h6><b>Door delivery</b></h6>

<p style="font-size: 12.5px;">Lorem ipsum dolor sit amet consectetur. Non at vitae
sed augue sit cursus at. Mauris malesuada sed
metus enim varius laoreet.</p>


<h6><b>Pickup station</b></h6>

<p style="font-size: 12.5px;">Lorem ipsum dolor sit amet consectetur. Non at vitae
sed augue sit cursus at. Mauris malesuada sed
metus enim varius laoreet.</p>


<h6><b>Return policy</b></h6>

<p style="font-size: 12.5px;">Lorem ipsum dolor sit amet consectetur. Non at vitae
sed augue sit cursus at. Mauris malesuada sed
metus enim varius laoreet.</p>
</div>


<br>

<div style="text-align: center;">

<input type="button" value="-" id="subs" class="btn btn-default" style="margin-right: 2%" onclick="subst()">&nbsp;
<input type="text" style="width:50px;text-align: center; margin: 0px;" class="onlyNumber" id="noOfItem" value="" name="noOfItem">&nbsp;
<input type="button" value="+" id="adds" onclick="add()" class="btn btn-default">

</div>
<br>
<?php  
if ($_SESSION['business_id'] != $vendorId) {

if (isset($_SESSION['business_id'])) {

echo'<button name="itemId" id="'.$id.'"   class="form-control btn btn-info btn-add">Add to cart</button>';
}
elseif (isset($_SESSION['id'])) {
echo'<button name="itemId" id="'.$id.'"   class="form-control btn btn-info btn-add">Add to cart</button>';
}

elseif (isset($_SESSION['sp_id'])) {

echo'<button name="itemId" id="'.$id.'"   class="form-control btn btn-info btn-add">Add to cart</button>';
}
else{
?>	

<a href="login.php?details=<?php echo urlencode($_SERVER['REQUEST_URI'])?>" class="form-control btn btn-info btn-add" style="text-decoration:none;color:white;">Login to continue</a>
<?php
}
} ?>


</div>

</div>

<br>

</div>


<!---------------------------------description------------------------------------------>


<div class="container">

<h6><b>Description</b></h6>

<p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur. Nec euismod nisi nisl sit laoreet. Metus aliquam maecenas rhoncus vulputate sed scelerisque proin faucibus. Penatibus facilisis et egestas egestas a cursus lectus dui. Enim in amet amet urna mi. Placerat suspendisse vitae aliquam sed amet vitae condimentum ipsum. Tristique id mollis donec. Lorem ipsum dolor sit amet consectetur. Nec euismod nisi nisl sit laoreet. Metus aliquam maecenas rhoncus vulputate sed scelerisque proin faucibus. Penatibus facilisis et egestas egestas a cursus lectus dui. Enim in amet amet urna mi. Placerat suspendisse vitae aliquam sed amet vitae condimentum ipsum. Tristique id mollis donec.</p>
<br>


<!---------------------------------comment section------------------------------------------>

<div class="section-comment">
  <h6><b>Review</b></h6><br>
 <div id="bom"><div id="cy">
   <div class="comments">
   <?php
   require 'engine/configure.php';
   if (isset($_GET['id'])) {
   $id= $_GET['id'];
   $yp = mysqli_query($conn,"select *from item_detail where id='".htmlspecialchars($id)."'");
    while ($row=mysqli_fetch_array($yp)) {
   if ($yp) {
   $pname=$row['product_name'];
   $product_ID = $row['id'];
   }
   }
   $query = mysqli_query($conn,"select * from seller_comment where product_name='".htmlspecialchars($product_ID)."' order by id desc");
   $product_comment=$query->num_rows;
   if ($product_comment<1) {
   echo "<span style='font-family: poppins;font-size:14.5px;opacity:0.6;color:black'>There are no reviews for this product</span>";
   }
   else{
   while ($row = mysqli_fetch_array($query)) {
   echo'<div class="comment-body">';
   echo "<span class='first-letter'>".substr($row['sender_name'],0,1)."</span>&nbsp;".$row['sender_name']."<br>";
   echo "<p>".$row['comment']."</p>";
   echo"<br><i style='color:blue; align-self:center;font-size:14px;' >Public</i>"."  "."<i style='color:red;font-size:14px;'>". $row['date']."</i><br><br>";
    echo'</div>';  
   }
   }
   }
   ?>
  </div><br>
  </div>
 </div>

<?php if ($_SESSION['business_id'] != $vendorId) { ?>

 <button class="btn-comment" onclick="toggle_comment()">Post comment</button>

<?php }  ?>

</div>


<!------------------------------------------post comment popup--------------------------------------------------->
<div id="popup-comment">
<a id="close-comment" class="btn close-comment" onclick="toggle_comment()">&times;</a>
<h6><b>Post comment</b></h6><br>
<form method="post" id="conv">
<?php 
if(isset($_SESSION['business_email'])){
$business_email = $_SESSION['business_email']; 
$business_name = $_SESSION['business_name'];
echo'<input type="hidden" name="sender_email" maxlength="21" class="form-control" style="font-family:arial,fontawesome;font-size:13px;" placeholder="&#xF1fa; Email" value="'  .$business_email.'"><br>';
echo'<input type="hidden" maxlength="21" name="sender_name" class="form-control" style="font-family:arial,fontawesome;font-size:13px;"  placeholder="&#xF007; Name" value="'.$business_name.'">';
}
elseif (isset($_SESSION['sp_email'])){
 	$sp_email = $_SESSION['sp_email']; 
 	$sp_name = $_SESSION['sp_name'];
echo'<input type="hidden" name="sender_email" maxlength="21" class="form-control" style="font-family:arial,fontawesome;font-size:13px;" placeholder="&#xF1fa; Email" value=" '.$sp_email.'"><br>';
echo'<input type="hidden" maxlength="21" name="sender_name" class="form-control" style="font-family:arial,fontawesome;font-size:13px;"  placeholder="&#xF007; Name" value="'.$sp_name.'">';}
 elseif (isset($_SESSION['email'])){
 	$email = $_SESSION['email']; 
 	$name = $_SESSION['name'];
echo'<input type="hidden" name="sender_email" maxlength="21" class="form-control" style="font-family:arial,fontawesome;font-size:13px;" placeholder="&#xF1fa; Email" value="'.$email.'"><br>';
echo'<input type="hidden" maxlength="18" name="sender_name" class="form-control" style="font-family:arial,fontawesome;font-size:13px;"  placeholder="&#xF007; Name" value="'.$name.'">';}
else{
?>
<input type="text" maxlength="21" name="sender_name" placeholder="&#xF007; Name" class="form-control" style="font-family:arial,fontawesome;font-size:13px;" ><br>
<input type="email" name="sender_email" placeholder="&#xF1fa; Email" class="form-control" style="font-family:arial,fontawesome;font-size:13px;" ><br>
<?php
 }

?> 
<input type="hidden" name="product_ID" value="<?php echo$product_ID  ?>"><br>
<textarea class="form-control" name="comment" placeholder="...Your review" rows="4" style="font-size:13px;"></textarea><br>
<button id='btn-comment' class="btn btn-warning form-control" style=""><i class="fa fa-paper-plane"></i> Add comment</button>
<div align="center" style="display: none;" id="loading-image"><img id="loader" height="50" width="50" src="loading-image.GIF"></div>
</form>
</div>

<br><br>


<!---------------------------------store address------------------------------------------>


<h6><b>Store Address</b></h6>
<br>
<div id="opening_hours" style="" class="row">
<div class="col-md-6">
<h6>Opening hours</h6>
<table style="width: 100%;">

	 <tbody>

	 <tr>

		<td>Monday</td>
		<td>10:00 - 15:00</td>
	 </tr>

	  <tr>

		<td>Tuesday</td>
		<td>10:00 - 15:00</td>
	 </tr>


 <tr>

		<td>Wednesday</td>
		<td>10:00 - 15:00</td>
	 </tr>


 <tr>

		<td>Thursday</td>
		<td>10:00 - 15:00</td>
	 </tr>


 <tr>

		<td>Friday</td>
		<td>10:00 - 15:00</td>
	 </tr>

</tbody>

</table>

</div>

<!------------------------------------------Discount deals--------------------------------------------------->
<div class="col-md-6"><br>
<img src="assets/img/Frame_8937.png" style="width: 100%;">
</div>
</div>
<br>	

<!---------------------------------send request------------------------------------------>
<div id="popup-messaging">
    <a onclick="messaging()" id="close-messaging">&times;</a>
<h6 align="center" id="h6" style="">Send Request</h6><br>
<div class="container">

   <?php 
require 'engine/configure.php';   
if (isset($_GET['id'])) {
$id= mysqli_escape_string($conn,$_GET['id']);
$yty = mysqli_query($conn,"select *from item_detail where id='".htmlspecialchars($id)."'");
while ($row=mysqli_fetch_array($yty)) 
 {
  if ($yty) {
$productname=$row['product_name'];
$sid=$row['user_id'];
$pid=$row['id'];
 }

}
}
?>  
<form method="post" id="message-form" enctype="multipart/form-data"> 
<div style="text-transform: capitalize;" class="pxname">Product name: &nbsp; <?php echo$productname; ?></div>
<input type="hidden" name="has" value="0" placeholder="" class="form-control"><br>
<input type="hidden" name="is_sender_deleted" value="0">
<input type="hidden" name="itemid" value="<?php echo$pid;?>">
<input type="hidden" name="is_receiver_deleted" value="0">
<?php 
if(isset($_SESSION['business_email'])){
$business_email = $_SESSION['business_email']; 
$business_name = $_SESSION['business_name'];
echo'<input type="hidden" name="sentby" maxlength="21" class="form-control" style="font-family:arial,fontawesome;" placeholder="&#xF1fa; Email" value="'  .$business_email.'"><br>';
echo'<input type="hidden" maxlength="21" name="name" class="form-control" style="font-family:arial,fontawesome;"  placeholder="&#xF007; Name" value="'.$buiness_name.'">';
}
elseif (isset($_SESSION['sp_email'])){
 	$sp_email = $_SESSION['sp_email']; 
 	$sp_name = $_SESSION['sp_name'];
echo'<input type="hidden" name="sentby" maxlength="21" class="form-control" style="font-family:arial,fontawesome;" placeholder="&#xF1fa; Email" value=" '.$sp_email.'"><br>';
echo'<input type="hidden" maxlength="21" name="name" class="form-control" style="font-family:arial,fontawesome;"  placeholder="&#xF007; Name" value="'.$sp_name.'">';}

 elseif (isset($_SESSION['email'])){
 	$email = $_SESSION['email']; 
 	$name = $_SESSION['name'];
echo'<input type="hidden" name="sentby" maxlength="21" class="form-control" style="font-family:arial,fontawesome;" placeholder="&#xF1fa; Email" value="'.$email.'"><br>';
echo'<input type="hidden" maxlength="18" name="name" class="form-control" style="font-family:arial,fontawesome;"  placeholder="&#xF007; Name" value="'.$name.'">';}
else{
?>
<input type="text" name="sentby" maxlength="21" class="form-control" style="font-family:arial,fontawesome;" placeholder="&#xF1fa; Email" ><br>
<input type="text" maxlength="21" name="name" class="form-control" style="font-family:arial,fontawesome;"  placeholder="&#xF007; Name">
<?php
 }

?> 
<input type="hidden" name="sentto" value="<?php echo$vendorEmail ?>" placeholder="" class="form-control"><br>
<input type="hidden" name="subject" placeholder="Subject" value="<?php echo$productname; ?>" class="form-control">
<textarea type="text" wrap="physical" name="message" rows="6" placeholder="e.g phonenumber, price e.t.c" class="form-control"></textarea><br><br>
<div align="center"><input type="submit" name="submit" id="submit-message" style="color: white;padding:10px;" class="btn btn-warning form-control" value="Send"></div>
<div align="center" style="display: none;" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>
</form>
<br>
 

</div>
</div>
<h6 style="padding: 10px;"><span id="make_request"><a style="color: skyblue;" onclick="messaging()" class="btn">Make a request</a></span> <span id="report_abuse"><a style="color:white;"  onclick='toggle()' class="btn">Report abuse</a></span></h6>
<br>
<h6 style="font-weight: bold;text-transform: capitalize;"><?php echo $category?> on Discount deals</h6><br>
<div class="main">


<?php
require 'engine/configure.php';
$condition = "SELECT * from item_detail where sold = 0 and product_category='".htmlspecialchars($category)."' and discount > 0";
$data = mysqli_query($conn,$condition);
$datafound = $data->num_rows;
echo "<table><tbody id='mytable' class=''>";

        while($row=mysqli_fetch_array($data))

        {        
            ?>
        <?php   

echo "<div id='package'>";
$price = $row['product_price'];
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
echo"<span style='text-decoration:line-through;' id='priceitem'>$".($price/$dollar_rate)."</span>";
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
$redirecturl =($_SERVER['REQUEST_URI']);
 echo"<a style='font-weight:normal;font-size:11px;' id='locitem' id='' disabled class='btn-hover' >Compare</a><span class='hide'>Please <a href='login.php?details={$redirecturl}'>login</a> to use feature</span>";

}
echo"<span style='float:right'><a><i class='fa-solid fa-cart-shopping'></i>&nbsp;&nbsp;"."".""."</a></span>";


echo"<a href='https://facebook.com/e-stores/estores.php?id=".urldecode($row['product_name'])."'><img id='share' src='assets/icons/material-symbols_share.png'></a>";


  ?> <?php
 echo"</div>";      
               }
?>
</tbody></table>
</div>
<br>
</div>

<!------------------------------------------footer--------------------------------------------------->
<br>

<?php
include 'footer.php';
?>


<script>
$('.main').flickity({
  cellAlign: 'left',
  contain: true,
  autoPlay:true,
});

</script>
<script>
$('.comments').flickity({
  cellAlign: 'left',
  contain: true,
  autoPlay:true,
});

</script>

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
<script type="text/javascript">
 function toggle() {
var popup = document.getElementById('popup');
popup.classList.toggle('active');
 }
</script>

<script type="text/javascript">
 function toggle_comment() {
var popup = document.getElementById('popup-comment');
popup.classList.toggle('active');
 }
</script>


<script type="text/javascript">
$('#submit').on('click',function(e){
        e.preventDefault();
  $.ajax({
           type: "POST",
            url: "report-page.php",
           data:  $("#report-form").serialize(),
            cache:false,
            contentType: "application/x-www-form-urlencoded",
            success: function(response) {
            if(response==1){

swal({
text:"Your message has been recieved. Thank you!",
icon:"success",
});

 $("#popup").hide(1000);
             }

       else { 
       
             swal({

text:"Issue field is required",
icon:"error",

});
            $("#report-form").find('input:text').val('');
            $("#report-form").find('textarea').val('');
            $('input:checkbox').removeAttr('checked');
}  
            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });
</script>
<input type="hidden" name="userid" id="seller" value="<?php echo $vendorId ?>">
<input type="hidden" name="buyer" id="buyer" value="<?php echo $buyer ?>">
<script type="text/javascript">

$(document).ready(function() {
    $('.btn-add').click(function() {

        var itemId = $(this).attr('id');
        var userid = $('#seller').val();
        var noofItem = $('#noOfItem').val();
        var location = $('#location').val();
        var buyer = $('#buyer').val();
        var lga = $('#lga').val();


      $.ajax({
            type: "POST",
            url: "engine/cart-process.php",
            data: { 'itemId': itemId, 'userid': userid, 'noofItem': noofItem,'location':location,'buyer':buyer,'lga':lga},
            cache: false,
            success: function(response) {
             

                if (response == 1) {

                    swal({
                        icon: "success",
                        text: "Item(s) has been added successfully"
                    });
                    
                    $('.numbering').load('engine/item-numbering.php');
                } else {
                    swal({

                        icon: "error",
                        text: response
                    });
                }
            }
        });
    });
});
</script>
<script type="text/javascript">
$("img.lazy").Lazy();
var instance = $("img.lazy").data("plugin_lazy");
</script>




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

<script type="text/javascript">
$('#submit-message').on('click',function(e){
        e.preventDefault();
        $("#loading-image").show();
          $.ajax({
           type: "POST",
           url: "engine/message-process.php",
           data:  $("#message-form").serialize(),
           cache:false,
           contentType: "application/x-www-form-urlencoded",
           success: function(response) {
           $("#loading-image").hide();
           if (response==1) {
            swal({
            text:"Message sent",
             icon:"success",
            });
                
            $("#popup-messaging").hide(1000);
            $("#message-form")[0].reset(); 
            $("#message-form").find('input:text').val('');
            $("#message-form").find('textarea').val('');
            $('input:checkbox').removeAttr('checked');
                                                        }    
            else{
            
              swal({ icon:"error",
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
$('#btn-comment').on('click',function(e){
e.preventDefault();
$("#loading-image").show();
    $.ajax({
            type: "POST",
            url: "engine/seller-comment.php",
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
<script type="text/javascript">
 function messaging() {
var popup = document.getElementById('popup-messaging');
popup.classList.toggle('active');
  }

</script>


<script>
let slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");

 
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
 
  slides[slideIndex-1].style.display = "block";
  
 
}
</script>

<script type="text/javascript">

$('#lg').html("<select name='lga' id='lga' class='form-control lga'><option value=''>Choose LGA</option></select>");
	
$('#location').on('change',function() {
	
var location = $(this).val();

      $.ajax({
            type:"POST",

            url:"engine/get-lga.php",

            data:{'location':location},

            success:function(data) {

            	$('#lg').html(data);
            	
            }


     });

});

</script>

<?php

if (isset($_GET['id'])) {
	$item = $_GET['id'];
}
?>

<input type="text" name="itemId" id="idItem" value="<?php echo $item ?>">
<input type="text" name="buyer" id="buyer" value="<?php echo $buyer ?>">
<input type="text" name="userid" id="seller" value="<?php echo $vendorId ?>">

<script>
	
$('.heart').on('click',function() {

var itemId = $("#idItem").val();
var userid = $('#seller').val();
 var buyer = $('#buyer').val();

$.ajax({
            type: "POST",
            url: "engine/heart-process.php",
            data: { 'itemId': itemId, 'userid': userid,'buyer':buyer},
            cache: false,
            success: function(response) {
             

                if (response == 1) {

                    swal({
                        icon: "success",
                        text: "Item has been added to wish list"
                    });
                    
                    $('#com').load(location.href + " #my");
                
                } else {
                    swal({

                        icon: "error",
                        text: response
                    });
                }
            }
        });

});



</script>











<a class="btn-down" onclick="topFunction()">&#8593;</a>
<script src="assets/js/scroll.js"></script>
<script src="assets/js/overlay.js" type="text/javascript"></script>
</body>
</html>
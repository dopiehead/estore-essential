
<?php  
session_start();
error_reporting(E_ALL ^ E_NOTICE);
if (!empty($_SERVER['REMOTE_ADDR'])) {
$ipaddress = $_SERVER['REMOTE_ADDR'];
require 'engine/configure.php';
$checkIp = mysqli_query($conn,"select * from ip where user_ipaddress ='".htmlspecialchars($ipaddress)."'"); 
if ($checkIp->num_rows>0) {
}
else{
$insertIp = mysqli_query($conn,"insert into ip(user_ipaddress) values ('".htmlspecialchars($ipaddress)."')");
if ($insertIp) {
?> 
 
<script>
$(document).ready(function() {
$("#popup").show();
});
</script>
<?php
}
} 
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
  <title>E-stores | Abouts </title>
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


/*--------------------------------------------------------------
# Body styles
--------------------------------------------------------------*/
  
body{
 
font-family: poppins;




}





#about h4,#about h6{


font-weight: bold;


}


#about{

  margin-top: 30px;
}


#about p{

font-size: 13px;

}



#about h4{


color:skyblue;


}


#about h6{


margin-top: 20px;


}

#about img{

  margin-top: 45px;

  width: 65px;
}



#user_name{

  font-weight: bold;
 
  


}


#user_position{
  
 
  font-size: 13px;
}

#commenter_{

position: relative;


}




#comment-box .flickity-prev-next-button {
  display: block;
  
}


#comment-box .flickity-button:disabled {
  
  
}


q{
  width: 50%;
}



#comment-box{

  margin-top: 100px;
}


#comment-box img{

  margin-top: 30px;

  

  padding-left: 10px;
}


.fa-star{

color: orange;


}




.nav_login,.nav_signup{


font-size: 13px;

}

.banner figcaption{

font-size: 12px;

}



#main p{

  padding: 15px;
}





/*--------------------------------------------------------------
# menu
--------------------------------------------------------------*/

.menu{


  background-image: url(assets/img/mask_group.png);

  background-size: cover;

  padding: 30px;

  background-position: center;

  margin-top: 30px;
}

.menu p{

  font-size: 13px;
}


.menu h6, .menu h5{

  font-weight: bold;
}

.menu input,.menu select,.menu textarea{

  border:1px solid rgba(0,0,0,0.2);
  font-size: 13px;

  
}


.menu button{
font-size: 13px;

}





.menu_mini{


  background-color: white;

  opacity: 0.9;

  padding: 10px;
}


/*--------------------------------------------------------------
# offenders
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
  padding: 10px 40px;

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
# assets
--------------------------------------------------------------*/









/*--------------------------------------------------------------
# Explore button
--------------------------------------------------------------*/
.btn-default{

  border:3px solid skyblue;
  border-radius: 5px;

  width: 50%;
  font-size: 13px;


 
}


/*--------------------------------------------------------------
# button search category
--------------------------------------------------------------*/


/*--------------------------------------------------------------
# category_list
--------------------------------------------------------------*/


#category_list_home{

position: relative;

left: -55%;

padding: 0;

margin: 0;

width: 100%;

}



#category_list{

position: absolute;

left: 0;

padding: 0;

margin: 0;

}



#category_list img{

width: 180px;

height: 210px;
  
}



#category_list ul{

list-style-type: none;


}

#category_list figcaption{

color: black;

text-align: center;

position: relative;

bottom: 90px;

font-weight: bold;

margin: auto;

left: 0;

right: 0;

text-transform: capitalize;

background-color: white;

padding:5px;

width:60%;

border-radius: 5px;

font-size: 11px;
}


@media only screen and (max-width:767px){

#category_list_home{

position: relative;

left: 0%;

padding: 0;

margin: 0;

width: 100%;

}
 

}




/*--------------------------------------------------------------
# navigator sign up/ log in
--------------------------------------------------------------*/


.nav_signup{


border:1px solid none;
border-left:1px solid white;
border-left-color: rgba(192,192,192,1);
padding-left:8px;

}



/*--------------------------------------------------------------
# Background picture letters
--------------------------------------------------------------*/



#main h3{


  white-space: pre;
  color: white !important;
  font-family: poppins;
  text-transform: capitalize;
  font-size: 25px;
  margin-top: 10%;
  font-weight: bold;
}


#main h3::first-letter{



  text-transform: capitalize;
}


/*--------------------------------------------------------------
# Background picture
--------------------------------------------------------------*/





/*--------------------------------------------------------------
# Background picture mobile
--------------------------------------------------------------*/




/*--------------------------------------------------------------
# icons gallery 
--------------------------------------------------------------*/












.banner figure{
  position: relative;
  float: right;
  margin-right: 50px;
  padding: 10px;
  
}

@media only screen and (max-width:767px){


.banner figure{

  
}

.banner figcaption{
  font-size: 10px !important;
  
}



}




figcaption a{

  text-decoration: none;
  color: black;
}




/*--------------------------------------------------------------
# items
--------------------------------------------------------------*/




/*--------------------------------------------------------------
# Carousel mobile
--------------------------------------------------------------*/

@media only screen and (max-width:767px){




.banner figcaption{

font-size: 12px;

}

  
}



/*--------------------------------------------------------------
# Navigation for mobile---desktop
--------------------------------------------------------------*/



 .overlay {

display: none;


 }



  


#open-btn{
   display: none;
  color: white;
  font-size:25px;
  float: right;
  cursor: pointer;
  
  }






/*--------------------------------------------------------------
# Navigation for mobile---phones
--------------------------------------------------------------*/


@media only screen  and (min-width:498px) and (max-width:767px){

.overlay #section_heart{
 
 display: flex!important;
align-items: flex-start;
justify-content: space-between;
width: 20%;
}


}




@media only screen and (max-width:767px){


.overlay{
height: 0%;
width: 100%;
display: block;
position:absolute;
z-index: 300;
top: 85px;
right: 0;
color:#818181;
background-color: rgba(0,60,90,1);
overflow-x:hidden;


}
.overlay-content{
position:relative;
top:10%;
width: 100%;
text-align: center;

}

.overlay a{
padding: 4px;
font-size:13px;
color: white; 
display: block;
text-transform: capitalize;
font-weight:200;
font-family:poppins;
transition: 0.3s;
}

.overlay #section_heart{
 
 display: flex!important;
align-items: flex-start;
justify-content: space-around;
width: 30%;
}





.overlay .close-btn{
position: absolute;
top:-1px;
left:2px;
font-size:19px;
color:white;
border:1px solid transparent;

border-radius:50%;
padding:0px 10px;
z-index: 300;

}

.overlay a:hover,.overlay a:focus{
  color:red;
  text-decoration: none;
}


#open-btn{
   display: block;
  color: white;
  font-size:25px;
  position: absolute;
  cursor: pointer;

  
  
}






}



/*--------------------------------------------------------------
# Navigation button/nav_bar
--------------------------------------------------------------*/


.nav_button img{




  
}











    
.nav_button{

font-family: 'Montserrat',sans-serif;

float: left;

font-size:13px;

cursor: pointer;

color:white;

text-transform:capitalize;


margin-top: 10px;
margin-right:10px;
margin-left:10px;

font-weight: 300;



}



.nav_link{



float: left;

font-size:13px;

cursor: pointer;

color:black;

text-transform:capitalize;

text-decoration: none;

margin-right:23px;

margin-left:23px;

font-weight: 300;

font-family: poppins;

}


.nav_link{



}


  .nav_link:hover{

text-decoration: none;

color: rgba(0,0,0,0.5);

transition: 0.3s ease-in-out;


}



#nav_links,.nav_links{

  text-align: center;
  padding-left:20%;
  background-color:#59aeff;
  font-family: poppins !important
  ;

  
}








/*--------------------------------------------------------------
# Navigation button mobile/nav_bar mobile
--------------------------------------------------------------*/
@media only screen and (min-width:770px) and (max-width:896px){

#nav_links,.nav_links{

  text-align:;
  padding-left:-3%;
  background-color:#59aeff;
  font-family: poppins;
}

  .nav_link{

margin-left: 0em;
margin-right: 0em;


}



}

@media only screen and (max-width:769px){


.nav_button{display: none;}



#nav_links,.nav_links{

  text-align: justify;
  padding-left:0%;
  background-color:#59aeff;
}

  .nav_link{

margin-left: 1em;
margin-right: 1em;


}


}




.nav_button:hover{

opacity: 0.8;

text-decoration: none;

color: white;

}










/*--------------------------------------------------------------
# menu image
--------------------------------------------------------------*/

#main {

 background:linear-gradient(to top right ,rgba(0,70,90,0.1),rgba(0,70,90,0.4)),url("assets/img/home_background_pic.png"); 
 background-size:cover;
 background-position:center;
margin-top:;
 height:100%;

 position: relative;
 padding-bottom: 38px;
 
 box-shadow:0px 3px 15px rgba(192,192,192,0.8);
  
}

/*--------------------------------------------------------------
# menu image
--------------------------------------------------------------*/
#main input{

border-radius: 20px;
border:1px solid transparent;


}














@media only screen and (max-width:767px){


#main {

 background:linear-gradient(to top right,rgba(0,70,90,0.4),rgba(0,70,90,0.3)),url("assets/img/home_background_pic.png"); 
 background-size:cover;
 background-position:center;
margin-top:;
 height:100%;

 
 box-shadow:0px 3px 15px rgba(192,192,192,0.8);
  
}




#main h3{

font-size: 16px;

margin-top:100px;


}






}


/*--------------------------------------------------------------
# menu nav_bar
--------------------------------------------------------------*/
.navbar{

  padding-left: 18%;
  padding-right: 18%;
}


.navbar span{

text-decoration:none; 
color:white;
font-size: 12px;

}


.navbar span, .navbar a{

  margin-left: 13px;
  margin-right: 13px;
}






.btn-info{

float: right;
margin-top: -35px;
margin-right: 4px;
font-size: 12px;
border-radius: 0px 25px 25px 0px;


}

.navbar a:hover{



text-decoration: none;

background-color: white;

color: black !important;

transition:0.5s ease-in-out;



}


.btn-navbar{

  border: 1px solid white;

  padding: 5px 30px;

  color: white !important;

  border-radius: 20px;

  font-size: 12px;

  text-decoration:none; 

color:white;





}



/*--------------------------------------------------------------
# menu nav_bar mobile
--------------------------------------------------------------*/


@media only screen and (max-width:767px){


.navbar a{

text-decoration:none;

color:white; 

}


.btn-navbar{

  border: 1px solid white;

  padding: 5px 12px;

  color: white !important;

  border-radius: 10px;

}



.navbar a:hover{



text-decoration: none;

background-color: white;

color: black;

transition: 0.3s ease-in-out;

}


.navbar{

  padding-left: 0;
  padding-right: 0;
  margin-bottom: 40px;
}


}

@media only screen and (max-width:498px){


.navbar a{

text-decoration:none;

color:white; 
margin-left: 5px;
margin-right: 5px;

}


.btn-navbar{

  border: 1px solid white;

  padding: 5px 12px;

  color: white !important;

  border-radius: 10px;

}



.navbar a:hover{



text-decoration: none;

background-color: white;

color: black;

transition: 0.3s ease-in-out;

}


.navbar{

  padding-left: 0;
  padding-right: 0;
  margin-bottom: 40x;
}



}



/*--------------------------------------------------------------
# menu image
--------------------------------------------------------------*/







@media only screen and (max-width:767px){


.nav_button{display: none;}


}



/*--------------------------------------------------------------
# category
--------------------------------------------------------------*/

.category_row{

  margin-top: 50px;
}












</style>
</head>
<body>

<header>

<header>




 
<div id="myform" class="overlay" id="overlay">

 <button class="btn close-btn" onclick="closeform()"><img src="assets/icons/filter_icon.png"></button> 


  <div class="overlay-content">

 
<a href="discount-page.php" class="" >Discount deals</a>

<a href="service-provider.php" class="" >Service providers<i class="fa fa-caret"></i> </a>

 <a href="gift-picks.php" class="" > &nbsp;gift picks&nbsp;&nbsp;</a>
  
<a   href=" <?php if(!empty($_SESSION['id']) &&!empty($_SESSION['business_id']) &&!empty( $_SESSION["sp_id"])) {echo"postadvert.php";} else{echo"postadvert.php?step=postadvert";} ?>" class="" >&nbsp;Sell a product&nbsp;&nbsp;</a>

<a href="customer-support.php" class="" >&nbsp;Customer support&nbsp;&nbsp;</a>

</div>



 </div>

</div>

<marquee
    onmouseover="stop()"
    onmouseout="start()"
    scrollamount="20"
    class="marquee"
    style="display: flex; background-color: #3b3838; padding: 5px"
>
    <ul
        style="
          width: 100%;
          list-style: none;
          display: flex;
          justify-content: center;
          align-items: center;
          gap: 30px;
        "
    >
        <!-- -------------------------------- -->
        <li
            style="
            font-size: 12px;
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2px;
            border-right: 1px solid #ffffffdc;
            padding-right: 10px;
          "
        >
            <img
                src="/home/images/countries/United Kingdom (GB).png"
                width="20px"
                alt=""
            />&nbsp;<span style="color: #ffffff">EUR</span>
            <span style="color: #21ca07">1.00</span>
            &nbsp;
            <img
                src="/home/images/countries/Nigeria (NG).png"
                width="20px"
                alt=""
            />&nbsp;<span style="color: #ffffff">NGN</span>
            <span style="color: #ff0303">1900.00</span>
        </li>
        <!-- -------------------------------- -->
      
        <!-- -------------------------------- -->
       
        <!-- -------------------------------- -->
        <li
            style="
            font-size: 12px;
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2px;
            border-right: 1px solid #ffffffdc;
            padding-right: 10px;
          "
        >
            <img
                src="/home/images/countries/South Africa (ZA).png"
                width="20px"
                alt=""
            />&nbsp;<span style="color: #ffffff">SHR</span>
            <span style="color: #21ca07">1.00</span>
            &nbsp;
            <img
                src="/home/images/countries/Nigeria (NG).png"
                width="20px"
                alt=""
            />&nbsp;<span style="color: #ffffff">NGN</span>
            <span style="color: #ff0303">1.00</span>
        </li>
        <!-- -------------------------------- -->
   
        <!-- -------------------------------- -->
        
    </ul>
</marquee>



<div id="main">

<p> 

<a href="index.php" style="text-decoration: none;"><img style="" align="" src="assets/icons/logo_e_stores.png" height="" width=""></a>

<?php if (empty($_SESSION['id']) && empty($_SESSION['business_id']) && empty( $_SESSION["sp_id"])) {
 
 ?> 

<span style="float: right;"><a href="login.php" class="nav_login" style="text-decoration: none;color:white;">Login</a>

<a href="join-us.php" class="nav_signup" style="text-decoration: none; color: white;">Sign up</a></span></p>

<?php
} ?>


<h1>


<a href="discount-page.php" class="nav_button" id="" >Discount deals</a>

<a href="service-provider.php" class="nav_button" id="" >Service providers</a> 


<a href="gift-picks.php" class="nav_button" id="" >gift picks</a>


<a href="deals.php" class="nav_button" id="" >Deals</a>


<a  href=" <?php if(!empty($_SESSION['id']) && !empty( $_SESSION["sp_id"])){echo"postadvert.php";} else{echo"login.php?step=postadvert";} ?>" class="nav_button" id="" >Sell a product</a>


<a href="customer-support.php" class="nav_button" id="" >Customer support</a>


<div style="float: right;">

<a href="cart.php" class="nav_button" id="nav_button" ><span class="numbering"></span><img src="assets/icons/mdi_cart-outline.png"></a>

<a href="mylistings.php" class="nav_button" id="nav_button" ><img src="assets/icons/mdi_heart-outline.png"></a>

 <?php if(!empty($_SESSION['id']) || !empty($_SESSION['business_id']) || !empty( $_SESSION["sp_id"])) 


 {
?>
<a href="profile.php" class="nav_button" id="nav_button" ><img src="assets/icons/user.png"></a>

<?php
 } 
?>

</div>

<a class="btn open-btn" id="open-btn" onclick="openform()" ><img src="assets/icons/filter_icon.png"></a>

</h1>



 <h3 id='head-h3' style="text-align: center;">Welcome to E-Stores: Bringing you the
best deals and services</h3><br><br><br>

</div>








<div id="about" style="text-align: center;" class="container">

  <h4>What we are about</h4><br>
  

<div class="row">
  
<div class="col-md-4">
 
 <img src="assets/icons/group1045.png"> 

<h6>Mission Statement</h6>

<p>Lorem ipsum dolor sit amet consectetur.
Scelerisque cras nunc dui fames dui
adipiscing. Curabitur sed adipiscing arcu
mollis. Sed lectus massa phasellus
pellentesque vulputate pellentesque leo
dolor. Aliquet praesent turpis diam nibh sit
vel netus non risus. Commodo nunc enim
quam id sollicitudin rhoncus. Velit congue
in semper et nullam turpis venenatis.</p>


</div>


<div class="col-md-4">
  
 <img src="assets/icons/group1046.png"> 


  <h6>Vision</h6>

<p>Lorem ipsum dolor sit amet consectetur.
Scelerisque cras nunc dui fames dui
adipiscing. Curabitur sed adipiscing arcu
mollis. Sed lectus massa phasellus
pellentesque vulputate pellentesque leo
dolor. Aliquet praesent turpis diam nibh sit
vel netus non risus. Commodo nunc enim
quam id sollicitudin rhoncus. Velit congue
in semper et nullam turpis venenatis.</p>

</div>


<div class="col-md-4">
  
 <img src="assets/icons/group1047.png"> 

<h6>Community Focus</h6>

<p>Lorem ipsum dolor sit amet consectetur.
Scelerisque cras nunc dui fames dui
adipiscing. Curabitur sed adipiscing arcu
mollis. Sed lectus massa phasellus
pellentesque vulputate pellentesque leo
dolor. Aliquet praesent turpis diam nibh sit
vel netus non risus. Commodo nunc enim
quam id sollicitudin rhoncus. Velit congue
in semper et nullam turpis venenatis.</p>

</div>


</div>



</div>


<div id="comment-box" style="width:;text-align: center;" class="container">

  <div style="width: 50%;margin-right:10px;">
  

<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>




<b><q>Shipam revolutionized our procurement at Tech Solutions Inc.
Seamless B2B features and a vast network of reliable suppliers
streamlined our supply chain. The platform's security and
verified partners ensure trust in transactions. Game-changer for
efficiency highly recommended!</q></b><br>


<img src="assets/img/avatar_image.png">

<div id="commenter">

<span id="user_name">Sarah Johnson</span><br>

<span id="user_position">Procurement Manager, Tech Solutions Inc.</span>

</div>


</div>





 <div style="width: 50%;margin-right:10px;">
  

<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>




<b><q>Shipam revolutionized our procurement at Tech Solutions Inc.
Seamless B2B features and a vast network of reliable suppliers
streamlined our supply chain. The platform's security and
verified partners ensure trust in transactions. Game-changer for
efficiency highly recommended!</q></b><br>


<img src="assets/img/avatar_image.png">

<div id="commenter">

<span id="user_name">Sarah Johnson</span><br>

<span id="user_position">Procurement Manager, Tech Solutions Inc.</span>

</div>


</div>





 <div style="width: 50%;margin-right:10px;">
  

<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>




<b><q>Shipam revolutionized our procurement at Tech Solutions Inc.
Seamless B2B features and a vast network of reliable suppliers
streamlined our supply chain. The platform's security and
verified partners ensure trust in transactions. Game-changer for
efficiency highly recommended!</q></b><br>


<img src="assets/img/avatar_image.png">

<div id="commenter">

<span id="user_name">Sarah Johnson</span><br>

<span id="user_position">Procurement Manager, Tech Solutions Inc.</span>

</div>


</div>











</div>




<br><br>

<?php include 'footer.php'; ?>

</div>




<script type="text/javascript">
function openform() {
  document.getElementById("myform").
  style.height="39%";
}

function closeform() {
  document.getElementById("myform").
  style.height="0%";
}
  




</script>



<script>
 $('.numbering').load('engine/item-numbering.php'); 

$('#comment-box').flickity({
 
  cellAlign: 'left',
  contain: true,
  autoPlay:true,
  arrowShape:'M 0,50 L 60, 00 L 50, 30 L 80, 30 L 80,70 L 50,70 L 60,100 Z'
 
 

});





</script>




<script type="text/javascript">
function openform() {
  document.getElementById("myform").
  style.height="39%";
}

function closeform() {
  document.getElementById("myform").
  style.height="0%";
}

</script>








<!------------------------------------------btn-scroll--------------------------------------------------->

<a class=" btn-down" onclick="topFunction()">&#8593;</a>

<script src="assets/js/scroll.js" type="text/javascript"></script>

</body>
</html>

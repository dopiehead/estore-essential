
<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);

require 'engine/get-dollar.php';

if (!empty($_SERVER['REMOTE_ADDR'])) {
$ipaddress = $_SERVER['REMOTE_ADDR'];
require 'engine/configure.php';
$checkIp = mysqli_query($conn,"select * from ip where user_ipaddress ='$ipaddress'"); 
if ($checkIp->num_rows>0) {  
}

else{
$insertIp = mysqli_query($conn,"insert into ip(user_ipaddress) values ('$ipaddress')");
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
<?php  session_start();
 require 'engine/configure.php';  
if(isset($_POST["submit"]))   {  
if(!empty($_POST["search"]))   {  
$query = str_replace(" ", "+", mysqli_real_escape_string($conn,$_POST["search"]));
header("location:search-process.php?search=" .htmlspecialchars($query)); 
 }  

 }  

 ?>  














<!DOCTYPE html>
<html>
<head>
	<title>E-stores | Homepage </title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/flickity.min.css">
   <link rel="stylesheet" href="assets/css/btn_scroll.css">
  <script src="assets/js/sweetalert.min.js"></script> 
  <script src="assets/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.lazy.min.js"></script>
<script src="assets/js/flickity.pkgd.min.js"></script>
<style type="text/css">


/*--------------------------------------------------------------
# Body styles
--------------------------------------------------------------*/
    




body{
 
font-family: poppins;

}






.active{

  display: none;
}


.btn-close{

  width:5px;
  font-size: 12px;
  padding: 2px;


}

.btn-home{

  display: grid;
  justify-content: flex-start;
  height: 168px;
  width:5px;
  margin-top: -167px;

}

@media only screen and (max-width:497px){




.btn-home{

  display: grid;
  justify-content: flex-end !important;
  align-items: flex-end;
  height: 0px;
  width:100%;
  margin-top:0px;

}

.btn-close{

  width:300px;
  font-size: 12px;
  padding:0px;


}



}









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






.active{

display: none;


}








#q::placeholder{

font-family:sans-serif;

font-size: 14px;

margin-left: 20px;

opacity: 0.8;

}




.alert-danger{

  padding:15px;
  position: relative;
  margin-top: 20px;


}



/*--------------------------------------------------------------
# drop down styles
--------------------------------------------------------------*/


#show_production{ 


padding: 10px;

z-index: 1

box-shadow: 0px 0px 4px rgba(0,0,0,0.5);

border:1px solid rgba(0,70,90,0.3);

width: 300px;

color: black;

text-transform: capitalize;

background-color: white;

background-color: white;

padding-left: 80px;


}







@media only screen and (max-width:497px){

#show_production{ 


padding: 10px;

z-index: 1

box-shadow: 0px 0px 4px rgba(0,0,0,0.5);

border: 2px solid skyblue;

width: 300px;

color: black;

text-transform: capitalize;

background-color: white;

background-color: white;


}


}



#show_product{

position:absolute;
top: 150px;
transform: translate(-50%,-50%);
left: 500px;

padding:5px;

z-index: 1;
  
}



#show_product a{ 

font-size:12px;
color: black;
}

@media only screen and (max-width:497px){



#show_product{

position:absolute;
top: 150px;
transform: translate(-50%,-50%);
left: 250px;

padding:5px;

z-index: 1;
  
}



}








/*--------------------------------------------------------------
# header styles
--------------------------------------------------------------*/

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
.offenders{

  text-align: center;

  margin-top: 30px;

  border:4px solid skyblue;

  padding:15px;

  border-radius: 10px;

  font-size: 13px;
}


.offenders img{

  width: 200px;
}


.offenders button{

  border:1px solid skyblue;
  padding: 3px 18px;
  margin-top: 30px;
  background-color: rgba(192,192,192,0.3);
  font-weight: bold;
  color: skyblue;
  font-size: 14px;
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


/*--------------------------------------------------------------
# assets
--------------------------------------------------------------*/

#data_price,#data_name{

  padding-left: 20px;
  font-size: 13px;
  text-transform: capitalize;
}



#assets_container .package  img{


width: 180px;
height: 120px;
float: right;

}


@media only screen and (max-width:497px){




#assets_container .package  img{


width: 100%;

height: 80px;


}


#assets_container .package{


display: inline-block;

margin:1em 2em;

border:1px solid rgba(0,70,90,0.1);

padding: 1px;

width:195px !important;


}






}


@media only screen and (min-width:498px) and (max-width:767px){

#assets_container .package  img{


width: 17em;

height: 80px;

}


#assets_container .package{


display: inline-block;

margin:1em 2em;

border:1px solid rgba(0,70,90,0.1);

padding: 1px;


}

}








#assets_container .package{


display: inline-block;

margin:1em 1em;

border:1px solid rgba(0,70,90,0.1);

padding: 1px;

width: 250px;

}







#assets_container {

font-size: 10px;

width: 100%;

margin-top: 30px;

}





#assets_container  figure img{

width: 100%;

height: 400px;



}


#assets_container {

position: relative;



}


#assets_container figcaption{

position: absolute;

top: 50%;

left: 0;

right: 0;

padding:3px 20px;

margin: auto;

color: black;

font-size: 12px;

border:1px solid transparent;

background-color: white;

border-radius: 10px;

text-align: center;



}











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
#category_button{

font-size: 12px;
float: right;
margin-top: -33px;
margin-right: 1px;

}

#categories{

  font-size: 12px;
  text-transform: capitalize;
}

#search_category{

border:1px solid transparent;

background-color: #F5F5F5;

box-shadow: 0px 0px 3px rgba(0,0,0,0.3);

font-size: 13px;

}


.checkbox{

font-size: 12px;

}




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
.add_icon{

padding: 20px;
background-color: #D5D5D5;
border-radius: 10px;
border: 1px solid transparent;
box-shadow: 0px 3px 8px rgba(255,255,255,0.9);



}

.icons{

  display: inline-block;


}

#img_coca{

  width: 70%;
  margin-top: 0px;
}



@media only screen and (min-width:365px) and (max-width:553px){



#img_coca{

  width: 60%;
  height: 100px;
  margin-top: 0px;

}


.add_icon{

padding: 10px;
margin-top: -105px;
float: right;
position: relative;
background-color: #D5D5D5;
border-radius: 10px;
border: 1px solid transparent;
box-shadow: 0px 3px 8px rgba(255,255,255,0.9);



}


.add_icon, #img_coca{
display: inline-block;
}








}




@media only screen and (min-width:553px) and (max-width:767px){



#img_coca{

  width: 60%;
  height: 100px;
  margin-top: 0px;

}


.add_icon{

padding: 10px;
margin-top: -10px;
float: right;
position: relative;
background-color: #D5D5D5;
border-radius: 10px;
border: 1px solid transparent;
box-shadow: 0px 3px 8px rgba(255,255,255,0.9);



}


.add_icon, #img_coca{
display: inline-block;
}








}









@media only screen and (min-width:767px) and (max-width:1280px){



#img_coca{

  width: 60%;
  height: 100px;
  margin-top: 0px;

}


.add_icon{

padding: 10px;
margin-top: -10px;
float: right;
position: relative;
background-color: #D5D5D5;
border-radius: 10px;
border: 1px solid transparent;
box-shadow: 0px 3px 8px rgba(255,255,255,0.9);



}


.add_icon, #img_coca{
display: inline-block;
}





#package{

  position: relative;

background-color:rgba(243,243,243,0.1);margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding:25px 8px;

width:150px;

display: inline-block;
margin:1em 1em;

}




}




@media only screen and (min-width:497px) and (max-width:767px){


#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding: 8px;

width:140px;

display: inline-block;
margin:1em 1em;

}


}























.add_icon, #img_coca{

  margin-left: 8px;
  margin-right: 8px;
}



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

#package{

background-color:rgba(243,243,243,0.1);padding-bottom:15px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding: 0px 0px;

width:190px;

display: inline-block;
margin:1em 1em;

}


#priceitem{

font-family:Poppins;
font-weight: bold;
color:black;
opacity: 0.8;
text-transform:capitalize;
font-size:13px;
padding:5px;
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
height: 140px;
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

width:200px;

display: inline-block;
margin:1em 1em;

}


#priceitem{

font-family:Poppins;
font-weight: bold;

text-transform:capitalize;
font-size:13px;
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


#btn_explore{


  padding: 5px 4px;
  font-size: 12px;
  border:1px solid rgba(0,90,70,0.6);
  color: black;
}




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
top: 128px;
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

#section_heart{
 
 display: flex!important;
align-items: flex-start;
justify-content: space-around;
width: 30%;
display: inline-block;
}

#nav_button{

  display: inline-block !important;
  font-family: poppins;
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

font-family: poppins !important;

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
margin-top: -33px;
margin-right: 1px;
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
            <span style="color: #ff0303"><?php echo$dollar_rate ?></span>
        </li>
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
                src="/home/images/countries/India (IN).png"
                width="20px"
                alt=""
            />&nbsp;<span style="color: #ffffff">INR</span>
            <span style="color: #21ca07">1.00</span>
            &nbsp;
            <img
                src="i/home/mages/countries/Nigeria (NG).png"
                width="20px"
                alt=""
            />&nbsp;<span style="color: #ffffff">NGN</span>
            <span style="color: #ff0303">1.00</span>
        </li>
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
                src="/home/images/countries/China (CN).png"
                width="20px"
                alt=""
            />&nbsp;<span style="color: #ffffff">CHI</span>
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
                src="/home/images/countries/Japan (JP).png"
                width="20px"
                alt=""
            />&nbsp;<span style="color: #ffffff">JPN</span>
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
                src="/home/images/countries/Ghana (GH).png"
                width="20px"
                alt=""
            />&nbsp;<span style="color: #ffffff">GHN</span>
            <span style="color: #21ca07">1.00</span>
            &nbsp;
            <img
                src="/home/images/countries/Nigeria (NG).png"
                width="20px"
                alt=""
            />&nbsp;<span style="color: #ffffff">NGN</span>
            <span style="color: #ff0303">1.00</span>
        </li>
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


<a  href=" <?php if(isset($_SESSION['id']) || isset( $_SESSION["sp_id"]) || isset( $_SESSION["business_id"])){echo"postadvert.php";} else{echo"login.php?step=postadvert";} ?>" class="nav_button" id="" >Sell a product</a>


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
best deals and services</h3><br>


<h6 class='container' style="text-align: center;">


<form method="post" id="formQ">


  <input type="text" style="font-size:13px;" name="search" id="search"  placeholder="I'm looking for" class="search form-control"><button class="btn btn-info" name="submit"><i class="fa-solid fa-search"></i> search</button>


</form>



</h6>

<div id="result"></div>

<br>

<div style="text-align: center;" class="navbar" style="">


<span href="">Frequently searched:</span>

<a href="search-process.php?search=towel" class="btn btn-navbar" href="">Towel</a>

<a href="search-process.php?search=chicken" class="btn btn-navbar" >Chicken</a>

<a style="" href="search-process.php?search=iron door" class="btn btn-navbar" >Iron door</a>




      
    </div>



    
    <br><br>
</div>

</header>


<br>



<div class="container nav_links">


  <a href="products.php?page=farm products" style="font-family: poppins;" class="nav_link" >Farm products</a>


<a href="products.php?page=autoparts" class="nav_link" id="" >Autoparts</a>


<a href="products.php?page=building material" class="nav_link" id="" >Building material</a>


<a href="products.php?page=hotel products" class="nav_link" id="" >Hotel product</a>

</div>

<br>

<br>




<div class="container" id="category_row">

<div class="row">

<div class="col-md-4">

<h6>Categories</h6><br>



<input id="search_category"  type="search" class="form-control"  name="search_category" placeholder="Search category"><button id="category_button" class="btn btn-success">Search category</button>






<?php

require 'engine/configure.php';

$query_category = mysqli_query($conn,"SELECT product_category, COUNT(*) AS count FROM item_detail GROUP BY product_category");

while ($row = mysqli_fetch_array($query_category)) {
  
?>


<br> 
<input type="checkbox" class="checkbox" id="<?php echo$row['product_category']?>" name="<?php echo$row['product_category']?>" value="<?php echo$row['product_category']?>">


<label  for="categories" style="width: 90%;" id="categories"> <span id="words"><?php echo$row['product_category']?> </span>

<span class="select_category" id="<?php echo$row['product_category']?>" name="<?php echo$row['product_category']?>" style="float: right;">

  <img src="assets/icons/chevron_arrow_right.png">

    <?php echo$row['count']?> 




</span></label> 


<?php 


}



?>




<span id="show_product"></span>



<script>
$('#search_category').on("keyup",function() {
 
  var value = $(this).val().toLowerCase();

 $("#categories span").filter(function() {
  
  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  
 });

});
</script>


<br><br>

  </div>

<div class="col-md-8">
  
<div class="banner">

<img id="img_coca" class="icons" src="assets/img/coca_cola.png">  

<figure>

<a href="postadvert.php"><img id="add_icon" src="assets/icons/add_icon.png" class="add_icon icons"></a>

<figcaption><a href=" <?php if(!empty($_SESSION['id'])){echo"postadvert.php";} else{echo"postadvert.php?step=postadvert";} ?>">Post your advert here</a></figcaption>

</figure>

</div>

<br><br>

<div class="item_images">

<h6><b>Best seller deals</b></h6>

<?php


require 'engine/configure.php';



$condition = "SELECT * from item_detail where sold = 0 order by id desc limit 6";

$data = mysqli_query($conn,$condition);

$datafound = $data->num_rows;

echo "<table><tbody id='mytable' class=''>";

        while($row=mysqli_fetch_array($data))

        {        
            ?>
        <?php   

echo "<div id='package'>";




$price = $row['product_price'];



$dollar = round(($price/$dollar_rate));

      if ($row['discount']>0) {

 echo "<span id='discount'>-".$row['discount']."%</span>";}



       if ($row['discount']==0) {

 echo "<span class='' id='noviews'>".$row['views']." <i class='fa fa-eye'></i></span>";

}
   
echo "<a href='product-details.php?id=".urlencode($row['id'])."' target='_blank'><div style=''><img loading='lazy' id='imgitem'  src=".$row['product_image'].">"." "."</div></a>";



 
            if ($row['discount']>0) {


       $price = $row['product_price'];

  echo"<span style='text-decoration:line-through;' id='priceitem'>&#8358;".$price."</span> ";

  echo"<span id='priceitem'>&#8358;".round(( $row['product_price'])-($row['discount']/100 * $price),2)."</span><br>";

   echo"<span style='text-decoration:line-through;' id='priceitem'>$".round(($price/$dollar_rate),2)."</span>";

   echo"<span id='priceitem'>$".round(($dollar)-($row['discount']/100 * $dollar))."</span><br>";



}



       if ($row['discount']==0) {



 echo"<span id='priceitem'>&#8358;".$price."</span> ";


 echo" <span id='priceitem'>$".round($price/$dollar_rate)." </span><br>";


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

<br><br><br><br>

</div>
</div>

<div style="position: relative;" class="container">





<!------------------------------------------Categories & Details hotel--------------------------------------------------->

  
<div id="assets_container" class="row">
  
  <div id="" class="col-md-3">

   <figure style="width: 100%;"> <img src="assets/img/category/hotel_use.png"><figcaption>Hotel use</figcaption></figure>

  </div>
    
    <div class="col-md-7">
      
<?php

$category_select_list = mysqli_query($conn,"select * from item_detail where product_category = 'hotel products' limit 6");

while ($datafound = mysqli_fetch_array($category_select_list)) {

   $id = $datafound['id'];
 
?>

<div class="package">


    <div style="position: relative;top:0px;">

<span style="padding-top:5px;" id="data_name"><?php echo$datafound['product_name']?></span><br>


<span style="opacity: 0.5" id="data_price">From<br></span>

<span style="opacity: 0.5" id="data_price"> <?php echo$datafound['product_price']?></span>

<span style="opacity: 0.5" id="data_price"> <?php echo" $ ".round($datafound['product_price']/$dollar_rate)?></span><br>

</div>

 <a href="product-details.php?id=<?php echo$id ?>"><img class="lazy" src='https://via.placeholder.com/200'  data-src="<?php echo$datafound['product_image']?>" ></a><br>


</div>

<?php

}


?>

</div>

    <div style="" class="col-md-2" style="">

      <a href="products.php?page=hotel products" style="position: absolute;top: 50%;font-size: 13px;text-align: center;" class="btn btn-default ">Explore</a>

    </div>

<br><br>
</div>









<!------------------------------------------Categories & Details farm products--------------------------------------------------->



<div id="assets_container" class="row">
  
  <div id="" class="col-md-3">

   <figure> <img src="assets/img/category/farm_product.png"><figcaption>Farm products</figcaption></figure>



  </div>
    
    <div class="col-md-7">
      
<?php

$category_select_list = mysqli_query($conn,"select * from item_detail where product_category = 'farm products' order by id desc limit 6");

while ($datafound = mysqli_fetch_array($category_select_list)) {

    $id = $datafound['id'];
 
?>




<div class="package">


    <div style="position: relative;top:0px;">

<span style="padding-top:5px;" id="data_name"><?php echo$datafound['product_name']?></span><br>


<span style="opacity: 0.5" id="data_price">From<br></span>

<span style="opacity: 0.5" id="data_price"> <?php echo$datafound['product_price']?></span>

<span style="opacity: 0.5" id="data_price"> <?php echo" $ ".round($datafound['product_price']/$dollar_rate)?></span><br>



</div>

 <a href="product-details.php?id=<?php echo$id ?>"><img class="lazy" src='https://via.placeholder.com/200'  data-src="<?php echo$datafound['product_image']?>" ></a><br>


</div>

<?php

}


?>


</div>



    <div style="" class="col-md-2" style="">

      <a href="products.php?page=farm products" style="position: absolute;top: 50%;" class="btn btn-default ">Explore</a>


    <br>
    <br>
    </div>


</div>




<!------------------------------------------Categories & Details Building materials--------------------------------------------------->



<div id="assets_container" class="row">
  
  <div id="" class="col-md-3">

   <figure> <img src="assets/img/category/building_materials.png"><figcaption><a>Building materials</a></figcaption></figure>



  </div>
    
    <div class="col-md-7">
      
<?php

$category_select_list = mysqli_query($conn,"select * from item_detail where product_category = 'building material' order by id desc limit 6");

while ($datafound = mysqli_fetch_array($category_select_list)) {

  $id = $datafound['id'];
 
?>




<div class="package">


    <div style="position: relative;top:0px;">

<span style="padding-top:5px;" id="data_name"><?php echo$datafound['product_name']?></span><br>


<span style="opacity: 0.5" id="data_price">From<br></span>

<span style="opacity: 0.5" id="data_price"> <?php echo$datafound['product_price']?></span>

<span style="opacity: 0.5" id="data_price"> <?php echo" $ ".round($datafound['product_price']/$dollar_rate),2?></span><br>





</div>

<a href="product-details.php?id=<?php echo urlencode($id) ?>"><img class="lazy" src='https://via.placeholder.com/200'  data-src="<?php echo$datafound['product_image']?>" ></a><br>


</div>

<?php

}


?>


</div>



    <div style="" class="col-md-2" style="">

      <a href="products.php?page=building material" style="position: absolute;top: 50%;" class="btn btn-default ">Explore</a>
<br><br>
    </div>

</div>






<!------------------------------------------Categories & auto parts--------------------------------------------------->



<div id="assets_container" class="row">
  
  <div id="" class="col-md-3">

   <figure> <img src="assets/img/category/auto.png"><figcaption><a>Auto parts</a></figcaption></figure>



  </div>
    
    <div class="col-md-7">
      
<?php

$category_select_list = mysqli_query($conn,"select * from item_detail where product_category = 'autoparts' order  by id desc limit 6");

while ($datafound = mysqli_fetch_array($category_select_list)) {

  $id = $datafound['id'];

 
?>




<div class="package">


    <div style="position: relative;top:0px;">

<span style="padding-top:5px;" id="data_name"><?php echo$datafound['product_name']?></span><br>


<span style="opacity: 0.5" id="data_price">From<br></span>

<span style="opacity: 0.5" id="data_price"> <?php echo$datafound['product_price']?></span>

<span style="opacity: 0.5" id="data_price"> <?php echo" $ ".round($datafound['product_price']/$dollar_rate)?></span><br>





</div>

 <a href="product-details.php?id=<?php echo$id ?>"><img class="lazy" src='https://via.placeholder.com/200'  data-src="<?php echo$datafound['product_image']?>" ></a><br>


</div>

<?php

}


?>


</div>



    <div style="" class="col-md-2" style="">

      <a href='products.php?page=autoparts' style="position: absolute;top: 50%;" class="btn btn-default ">Explore</a>
<br><br><br>
    </div>

</div>
</div>

<!------------------------------------------End of Categories --------------------------------------------------->



<!------------------------------------------Discount deals--------------------------------------------------->
<div style="margin-top: 30px;text-transform:capitalize;" class="container">

<br>
<h6 style="font-weight: bold;">On discount deals</h6>

<?php 

require_once 'engine/configure.php';
$discount = mysqli_query($conn,"select * from item_detail where discount>0");
if ($discount ->num_rows>0) {
echo "<table><tbody id='mytable' class=''>";

        while($row=mysqli_fetch_array($discount))

        {        
            ?>
<?php   

echo "<div id='package'>";
$price = $row['product_price'];
$dollar = round($price/$dollar_rate);
if ($row['discount']>0) {
 echo "<span id='discount'>-".$row['discount']."%</span>";}



       if ($row['discount']==0) {
echo "<span class='' id='noviews'>".$row['views']." <i class='fa fa-eye'></i></span>";

}
   
?>


<a href='product-details.php?id=<?php echo$row["id"]?>' target='_blank'><img loading='lazy' id='imgitem' src="<?php echo $row['product_image']?>"></a>
<?php
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



<?php

}




?>




<!------------------------------------------deals less than 10000--------------------------------------------------->



<div style="margin-top:0px;text-transform:capitalize;" class="">

<br>
<h6 style="font-weight: bold;">Deals under &#8358;10000</h6>

<?php 

require_once 'engine/configure.php';

$discount = mysqli_query($conn,"select * from item_detail where product_price <10000");

if ($discount ->num_rows>0) {


echo "<table><tbody id='mytable' class=''>";

        while($row=mysqli_fetch_array($discount))

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
   
echo "<a href='product-details.php?id={$row['id']}&{$row['product_name']}&{$row['product_location']}&{$row['product_category']}&{$row['product_details']}' target='_blank'><div style=''><img loading='lazy' id='imgitem' src=".$row['product_image'].">"." "."</div></a>";



 if ($row['discount']>0) {


       $price = $row['product_price'];
  echo"<span style='text-decoration:line-through;' id='priceitem'>&#8358;".$price."</span> ";
  echo"<span id='priceitem'>&#8358;".(( $row['product_price'])-($row['discount']/100 * $price))."</span><br>";
  echo"<span style='text-decoration:line-through;' id='priceitem'>$".round($price/$dollar_rate)."</span>";
   echo"<span id='priceitem'>$".round(($dollar)-($row['discount']/100 * $dollar))."</span><br>";



}



       if ($row['discount']==0) {
 echo"<span id='priceitem'>&#8358;".$price."</span> ";
echo" <span id='priceitem'>$".round($price/$dollar_rate)." </span><br>";


}

echo "<span id='nameitem' style='' ><a target='_blank' href='details-visitor.php?id={$row['id']}&{$row['product_name']}&{$row['product_location']}&{$row['product_category']}&{$row['product_details']}'>".$row['product_name']."</a></span>"."<br>"; 
  echo"<span id='locitem'>".$row['product_location'].""."</span><br>";


  ?> 
                <?php


          echo"</div>";      
                
}
        ?>


</tbody></table>


<?php

}




?>

</div>



<!------------------------------------------Footer menu--------------------------------------------------->


<div class="menu">

  <div class="row">
  
  <div class="col-md-6">

<h5>An easy way to send requests to all suppliers</h5>

<p>Lorem ipsum dolor sit amet consectetur. Aliquet commodo semper dictumst donec dui. Velit egestas ipsum feugiat non eget mattis tellus egestas nunc. Augue et feugiat at luctus odio congue. Risus pharetra cursus lectus pellentesque.</p>

</div>


<div class="col-md-6">

  <div class="menu_mini">
  
<h6>Send a short message to suppliers</h6>

<form id="request_form" method="post">
<input type="text" name="item_name" class="form-control" placeholder="What item you need?"><br>
<textarea name="more_details" placeholder="....Type more details" wrap="physical" class="form-control"></textarea><br>
<input type="text" name="item_quality"  size="6"  placeholder="Quality">&nbsp;
<select id="pcs" name="pcs">
<option value="">PCS</option>
  <option value="1">1</option>
   <option value="2">2</option>
    <option value="3">3</option>
     <option value="4">4</option>
      <option value="5">5</option>
       <option value="6">6</option>
        <option value="7">7</option>
         <option value="8">8</option>
          <option value="9">9</option>
           <option value="10">10</option>
           <option value="11">11</option>
           <option value="12">12</option>
            




</select><br><br>

<input type='submit'  class="btn btn-primary btn-request" value="Send request" >
</form>
</div>
</div>

</div>
<br><br>
</div>

<!------------------------------------------Footer offenders--------------------------------------------------->

<div class="row offenders"> 
 <div class="col-md-4"><button class="btn">Click here</button></div> 
<div class="col-md-4"><span>Here are some reported culprits consectetur. Ullamcorper bibendum diam sapien faucibus. Dolor in nibh malesuada ph.</span></div> 
<div class="col-md-4"><img src="assets/img/offenders.png"></div> 




</div>
<br><br>

</div>

</div>

<!------------------------------------------Footer--------------------------------------------------->

<?php

include 'footer.php';




?>



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







<script type="text/javascript">
$('input:checkbox,.select_category').on('click',function (e) {
var category = $(this).attr('id');
  e.preventDefault();
     $.ajax({
     type: "POST",
     url: "engine/product-process.php",
     data: {'category':category},
     cache:false,
     contentType: "application/x-www-form-urlencoded",
      success: function(response) {

               $('#show_product').html('<div class="container">'+response+'<div class="btn-home"><button class=" btn btn-primary btn-close">&times</button></div></div>').slideDown();

               $('.btn-close').click(function(e) {

                e.preventDefault();

                 
                 $('#show_product').hide();
                 
               });

             }

});


});



</script>



<script type="text/javascript">

var instance = $("img.lazy").Lazy({chainable: false});
$("img.lazy").Lazy();
var instance = $("img.lazy").data("plugin_lazy");

</script>


<script>
$('.numbering').load('engine/item-numbering.php');
$('.btn-request').on('click',function(e){
e.preventDefault();
var data = $('#request_form').serialize();
$('.loading-image').show();
$.ajax({

     type:"POST",
     url:"engine/request-page.php",
     data: $('#request_form').serialize(),
     success:function(response) {
     if (response ==1) {
     swal({
     icon:"success",
     text:"Message was sent successfully",
     });


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


<!------------------------------------------btn-scroll--------------------------------------------------->

<a class=" btn-down" onclick="topFunction()">&#8593;</a>

<script src="assets/js/scroll.js" type="text/javascript"></script>




</body>
</html>

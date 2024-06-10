
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>E-stores | Service provider </title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/flickity.min.css">
       <link rel="stylesheet" href="assets/css/overlay.css">
   <link rel="stylesheet" href="assets/css/cart.css">
  <script src="assets/js/sweetalert.min.js"></script> 
  <script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/flickity.pkgd.min.js"></script>
<style type="text/css">

body{font-family: poppins;}





#think{
margin-left: 210px !important;

}

@media only screen and (max-width:497px){
#think{
margin-left: 110px !important;

}
}



#menu_img{

	width: 180px !important; 

	height: 150px;
}






@media only screen and (max-width:512px){


#menu_img{

	width: 130px !important; 

	height: 100px;
}
}


@media only screen and (max-width:512px){

.fa-envelope, .fa-map-marker{

	font-size: 12px;
}


}








.menu_sp  tr td a{

	font-size: 13px;
}


#home_verified{

  position: absolute;

  top:110px;

  left:130px;
}


#verified{

background-color: green;

color: white;

font-size: 11px;

padding: 0px 9px;

margin-left:-5px;

border-radius: 15px;

z-index: -1;

}


.stars .fa-star{

 font-size:14px;
 color:black;
}

.stars{

position: relative;
top:-10px;
	
}


@media only screen and (max-width:512px){

#sp_name, #sp_name {

color:black;

font-size:13px;

text-transform: capitalize;

font-weight: bold;

}



#sp_location, #sp_location{

font-weight: bold;

font-size:0.6rem;

color: black;

}

}



#sp_name, #sp_name {

color:black;

font-size: 14px;

font-weight: bold;

text-transform: capitalize;

}



#sp_location, #sp_location{

font-weight:normal;

font-size:0.8rem;

color: black;

}





#sp_speciality, #sp_speciality{


font-size:0.8rem;

color: black;

}



@media only screen and (max-width:512px){


#sp_speciality, #sp_speciality{


font-size:0.7rem;

color: black;

}

}



#sp_button{

color:white;background-color:blue;border-radius:8px;border:1px solid transparent;font-size:0.8rem;padding:3px 8px;

}




@media only screen and (max-width:512px){


#sp_button{

color:white;background-color:blue;border-radius:8px;border:1px solid transparent;font-size:0.6rem;padding:3px 8px;

}


}









.menu_sp a{

color: black;

}



.nav_signup{


border:1px solid none;
border-left:1px solid white;
border-left-color: rgba(192,192,192,1);
margin-left:0px;



}

.nav_login{



margin-left:80px;

}




/*--------------------------------------------------------------
background picture
--------------------------------------------------------------*/






#main_service_provider h6{color: white;font-weight: bold;}



#main_service_provider{



background-image: url(assets/icons/rectangle_28.png);

background-size: cover;

background-position: center;

width: 100%;

height: 100%;

position: relative;

text-align: center;

}



.menu_service_provider select{

font-size: 12px;

background-color: rgba(0,0,0,0.1);

color: white;


}


.menu_service_provider {


padding: 30px;

background-color: rgba(192,192,192,0.1);

border:1px solid white;

border-radius: 8px;





}


.menu_service_provider .btn-primary{

	font-size: 12px;

	color: white;
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


#search_page{

  margin-left: -350px;
}




.service_providers{

  width: 100%;

  font-size: 13px !important;

  text-align: center;

}



@media only screen and (max-width:767px){


.menu_sp img{

  width: 150px;

  height: 150px;

border-radius: 50%;
}


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

@media only screen and (max-width:1200px){

.button_navigation{

display: none;

}


.open-btn{display: block !important;font-size: 16px; margin-top: -6px;color: black;}


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
# flickity
--------------------------------------------------------------*/




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

<!------------------------------------------header navigation--------------------------------------------------->
<?php include 'nav.php'; ?>

<?php include 'overlay.php'; ?>


<br>
	<div class="nav-container container">

<a class="category" href="">Service provider</a><a class="category" style="color: skyblue;" href="">Auto service provider</a><br><br>


</div>



<!------------------------------------------background picture--------------------------------------------------->

<div class="container" id="main_service_provider">
	

<br>













<!------------------------------------------background search criteria--------------------------------------------------->
<div class="menu_service_provider">



	
<h6>Search for Auto Service Provider</h6><br>

<div class="row">
	
<div class="col-md-4"><select class="form-control"><option>Enter category</option></select><br></div>

<div class="col-md-4"><select class="form-control"><option>Enter speciality</option></select><br></div>

<div class="col-md-4"><select class="form-control"><option>Enter location</option></select><br></div>





</div>


<input type="submit" name="search_providers" class="form-control btn btn-primary" value="Search">



</div>



<br><br>

</div>


<!------------------------------------------Service provider list--------------------------------------------------->


<br><br>

<div class="container">

<?php

require 'engine/configure.php';

if (isset($_GET['sp_speciality'])) {

$sp_speciality = mysqli_escape_string($conn,$_GET['sp_speciality']);

$service_provider = mysqli_query($conn,"SELECT * from service_providers where sp_speciality = '$sp_speciality'");

echo "<table style='width:100%;'><tbody>";

while ($data = mysqli_fetch_array($service_provider)) {

   $sp_id = $data['sp_id'];

   $sp_speciality = $data['sp_speciality'];

   $sp_ratings = $data['ratings']; 

   echo"<div id ='menu_sp' class='menu_sp'>";







    echo"<tr><td><img id='menu_img' src=".$data['sp_img']."><br>";

     if ($sp_ratings >5) {
    
    echo "<span class='stars'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td></span>";
   }






   
   echo"<td id=''><b id='sp_name'>". $data['sp_name']."</b><br>";

   echo"<span id='sp_speciality'>". $data['sp_speciality']."</span><br>";

   echo"<i class='fa fa-map-marker '></i> <span id='sp_speciality'>". $data['sp_location']."</span><br>";

   echo"<i class='fa fa-envelope '></i> <span id='sp_speciality'>". $data['sp_email']."</span><br></td>";




      echo"<td style='width:10%;'><i class='fa fa-share'></i><br></td>";



echo "<td>";

if ($data['sp_verified']>1) {
	
     echo "100% verified";

}
  
   echo"<a id='sp_button' style='' href='sp_details.php?sp_id=$sp_id'>View Business</a>";

   echo"</div></td></tr>";

}


}

?>





</tbody></table>


</div>

<!------------------------------------------footer--------------------------------------------------->

<?php

include 'footer.php';


?>



<script type="text/javascript">

$('.numbering').load('engine/item-numbering.php');
  
$('.carousel').flickity({
 
  cellAlign: 'left',
  contain: true,
});

</script>






<script src="assets/js/overlay.js" type="text/javascript"></script>



</body>




</html>
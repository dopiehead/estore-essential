
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
	<title>E-stores | Join us</title>
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

body{font-family: poppins;}


#user{

	cursor: pointer;
}
#think{
margin-left: 210px !important;

}

@media only screen and (max-width:797px){
#think{
margin-left: 30px !important;

}
}

h1 img{

margin-left: 10px;

}

.nav_signup{


font-weight: normal !important;

border-left-color: rgba(192,192,192,1);
margin-left:0px;
background-color: skyblue !important;
padding: 8px 5px !important;
color: white !important;



}

.nav_login{


font-weight: normal !important;
margin-left:80px;

}

@media only screen and (max-width:767px){


.nav_login{


font-weight: normal !important;
margin-left:20px;

}

}


#row_home{

box-shadow: 0px 0px 6px rgba(0,0,0,0.5);

padding: 30px !important;

border-radius: 5px;

text-align: center;

margin-top: 50px !important;


}


#row_home p{

text-align: center !important;

}


#row_home img{

width: 70px;

}


.btn-info{

	font-size: 15px;
	margin-top: 39px;
	border-radius: 20px !important;
	padding: 20px 30px 50px 30px !important;

}


#row_home #login_button{

	text-align: center;
	margin-top: 20px;
	font-size: 13px;
}



.col-md-4 input[type=radio]{

	position: absolute; 
	top: 15px;
	right: 30px;
	font-size:19px;
    

    border:3px solid skyblue;
   padding: 10px;
   border-radius: 50%;
}





#vendor{


box-shadow: 0px 0px 8px rgba(0,0,0,0.5);

padding: 25px;

border-radius: 10px;


}



#buyer{


box-shadow: 0px 0px 8px rgba(0,0,0,0.5);

padding: 25px;

border-radius: 10px;


}





#service_provider{


box-shadow: 0px 0px 8px rgba(0,0,0,0.5);

padding: 25px;

border-radius: 10px;


}

#vendor p, #buyer p, #service_provider p{

	margin-top: 25px;

	font-size: 13px !important;

	font-weight: 400;
}


#vendor:hover,#buyer:hover, #service_provider:hover{

opacity: 0.7;
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


.main_header input{


font-size: 12px;

background-color: rgba(192,192,192,0.3);

border:1px solid transparent;


}


.main_header input::placeholder {

	text-align: center;
}









/*--------------------------------------------------------------
# navigation bar 
--------------------------------------------------------------*/


#search_page{

	margin-left: -400px;
}







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

#open-btn{display:none !important;font-size: 16px; margin-top: -6px;color: black;}




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

display: none;


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
display: none;
}





/*--------------------------------------------------------------
# footer
--------------------------------------------------------------*/

.footer h6{

  font-weight: bold;

  font-size: 15px;

  margin-bottom: 10px;

 
  background-color: rgba(192,192,192,0.1) !important;

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

<br><br>








<!------------------------------------------Section main-------------------------------------------------->

<div class="container">



<div id="row_home" >
	
<div class=" row">
	

<div class="col-md-4">


    <div id="vendor">

	<input type="radio" id="user" value="signup-vendors.php" name="user">

	<img src="assets/icons/hand.png">

	<p>I’m a Vendor, here to sell.</p>


</div>

<br>


</div>


<div class="col-md-4">

	<div id="service_provider">

	
	<input type="radio" id="user" value="service-provider-signup.php" name="user">

	<img src="assets/icons/carbon_service-id.png">

	<p>I‘m a service provider.</p>

    </div>

    <br>

</div>



<div class="col-md-4">

	<div id="buyer">

	<input type="radio" value="signup.php" id="user" name="user">

	<img src="assets/icons/icons8_buy.png">

	<p>I’m here to buy or get service provider</p>

    </div>


    <br>

</div>


<button name="btn-create" id="btn-create" class="form-control btn btn-info ">Create account</button>




</div>

<p id="login_button" style="text-align: center;">Already have an account? <a href="login.php">Login</a></p>




</div>


</div>



<!------------------------------------------footer--------------------------------------------------->

<?php

include 'footer.php';


?>


<script>

$(document).ready(function(){

	
  
   
    $('#btn-create').click(function(){


      var selectedValues = [];

      $("input[name='user']:checked").each(function() {

      selectedValues.push($(this).val());

      window.location.href = selectedValues;

});

      
    });
});

</script>














</body>
</html>
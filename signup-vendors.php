
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>E-stores | vendor sign up </title>
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

body{

	font-family: poppins;

}


/*--------------------------------------------------------------
# style file
--------------------------------------------------------------*/

input[type=file]{

display: none;

}



label{

  border: 1px solid rgba(0,0,0,0.1);



  background-color:rgba(192,192,192,0.4); 

align-content: center;

height: 51px;

width: 100%;

padding: 2px;

padding-left:;

text-align: center;

color:black;



font-size:13px;

cursor: pointer;

}




label:hover{

opacity: 0.5;}




/*--------------------------------------------------------------
# menu navbar
--------------------------------------------------------------*/


.menu #thinking{

text-align: center;
margin-top: -40px;
font-size: 13px;


}

.nav_signup{

	font-size: 13px;

color: white !important;

background-color: skyblue;

padding: 5px;


}


.nav_login{



font-size: 13px;

color: black;



}





.nav_signup{


border:1px solid none;
border-left:1px solid white;
border-left-color: rgba(192,192,192,1);
padding-left:8px;

}

.menu {

position: relative;
padding: 0px 10px;
width: 100%;
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

  font-size: 12px;
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
# main
--------------------------------------------------------------*/
.wrap{
padding: 10px;
	}




/*--------------------------------------------------------------
# main
--------------------------------------------------------------*/

.main

{
	width:70%;
	padding: 10% 10%;
	border:1px solid transparent;
	box-shadow: 0px 0px 5px rgba(0,0,0,0.6);
	margin-top: 50px;



	margin-left: 0;

	margin-right: 0;

	margin: auto;
	

}


.main p{

	color:skyblue;
	font-weight: bold;
	font-size: 12px;
}


.main p span{

float: right;

}

.main input{

border:1px solid transparent;

box-shadow:0px 0px 3px rgba(0,0,0,0.3);

font-size: 13px;

}


.main span{

	font-size: 13px;
}


.main button{

font-size: 13px;


}

.main h6{

	text-align: center;
	font-weight: bold;
}





@media only screen and (max-width:767px){

	.main p{

	color:skyblue;
	font-weight: bold;
	font-size: 12px;
}



	.main small{

	text-align: center;
	font-size: 11px;
}

.main

{
	width:70%;
	padding: 10%;
	border:1px solid transparent;
	box-shadow: 0px 0px 5px rgba(0,0,0,0.6);
	margin-top: 40px;
	

}

.main h6{

	text-align: center;
}





}

</style>
</head>
<body>

	<div class="wrap">

<div class="menu">

<p> 

<a href="index.php" style="text-decoration: none;"><img style="" align="" src="assets/icons/logo_e_stores.png" height="" width=""></a>



<span style="float: right;"><a href="login.php" class="nav_login" style="text-decoration: none;color:;">Login</a>

<a class="nav_signup" style="text-decoration: none; color:;">Sign up</a></span></p>

<div id="thinking"><b style="text-align:">Think of it? Buy it now</b></div>



</div>


<br>

<div class="main">

	<h6>Sign up</h6>

	<div style="text-align: center">

	<small style="">Enter Your Credentials to sign up</small>

</div>
	

<form method="post" id="signup_vendors">

<input type="text" class="form-control" placeholder="Business name" name="business_name"><br>

<input type="text" class="form-control"  placeholder="Business email"  name="business_email"><br>

<input type="password" class="form-control"  placeholder="Password"  name="business_password"><br>

<input type="password" class="form-control"  placeholder="Confirm Password"  name="confirm_password"><br>

<input type="text" class="form-control"  placeholder="Business address"  name="business_address"><br>

<input type="text" class="form-control"  placeholder="Business contact"  name="business_contact"><br>

<input type="text" class="form-control"  placeholder="Company description"  name="company_description"><br>

<input type="hidden" value="0"  name="item_sold">

<input type="hidden" value="0" name="verified">



<small style="font-size: 12px;">Upload Business image</small><br>

<label><i id="file-label" class="fa-solid fa-upload"></i><input type="file" class="form-control" name="imager"  id="imager" onchange="updateFileName(this)"></label><br>

<p>Have an account?  Log In</p>

<button id="btn-signup" class="btn btn-info form-control">Sign up</button>

<div align="center" style="display: none;" id="loading-image"><br><img id="loader" src="loading-image.GIF"></div>


</form>






</div>
</div>




<br>










<?php

include 'footer.php';


?>


 <script type="text/javascript">


  $('#signup_vendors').on('submit',function(e){

        e.preventDefault();

        $("#loading-image").show();

         $('#btn-signup').prop('disabled', true);
        
        var formdata = new FormData();

      $.ajax({

            type: "POST",

            url: "engine/signup-vendor-process.php",

            data:new FormData(this),

            cache:false,

            processData:false,

            contentType:false,

             success: function(response) {

             $("#loading-image").hide();

if (response==1) {

          
              swal({
                       text:"A verification link has been sent to the email provided",
                      icon:"success",

              });

              $("#form-signup")[0].reset();
               

} 

else{
              swal({

                icon:"error",
              	text:response

              });

              $('#btn-signup').prop('disabled', false);
            
              $('input').css('border-color','red');

              
            

            
               

           }

            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });





</script>








<script type="text/javascript">
	
function updateFileName(input) {

	var fileName = input.files[0].name;
	
	document.getElementById('file-label').innerText = fileName;
}

</script>

</body>
</html>



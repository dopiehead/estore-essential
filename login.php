
<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (isset($_GET['step']) && !empty($_GET['step'])) {
$step = $_GET['step'];
$url = $step.".php";

}
?>
<?php

if (isset($_GET['details']) && !empty($_GET['details'])) {
$details = $_GET['details'];
$url_details = $details;

}

?>




<!DOCTYPE html>
<html>
<head>
	<title>E-stores | Login page </title>
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
# menu navbar
--------------------------------------------------------------*/





.menu #thinking{

text-align: center;
margin-top: -40px;
font-size: 13px;


}

.nav_signup{


font-size: 13px;

color: black;

}


.nav_login{


font-size: 13px;

color: white !important;

background-color: skyblue;

padding: 5px;


}


#signin-form{

  margin-top: 18px;
}



#signin-form p{

  margin-top: 10px;
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


.footer{

  margin-top: 80px;
}




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
font-size: 12px;

}


.main select{

border:1px solid transparent;

box-shadow:0px 0px 3px rgba(0,0,0,0.3);
font-size: 12px;

}


.main button{

font-size: 13px;


}

.main h6{

	text-align: center;
	font-weight: bold;
}



#loader{

width:60px;
height:50px;


}






@media only screen and (max-width:767px){

	.main p{

	color:skyblue;
	font-weight: bold;
	font-size: 11px;
}



	.main small{

	text-align: center;
	font-size: 11px;
  margin-bottom: 10px;

}

.main

{
	width:75%;
	padding: 10% 3%;
	border:1px solid transparent;
	box-shadow: 0px 0px 5px rgba(0,0,0,0.6);
	margin-top: 100px;
	

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

<a href="join-us.php" class="nav_signup" style="text-decoration: none; color:;">Sign up</a></span></p>

<div id="thinking"><b style="text-align:">Think of it? Buy it now</b></div>



</div>


<br>

<div class="main">

	<h6>Log In</h6>

	<div style="text-align: center">

	<small style="">Enter Your Credentials to login</small>

</div>
	
<form method="post" id="signin-form">

<select id="user_type" name="user_type" class="form-control">

<option value="buyer">Buyer</option>
<option value="vendor">Vendor</option>
<option value="service_provider">Service Provider</option>
<option value="admin">Admin</option>

</select><br>

<input type="text" class="form-control" placeholder="Enter your email address" name="user_email"><br>

<input type="password" class="form-control" placeholder="Enter your password" name="user_password">

<p><a href="forgot-password.php">Forgot password</a><span><a href="join-us.php">Create new account</a></span></p>

<div align="center" style="display: none;" id="loading-image"><br><img id="loader" src="loading-image.GIF"></div>

<button id="btn-signin" class="btn btn-info form-control">Login</button>

</form>


</div>
</div>

<br>

<?php

include 'footer.php';


?>


<!------------------Redirect url to last visited page-->

<input type="hidden" name="url" id="url" value="<?php echo$url;?>">

<input type="hidden" name="url_details" id="url_details" value="<?php echo$url_details;?>">


<script type="text/javascript">

 var url = $('#url').val();

  var url_details = $('#url_details').val();

  var postData = "text";

  $('#btn-signin').on('click',function(e){

        e.preventDefault();

    $("#loading-div").show();

     $('#btn-signin').prop('disabled', true);

     var user_type = $("#user_type").val();

       $.ajax({

            type: "POST",

            url: "engine/login-process.php",

            data:  $("#signin-form").serialize(),

            cache:false,

            contentType: "application/x-www-form-urlencoded",

             success: function(response) {

             $("#loading-div").hide();

             if (response==1)  {

              
           if (url!='') {

              window.location = url;

              

                 $("#signin-form")[0].reset();


             }

     else if (url_details!=''){

        window.location = url_details;

        $("#signin-form")[0].reset();

     }




             
              else{
                
                window.location="dashboard.php";

                   $("#signin-form")[0].reset();

              }

             }
                      

          else{
            
            swal({

            	icon:"error",
            	text:response

            });

          $('#btn-signin').prop('disabled', false);
         
             $("input").css('border-color','red');

           

           }

            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });

</script>














</body>
</html>
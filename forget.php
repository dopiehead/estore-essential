
<?php 
session_start();

if (isset($_SESSION['sp_id'])) {
$email=$_SESSION['sp_email'];
}

if (isset($_SESSION['id'])) {
$email=$_SESSION['sp_email'];
}



if (isset($_SESSION['business_id'])) {
$email=$_SESSION['business_email'];
}



?>

<title>E-stores | checkout page </title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/flickity.min.css">
   <link rel="stylesheet" href="assets/css/cart.css">
     <link rel="stylesheet" href="assets/css/overlay.css">
       <link rel="stylesheet" href="assets/css/btn_scroll.css">
  <script src="assets/js/sweetalert.min.js"></script> 
  <script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/flickity.pkgd.min.js"></script>

<style type="text/css">

body{


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



p a{


  font-family: verdana;
  margin-left: auto;
  margin-right: auto;
  display: block;
}

h2{
 
  transition: opacity 0.5s ease-in;
  text-align: center;
  text-transform:uppercase;
  font-family:century gothic;
  font-weight: bold;
  color:rgba(255,175,30,1);
  margin:15px 0px 13px 0px;
  font-size:19px;
  text-shadow:2px 4px 16px rgba(0,0,0,0.39),0px -2px 5px rgba(255,255,255,0.2);
}


#navbar a{


  margin: 0px 15px;
  font-size: 18px;
  color: white;
}


    

    h1{

        height:68px;

   -webkit-box-shadow:0 0 1px red;

box-shadow:0 0 1px red; 

  background-color:rgba(0,0,20,0.6);

  box-shadow:none;

        

    }


h1 img{

float:left; 



height: 60px;

width:135px;

margin-left:-5px;

margin-top:3px;

opacity: 1;

}




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
width: 420px !important;


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


#search_page{

  margin-left: -350px;
}



@media only screen and (max-width:498px){


#search_page{

  margin-left: -350px;
  display: none !important;
}

}

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









h5{

font-weight: bold;
color: rgba(0,0,0,0.5);


}


#signup-form{

padding:20px 40px;
border: 1px solid transparent transparent;
box-shadow:0px 8px 16px rgba(0,0,0,0.3);
font-family: century gothic;
background-color: white;
background-color: white;
}



#signup-parent{

padding:20px 300px;


}

input[type=text],input[type=password],input[type=email]{

padding:23px;
border:1px solid rgba(192,192,192,0.4);
font-family: arial,fontawesome;
}


#btn-signup ,#btn-signin{

height: 50px;
}


#btn-signup:focus ,#btn-signin:focus{

background-color:green;
color: white;
}






#btn-signin{
margin-top:25px;
margin-bottom:15px;
}


input{

margin: 25px 0px;
padding:10px;


}

#user{
padding-top: 15px;
color: rgba(192,192,192,0.9);
font-size: 16px;
}



@media only screen and (orientation:landscape){
 



}









@media only screen and (max-width:767px){
 


}   

@media only screen and (max-width:1266px){
 
#signup-parent{

padding:30px 45px;


}










} 







</style>
<body style="font-family: century gothic;">

<?php include 'nav.php'; ?>

<?php include 'overlay.php'; ?>









<br><br><br>



<?php 
require 'engine/configure.php';

if (isset($_GET['vkey'])) {
$vkey = mysqli_escape_string($conn,$_GET['vkey']) ;
$sql = "select * from forgotten where vkey='".$vkey."' ";
$dbc = mysqli_query($conn,$sql);



if ($dbc) {

if (isset($_SESSION['sp_id'])) {
$email=$_SESSION['sp_email'];
$bbc = "select * from service_providers where sp_email='$email'";
$abc = mysqli_query($conn,$bbc);
while ($row = mysqli_fetch_array($abc)) {
$x = $row['sp_id'];
$y = $row['sp_email'];
$z = $row['sp_password'];

}

}



if (isset($_SESSION['id'])) {
$email=$_SESSION['email'];
$bbc = "select * from user_profile where email='".$email."'";
$abc = mysqli_query($conn,$bbc);
while ($row = mysqli_fetch_array($abc)) {
$x = $row['id'];
$y = $row['email'];
$z = $row['password'];
echo '';
}
}



if (isset($_SESSION['business_id'])) {

$bbc = "select * from vendor_profile where business_email='".$email."'";
$abc = mysqli_query($conn,$bbc);
while ($row = mysqli_fetch_array($abc)) {
$x = $row['id'];
$y = $row['business_email'];
$z = $row['business_password'];

}
}

}

}

 ?>


<div class="container">

<form method="POST" action="" id="edit-form" enctype="multipart/form-data">

    Email:&nbsp;&nbsp;&nbsp;&nbsp; <b style="color: red;"><?php echo$y?></b>

    <br><br><br>
   
Password: <input type="text" name="password" class="form-control" value=""> 

 Confirm Password: <input type="text" name="cpassword" class="form-control" value="">

<br><input type="submit" name="submit" id="submit-edit" value="Update" class="btn btn-success form-control" style=""></i>
    
  </form>

</div>


<?php 


require 'engine/configure.php';

if (isset($_POST['submit'])) {
$z = mysqli_real_escape_string($conn,$_POST['password']);
$cp= mysqli_real_escape_string($conn,$_POST['cpassword']);

if ($cp!=$z) {
echo "Password does not match";
}
if (!empty($z.$cp)) {
$secret_password = sha1($z);

if (isset($_SESSION['business_id'])) {

$sql = "update vendor_profile set business_password ='".$secret_password."' where business_email='".$email."'";
}

if (isset($_SESSION['sp_id'])) {

$sql = "update service_providers set sp_password ='".$secret_password."' where sp_email='".$email."'";
}

if (isset($_SESSION['id'])) {

$sql = "update user_profile set password ='$secret_password' where email='".$email."'";
}
	


$bgt = mysqli_query($conn,$sql);

if ($bgt) { echo "<div align='center'>Please continue to <a href='login.php'>login page</a></div>";}

else{ echo mysqli_error($bgt);}

}
}
?><br><br><br>


</div>


<?php include 'footer.php';   ?>




<a class="btn-down" onclick="topFunction()">&#8593;</a>

<script src="assets/js/scroll.js" type="text/javascript"></script>

<script src="assets/js/overlay.js" type="text/javascript"></script>

</body>

</html>

<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  
<title>E-stores | admin</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/flickity.min.css">
      <link rel="stylesheet" href="assets/css/overlay.css">
        <link rel="stylesheet" href="assets/css/btn_scroll.css">
   <link rel="stylesheet" href="assets/css/cart.css">
  <script src="assets/js/sweetalert.min.js"></script> 
  <script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/flickity.pkgd.min.js"></script>
<style type="text/css">
  


body{font-family: poppins;}

h1 img{

  margin-left: 10px;
}



table tbody tr td{

font-size: 0.7rem;

text-transform: capitalize;

padding: 8px;

text-align: center;



}


table tbody tr td img{

width: 100px;

height: 80px;



}



table tbody tr td a{

font-size: 0.6rem !important;




}



table thead tr th{

font-size: 0.7rem;

opacity: 0.6;

text-transform: capitalize;

text-align: center;

}






table{

width: 100%;
border-collapse: collapse;
margin-top: 30px;

}


#th-action{

  width:19%;
}


#th-id{

  width:5%;
}






#think{
margin-left: 210px !important;

}

@media only screen and (max-width:797px){
#think{
margin-left: 30px !important;

}
}




#user_type_home select{

padding: 5px 10px;

border:1px solid transparent;

box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.3);

font-size: 0.8rem;

}



#user_type_home select:focus{

outline: 2px solid skyblue;

}




input[type=search]{



border:1px solid transparent;

box-shadow: 0px 0px 4px rgba(0,0,0,0.3);

font-size: 0.8rem;

}

#btn-search{

  font-size: 10px;
  border-radius:0px 13px 13px 0px;
  margin-left: -80px;
  padding: 7px 8px;
  position: relative;
z-index: 9;
color: white !important;
}


#user,#love,#carting{

  display: none !important;

  opacity: 0;
}




ul{

  list-style-type: none;
}

ul li{

  display: block;

  margin: 20px 0px;

  font-size: 0.8rem;

  font-weight: bold;
}

.active{

opacity:0;

}

.active-button{

  background-color:white;

  padding: 10px;

  border:1px solid transparent;

  box-shadow: 0px 0px 4px rgba(0,0,0,0.3);

  
}


.btn-success{

 padding: 10px;

}


.link-active,#link-acive{

  background-color: skyblue;

  padding: 10px;

  border-radius: 15px;

  
}




@media only screen and (max-width:498px){

.category_select{

  font-size: 13px;
  margin-left:8px;
  height: 33px;
    width: 125px;
  font-weight: bold;
  text-transform: capitalize;
  border:1px solid transparent;
  box-shadow: 0px 0px 3px rgba(0,70,90,0.5);
}


}






.category_select{

  font-size: 13px;
  margin-left: 20px;
  height: 33px;
  font-weight: bold;
  text-transform: capitalize;
  border:1px solid transparent;

  box-shadow: 0px 0px 3px rgba(0,70,90,0.5);
}






.h6{

  font-size: 13px;
  font-weight: bold;
}


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




.nav_signup{

opacity: 0;
border:1px solid none;
border-left:1px solid white;
border-left-color: rgba(192,192,192,1);
margin-left:0px;
font-weight: normal !important;



}


#main{

background: linear-gradient(to top right,rgba(0,70,90,0.9),rgba(0,44,70,1)),url(assets/img/coca_cola.png);
background-size: cover;
background-position: center;

width: 100%;

height: 80px;

margin-top: 50px;

}


#main h6{

color: white;

text-align: center;

font-weight: bold;

position: relative;

top: 35px;

text-transform: uppercase;

font-size: 16px;


}

@media only screen and (max-width:767px){

#main h6{

top: 20px;


}


}


/*--------------------------------------------------------------
# product list
--------------------------------------------------------------*/



#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding:0px;

width:190px;

display: inline-block;
margin:1em 1em;

}

@media only screen and (max-width:498px){


#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border:1px solid rgba(0,70,90,0.2);
padding: 0px;

width:185px;

display: inline-block;
margin:1em 1.5em;

}



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

opacity: 0;

margin-left:80px;
font-weight: normal !important;

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








#coca_cola img{

  
width:100%;


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
  justify-content: space-between;*/ }


/*--------------------------------------------------------------
# anchor category
--------------------------------------------------------------*/



@media only screen and (max-width:480px){







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


opacity:;


}


/*--------------------------------------------------------------
# navigation search bar button
--------------------------------------------------------------*/



/*--------------------------------------------------------------
# section product  mobile
--------------------------------------------------------------*/




/*--------------------------------------------------------------
# product list
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


  padding: 10px 30px;

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

  display: none;






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

<br>





<br>




<br>

<div style="padding: 20px;">




<?php  

require 'engine/configure.php'; 

$getNotification =mysqli_query($conn,"select * from newsfeed");

if ($getNotification->num_rows>0) {
  
while ($row = mysqli_fetch_array($getNotification)) {
  

$id = $row['id'];

$name =  mysqli_escape_string($conn,$row['name']);

$subject = mysqli_escape_string($conn,$row['subject']);

$message =  mysqli_escape_string($conn,$row['compose']);

$email =  mysqli_escape_string($conn,$row['email']);

$date =   mysqli_escape_string($conn,$row['date']);

?>

<div id="notification" class="container">


  <p><?php echo$row['name']; ?></p>
  

<p><?php echo$row['compose']; ?></p>

<span id="time"><?php echo$row['date']; ?></span><br>


</div>


<?php } 


}


else{

echo"<br><br><br><br><br><br>There are no messages in your inbox<br><br><br><br>";

}




?>















</div>




<!------------------------------------------footer--------------------------------------------------->


<?php

include 'footer.php';


?>




</body>
</html>
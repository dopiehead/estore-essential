
<?php session_start();

require 'engine/get-dollar.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	
<title>E-stores | Gift picks</title>
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
 <script src="assets/js/flickity-fade.js"></script> 
<style type="text/css">
	


body{font-family: poppins;}

h1 img{

	margin-left: 10px;
}



.flickity-page-dots{

 
  bottom: -35px;
}


 .flickity-page-dots .dot{

  width:100px !important;
  height: 6px;
  margin: 0 !important;
  border-radius: 0 !important;
  
}

@media only screen and (max-width:767px){


 .flickity-page-dots .dot{

  width:40px !important;
  height: 4px;
  margin: 0 !important;
  border-radius: 0 !important;
  
}


}



.flickity-page-dots .dot.is-selected{

  background-color:rgba(255,165,50,1);
}





#think{
margin-left: 210px !important;

}

@media only screen and (max-width:797px){
#think{
margin-left: 30px !important;

}
}


@media only screen and (max-width:767px){

.nav_login{

margin-left:40px !important;
font-weight: normal !important;

}

}




.product_list h6{

font-weight: bold;
margin: 23px 0px;

}


#share{

	height:14px;
	width: 15px;
}



.fa-cart-shopping{

font-size: 14px;
padding:3px;

}




.fa-check{

font-size: 12px;
color: white;
border:1px solid transparent;
border-radius: 50%;
background-color: darkgreen;
padding:3px;

}







.section_search{

text-align: center;

}


@media only screen and (max-width:498px){


.section_search{
text-align: left !important;
}


.section_search span{

font-size: 12px;
position: relative;
left: -3px;

}


}



@media only screen and (min-width:498px) and (max-width:990px){


.section_search{
text-align: left !important;
}


.section_search span{

font-size: 12px;
position: relative;
left: -1px;


}

.category_select{

	font-size: 13px;
	margin-left:4px;
	height: 33px;
    width: 130px;
	
}

.section_search input[type=search] {

	font-size: 14px;
    width:260px !important;
    margin-left: 8px;

}
}





.section_search input[type=search] {

	
	font-size: 14px;

	width:400px;

	margin-left: 10px;

	height: 33px;

	box-shadow: 0px 0px 3px rgba(0,70,90,0.5);

	border:1px solid transparent;



}





@media only screen and (min-width:440px) and (max-width:797px){


.section_search input[type=search] {

	font-size: 13px;
    width:205px;
    margin-left: 5px;

}


}



.section_search  select:focus{

border:2px solid skyblue;
outline: 2px solid skyblue;

}






.section_search input[type=search]:focus {

	
	outline: 2px solid skyblue;



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
left: 79%;


font-size:13px;

} 




.nav_signup{


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



#data_price,#data_name{

  padding-left: 20px;
  font-size: 13px;
  text-transform: capitalize;
}



#assets_container .package  img{


width: 210px !important;
height: 180px !important;
float: right;

}


@media only screen and (max-width:497px){




#assets_container .package  img{


width: 100%;

height: 80px;


}


#assets_container .package{


display: inline-block;

margin-right: 20px !important;

border:1px solid rgba(0,70,90,0.1);

padding: 1px;

width:210px !important;


}






}


@media only screen and (min-width:498px) and (max-width:767px){

#assets_container .package  img{


width: 17em;

height: 80px;

}


#assets_container .package{


display: inline-block;

margin-right: 20px;

border:1px solid rgba(0,70,90,0.1);

padding: 1px;


}

}








#assets_container .package{


display: inline-block;

margin-right: 20px;

border:1px solid rgba(0,70,90,0.1);

padding: 1px;

width:100%;

}







#assets_container {

font-size: 10px;

width: 100%;

margin-top: 30px;

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
	justify-content: space-between;*/	}


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
# section product  mobile
--------------------------------------------------------------*/




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
height: 120px;
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

<div class="nav-container container">

<a class="category" style="color: skyblue;" href="">Gift picks</a>


</div>


<br><br>


<div class="container">


<?php

require 'engine/configure.php';
$featured = mysqli_query($conn,"SELECT * FROM item_detail where sold = 0 and featured = 1 order by id desc");
if ($featured->num_rows>0) { ?>

<h6><b style="color: white; background-color: rgba(0,70,90,0.8);padding: 5px;">Featured</b></h6><br>

<div class="assets_container featured container">
<?php
while ($getfeaturedProducts = mysqli_fetch_array($featured)) { ?>
<div class="package" style="border:1px solid rgba(0,0,0,0.1);margin-right:25px;">
<span style="padding:5px;" id="data_name"><?php echo$getfeaturedProducts['product_name']?></span><br>
<span style="opacity: 0.5" id="data_price">From<br></span>
<span style="opacity: 0.5" id="data_price"> <?php echo$getfeaturedProducts['product_price']?></span>
<span style="opacity: 0.5" id="data_price"> <?php echo" $ ".round($getfeaturedProducts['product_price']/$dollar_rate)?></span><br>

<a href="product-details.php?id=<?php echo$id ?>"><img style="height: 150px; width:200px;" src='<?php echo$getfeaturedProducts['product_image']?>' ></a><br>
</div>
	


<?php } echo'</div>'; } else{   ?>














<div class="row">

<div id="coca_cola" class="col-md-6">

<img src="assets/img/coca_cola.png">
</div>


<div id="coca_cola" class="col-md-6">

	<img src="assets/img/coca_cola.p
ng">


</div>



</div>
<?php       }     ?>

<div id="main">
	
<h6>We  help you send out gifts to your family and friends</h6>


</div>


<br>

<div class="section_search">
<span>Find a gift</span><input type="search" id="q" name="q" class="q" placeholder="Filter gallery">

<?php 

require 'engine/configure.php';

$categoryList = mysqli_query($conn, "select * from categories");

echo"<select name='category[]' class='category_select' id='category'><option value='' selected>All</option>";


while ($datafound = mysqli_fetch_array($categoryList)) {
	
	$categories = $datafound['e_auto_categories'];
?>



<?php

echo"<option value=".$categories.">".$categories."</option>";


}


?>

</select>

</div>




</div>


<div class="product_list container">
	
<h6 >Recommended gifts</h6>

<div class="item_images">

<div class="blogspot"></div>

</div>

<br><br>

</div>




<!------------------------------------------footer--------------------------------------------------->

<?php

include 'footer.php';


?>

<script type="text/javascript">
$('.numbering').load('engine/item-numbering.php');
$("#loading-image").hide();
$(".blogspot").load('getdata.php?page=1'); 
$("#q").on('keyup',function() {
var x = $('#q').val();
if (x=='') {$("#reset").hide();}
else{
$("#reset").show();
}
getData(x);
});



$('#category').on('change',function(e) {
$("#blogspot").hide();
var x = $('#q').val();
var category = $('#category').val();
if (category !='all') {
getData(x,category);
}
});



function getData(x,category) {
$.ajax({
url:"getdata.php",
type:"POST",
data:{'q':x,'category':category},
success:function(data) {
$("#loading-image").hide();
$(".blogspot").html(data).show();

}


});


};
</script>



<script>
  
$('.featured').flickity({
 cellAlign: 'left',
contain: true,
autoPlay:1500,
wrapAround:true,
fade:true
});

</script>



<!------------------------------------------btn-scroll--------------------------------------------------->

<a class="btn-down" onclick="topFunction()">&#8593;</a>

<script src="assets/js/scroll.js" type="text/javascript"></script>

<script src="assets/js/overlay.js" type="text/javascript"></script>
</body>
</html>
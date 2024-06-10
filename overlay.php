 
<div id="myform" class="overlay" id="overlay">

 <button class="btn close-btn" onclick="closeform()"><img src="assets/icons/filter_icon.png"></button> 


  <div class="overlay-content">

 
<a href="discount-page.php" class="" >Discount deals</a>

<a href="service-provider.php" class="" >Service Providers<i class="fa fa-caret"></i> </a>

 <a href="gift-picks.php" class="" > &nbsp;Gift Picks&nbsp;&nbsp;</a>

  <a href="deals.php" class="" > &nbsp;Deals&nbsp;&nbsp;</a>
  
<a   href=" <?php if(!empty($_SESSION['id']) &&!empty($_SESSION['business_id']) &&!empty( $_SESSION["sp_id"])) {echo"postadvert.php";} else{echo"postadvert.php?step=postadvert";} ?>" class="" >&nbsp;Sell a product&nbsp;&nbsp;</a>

<a href="customer-support.php" class="" >&nbsp;Customer support&nbsp;&nbsp;</a>

</div>



 </div>
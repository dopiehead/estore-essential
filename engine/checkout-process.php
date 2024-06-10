
<?php

session_start();

require 'configure.php';

$_SESSION['itemId'];
$_SESSION['userid'];
$_SESSION['noofItem'];
$_SESSION['location'];
$_SESSION['buyer'];
?>

<?php

require 'configure.php';

error_reporting(E_ALL ^ E_NOTICE);

$full_name=mysqli_escape_string($conn,$_POST['full_name']);
  
$address=mysqli_escape_string($conn,$_POST['address']);

$shipping_address=mysqli_real_escape_string($conn,$_POST['shipping_address']);

$phone_number=mysqli_real_escape_string($conn,$_POST['phone_number']);

$pin_code=mysqli_real_escape_string($conn,$_POST['pin_code']);

$state=mysqli_real_escape_string($conn,$_POST['state']);

$country=mysqli_real_escape_string($conn,$_POST['country']);

$location=mysqli_real_escape_string($conn,$_POST['location']);

$billing_address=mysqli_real_escape_string($conn,$_POST['billing_address']);

$term_agree=mysqli_real_escape_string($conn,$_POST['term_agree']);


$date=date("D, F d, Y g:iA");

if(strlen($product_name)>22){echo "item name limit exceeded, must be at most 23 letters";

}

elseif ($term_agree=='Kindly accept terms & conditions') {
	# code...
}

elseif ($full_name=='') {

echo "Full name field is required";
}

else{


   $a="insert into checkout (product_id,product_price,noofitem,buyer,seller,full_name,address,phone_number,pin_code,country,state,billing_address,terms,date) values ('".htmlspecialchars($_SESSION['itemId'])."','".htmlspecialchars($_SESSION['product_price'])."','".htmlspecialchars($_SESSION['noofItem'])."','".htmlspecialchars($_SESSION['buyer'])."','".htmlspecialchars($_SESSION['userid'])."','".htmlspecialchars($full_name)."','".htmlspecialchars($address)."','".htmlspecialchars($phone_number)."','".htmlspecialchars($pin_code)."','".htmlspecialchars($country)."','".htmlspecialchars($location)."','".htmlspecialchars($billing_address)."','I accept terms','".htmlspecialchars($date)."')";




   $r = mysqli_query($conn,$a);

if (!$r) {echo"Item was not posted";


}

else{


 $_SESSION['product_name']=$product_name;
 $_SESSION['product_price']=$product_price;
 $_SESSION['user_id']=$user_id;
 $_SESSION['phone_number']=$phone_number;
 $_SESSION['location']=$location;
 $_SESSION['date']=$date;
 $_SESSION['country']=$country;


  echo "1";
}

}
 ?>

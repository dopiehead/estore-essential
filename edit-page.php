<?php session_start();

error_reporting(E_ALL ^ E_NOTICE);

require 'engine/configure.php';
$sid = mysqli_real_escape_string($conn,$_POST['sid']);
$first_name = mysqli_real_escape_string($conn,$_POST['first_name']);
$user_type = mysqli_real_escape_string($conn,$_POST['user_type']);
$business_name = mysqli_real_escape_string($conn,$_POST['business_name']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$cpassword =  mysqli_real_escape_string($conn,$_POST['cpassword']);
$secret_password = sha1(md5($password));
$country_code=mysqli_real_escape_string($conn,$_POST['country_code']);
$contact=mysqli_real_escape_string($conn,$_POST['contact']);
$whatsapp=mysqli_real_escape_string($conn,$_POST['whatsapp']);
$location=mysqli_real_escape_string($conn,$_POST['location']);
$lga=mysqli_real_escape_string($conn,$_POST['lga']);

$about=mysqli_real_escape_string($conn,$_POST['about']);  
$services=mysqli_real_escape_string($conn,$_POST['services']);
$business_category=mysqli_real_escape_string($conn,$_POST['business_category']);
$days=mysqli_real_escape_string($conn,$_POST['days']);
$opening_time=mysqli_real_escape_string($conn,$_POST['opening_time']);
$closing_time=mysqli_real_escape_string($conn,$_POST['closing_time']);
$facebook=mysqli_real_escape_string($conn,$_POST['facebook']);
$twitter=mysqli_real_escape_string($conn,$_POST['twitter']);
$linkedin=mysqli_real_escape_string($conn,$_POST['linkedin']);
$intagram=mysqli_real_escape_string($conn,$_POST['intagram']);
if(strlen($first_name)>22){echo "character number limit exceeded"; }
elseif (strlen($first_name)>22) {
echo "character number limit exceeded"; }
elseif ($password!=$cpassword) {echo "Password mismatch";}
elseif($business_name==''){echo "Name field cannot be empty";}
elseif($contact==''){echo "Contact field cannot be empty";}
elseif($location==''){echo "Location field cannot be empty";}

else{

$sql="insert into user_information('sid','first_name','user_type','business_name','business_category',company_description,'password',	'country','phone_number','whatsapp','state','lga','facebook','twitter','linkedin','instagram','day','opening_time','closing_time','date') values ('".htmlspecialchars($sid)."','".htmlspecialchars($first_name)."','".htmlspecialchars($user_type)."','".htmlspecialchars($business_name)."','".htmlspecialchars($business_category)."','".htmlspecialchars($about)."','".htmlspecialchars($password)."','".htmlspecialchars($country)."','".htmlspecialchars($phone_number)."','".htmlspecialchars($whatsapp)."','".htmlspecialchars($state)."','".htmlspecialchars($lga)."','".htmlspecialchars($facebook)."','".htmlspecialchars($twitter)."','".htmlspecialchars($linkedin)."','".htmlspecialchars($instagram)."','".htmlspecialchars($day)."','".htmlspecialchars($opening_time)."','".htmlspecialchars($closing_time)."','".htmlspecialchars($date)."')";

   $insert = mysqli_query($conn,$sql);


if (isset($_SESSION['id'])) {

$update = mysqli_query($conn,"UPDATE user_profile SET user_name='".htmlspecialchars($first_name)."',user_phone='".htmlspecialchars($contact)."', user_password ='".htmlspecialchars($secret_password)."' WHERE id ='".htmlspecialchars($sid)."'");

}

if (isset($_SESSION['sp_id'])) {

$update = mysqli_query($conn,"UPDATE service_providers SET sp_name='".htmlspecialchars($first_name)."',sp_phonenumber1='".htmlspecialchars($contact)."',sp_password ='".htmlspecialchars($secret_password)."',sp_location='".htmlspecialchars($location)."' WHERE sp_id ='".htmlspecialchars($sid)."'");
}


if (isset($_SESSION['business_id'])) {
	
$update = mysqli_query($conn,"UPDATE vendor_profile SET business_name='".htmlspecialchars($business_name)."',business_contact='".htmlspecialchars($contact)."',business_category='".htmlspecialchars($business_category)."',business_password ='".htmlspecialchars($secret_password)."',company_description='".htmlspecialchars($about)."' WHERE id ='".htmlspecialchars($sid)."'");
}


if ($insert) { echo "1";
  }
else{ echo mysqli_error($insert);}



//;


}
?>




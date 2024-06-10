<?php
error_reporting(E_ALL ^ E_NOTICE);
require 'configure.php';
$business_name = mysqli_escape_string($conn,$_POST['business_name']);
$business_email = mysqli_escape_string($conn,$_POST['business_email']);
$business_contact = mysqli_escape_string($conn,$_POST['business_contact']);
$business_password = mysqli_escape_string($conn,$_POST['business_password']);
$business_address = mysqli_escape_string($conn,$_POST['business_address']);
$company_description  = mysqli_escape_string($conn,$_POST['company_description']);
$cpassword = mysqli_escape_string($conn,$_POST['confirm_password']);
$item_sold = mysqli_escape_string($conn,$_POST['item_sold']);
$secret_password = sha1($business_password );
$verified  = mysqli_escape_string($conn,$_POST['verified']);
$date = date("D, F d, Y g:iA", strtotime('+1 hours'));
$vkey=md5(time().$business_email);
$checklist = mysqli_query($conn,"select * from where business_name='".htmlspecialchars($business_name)."' and business_email='".htmlspecialchars($business_email)."' and business_address='".htmlspecialchars($business_address)."' and company_description='".htmlspecialchars($company_description)."'");

if ($checklist->num_rows==1) {
echo"You are already a registered member";
}

elseif (empty($business_name.$business_email.$business_password.$cpassword)) { echo"All fields are required";
  
}

elseif ($business_name=='') { echo"Full name field is required";  
}
elseif ($business_email=='') {echo"Email field is required";
}
elseif(!filter_var($business_email,FILTER_VALIDATE_EMAIL)){echo"Email format not supported";}
elseif (empty($cpassword)) { echo"Confirm password field is required";
 }
elseif (empty($business_password)) { echo"Password field is required";  
}
elseif ($business_password=!$cpassword) { echo"Password mismatch!!";  
}

else {
$imageFolder="../uploads/vendors/";
$basename=basename($_FILES["imager"]["name"]);
$allowed_extensions = array("jpg",
    "jpeg",
    "png",
      "JPG",
    "JPEG",
    "PNG");


$maxsize=5242880;//5mb
$imagePath=$imageFolder.$basename;
$file_extension=pathinfo($_FILES["imager"]["name"],PATHINFO_EXTENSION);
$imageExtension=pathinfo($imagePath,PATHINFO_EXTENSION);
$ImageSize=$_FILES['imager']['size'];
$image_temp_name=$_FILES["imager"]["tmp_name"];
if(!in_array($file_extension,$allowed_extensions)){ echo "Please upload valid Image in png and Jpeg only";
    
}
elseif (($_FILES["imager"]["size"] > 2000000)) {
echo"Image file size limit is exceeded"; 
}
else {
$upload=move_uploaded_file($image_temp_name,$imagePath); 
$check="select *from vendor_profile where business_email='$business_email'";
$we=mysqli_query($conn,$check);
if ($we->num_rows==1) { echo"This account already exist";
}
elseif ($we->num_rows==0) {
$tyr="INSERT INTO vendor_profile VALUES ('','".htmlspecialchars($business_name)."','".$business_email)."','".$secret_password)."','".$business_address)."','".htmlspecialchars($business_contact)."','".htmlspecialchars($company_description)."','".htmlspecialchars($imagePath)."','".htmlspecialchars($item_sold)."','".htmlspecialchars($vkey)."','".htmlspecialchars($verified)."','".htmlspecialchars($date)."')";


$cls= mysqli_query($conn,$tyr);

if ($cls) {

  echo "1";
}

else{

  echo mysqli_error($cls);
}



}


}


}


?>


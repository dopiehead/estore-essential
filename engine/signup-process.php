<?php


 error_reporting(E_ALL ^ E_NOTICE);


require 'configure.php';
$user_name = mysqli_escape_string($conn,$_POST['user_name']);
$user_email = mysqli_escape_string($conn,$_POST['user_email']);
$user_password  = mysqli_escape_string($conn,$_POST['user_password']);
$cpassword = mysqli_escape_string($conn,$_POST['confirm_password']);
$secret_password = sha1($user_password);
$user_image = mysqli_escape_string($conn,$_POST['user_image']);
$user_phone = mysqli_escape_string($conn,$_POST['user_phone']);
$user_location = mysqli_escape_string($conn,$_POST['user_location']);
$verified = mysqli_escape_string($conn,$_POST['verified']);
$date = date("D, F d, Y g:iA", strtotime('+1 hours'));
$vkey=md5(time().$user_email);
if (empty($user_name.$user_email.$user_password.$cpassword)) { echo"All fields are required";
  
}
elseif ($user_name=='') { echo"Full name field is required";
  
}
elseif ($user_email=='') {echo"Email field is required";

}
elseif(!filter_var($user_email,FILTER_VALIDATE_EMAIL)){echo"Email format not supported";}
elseif (empty($cpassword)) { echo"Confirm password field is required";
  }

elseif (empty($user_password)) { echo"Password field is required";
  
}

elseif ($user_password=!$cpassword) { echo"Password mismatch!!";
  
}


else {

$imageFolder="../uploads/buyer/";
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
$check="select *from user_profile where user_email='$user_email'";
$we=mysqli_query($conn,$check);
if ($we->num_rows==1) { echo"This account already exist";
}
$tyr="INSERT INTO user_profile VALUES ('','".htmlspecialchars($user_name)."','".htmlspecialchars($user_email)."','".htmlspecialchars($user_image)."','".htmlspecialchars($user_phone)."','".htmlspecialchars($secret_password)."','".htmlspecialchars($user_location)."','".htmlspecialchars($vkey)."','".htmlspecialchars($verified)."','$date')";
$cls= mysqli_query($conn,$tyr);
if ($cls) {

  echo"1";
}

else{

  echo mysqli_error($cls);
}



}


}


?>


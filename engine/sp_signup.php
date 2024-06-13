<?php

require 'configure.php';

$sp_name = mysqli_escape_string($conn,$_POST['sp_name']);
$sp_speciality = mysqli_escape_string($conn,$_POST['speciality']);
$sp_category = mysqli_escape_string($conn,$_POST['category']);
$sp_location = mysqli_escape_string($conn,$_POST['sp_location']);
$sp_email = mysqli_escape_string($conn,$_POST['sp_email']);
$sp_password  = mysqli_escape_string($conn,$_POST['sp_password']);
$cpassword = mysqli_escape_string($conn,$_POST['confirm_password']);
$sp_phonenumber = mysqli_escape_string($conn,$_POST['sp_phonenumber']);
$sp_phonenumber2 = mysqli_escape_string($conn,$_POST['sp_phonenumber1']);
$sp_experience = mysqli_escape_string($conn,$_POST['sp_experience']);
$sp_bio = mysqli_escape_string($conn,$_POST['sp_bio']);
$sp_ratings = mysqli_escape_string($conn,$_POST['sp_ratings']);
$secret_password = sha1($sp_password);
$verified  = mysqli_escape_string($conn,$_POST['verified']);
$e_verify  = mysqli_escape_string($conn,$_POST['e_verify']);
$date = date("D, F d, Y g:iA", strtotime('+1 hours'));
$vkey=md5(time().$sp_email);







if (empty($sp_name.$sp_email.$sp_password.$cpassword)) { echo"All fields are required";
  
}

elseif ($sp_name=='') { echo"Full name field is required";  
}
elseif ($sp_email=='') {echo"Email field is required";

}

elseif(!filter_var($sp_email,FILTER_VALIDATE_EMAIL)){echo"Email format not supported";}
elseif (empty($cpassword)) { echo"Confirm password field is required";
  
}

elseif (empty($sp_password)) { 
	echo"Password field is required";
  
}

elseif ($sp_password!=$cpassword) {
 echo"Password mismatch!!";
  
}
else {
$imageFolder="../uploads/service-provider/";
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
if(!in_array($file_extension,$allowed_extensions)){ 
	echo "Please upload valid Image in png and Jpeg only";
    
}
elseif (($_FILES["imager"]["size"] > 2000000)) {
    
   echo"Image file size limit is exceeded"; 

}

else {

$upload=move_uploaded_file($image_temp_name,$imagePath); 
$check="select * from service_providers where sp_email='$sp_email'";
$we=mysqli_query($conn,$check);
if ($we->num_rows>0) { echo"This account already exist";
}

elseif ($we->num_rows==0) {


$tyr="INSERT INTO service_providers(sp_name,sp_img,sp_category,sp_speciality,sp_location,sp_email,sp_password,sp_phonenumber1,sp_phonenumber2,pricing,sp_experience,sp_bio,ratings,sp_verified,vkey,e_verify,date) VALUES ('".htmlspecialchars($sp_name)."','".htmlspecialchars($imagePath)."','".htmlspecialchars($sp_category)."','".htmlspecialchars($sp_speciality)."','".htmlspecialchars($sp_location)."','".htmlspecialchars($sp_email)." ','".htmlspecialchars($secret_password)."','".htmlspecialchars($sp_phonenumber)."','".htmlspecialchars($sp_phonenumber2)."','0','".htmlspecialchars($sp_experience)."','".htmlspecialchars($sp_bio)."','".htmlspecialchars($sp_ratings)."','".htmlspecialchars($verified)."','".htmlspecialchars($vkey)."','".htmlspecialchars($e_verify)."','".$date."')";



$cls= mysqli_query($conn,$tyr);

if ($cls) {

	require 'PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php';

$mail= new PHPMailer;

$mail->SMTPDebug = 0;  
                    // Enable verbose debug output
    $mail->isSMTP();       
                                         // Send using SMTP
    $mail->Host='https://server39.web-hosting.com';

    $mail->Host='pot-gob-us.com';
    
    $servername="localhost";
  
$mail->Port=465;

$mail->SMTPAuth=true;

$mail->SMTPSecure='ssl';

$mail->Username='potgrcqi';

$mail->Password='3pps4BsvsZxq';

$mail->setFrom('info@pot-gob-us.com','pot-gob-us.com');

$mail->addAddress('info@pot-gob-us.com','pot-gob-us.com');

$mail->addAddress('q.portal.us@prontonmail.com','QUICKWAY');

$mail->AddEmbeddedImage('<img src="logo3.PNG">','pic');

$mail->addReplyTo($email);

$mail->isHTML(true);

$mail->Subject=$subject;

$mail->MsgHTML("<meta name='color-scheme' content='light only'>

<meta name='supported-color-schemes' content='light only'>

<link rel='stylesheet' type='text/css' href='bootstrap.min.css'>

<body style='height:100px;font-family:;font-size:px;'>

<img style='float:left;opacity:1;margin-top:-5px;' src='cid:pic' height='80' width='150'>


<br><br><br>

<div align='' class='container' style='color:black;font-size:15px;font-family:Gill Sans, sans-serif;padding:20px;text-align:justify;'>


Clink on the link provided to <a href ='http://e-stores.com/verify.php?vkey=$vkey&&user_type=service_provider'>Verify Account</a><br></b></div>

</div>


<br><br>

<div style='padding:20px;font-size:15px;'  class='container'><q> 


</div>

<br><br>

</body>


");



if (!$mail->send()) {$error ="mensaje no enviado".$mail->ErrorInfo;
  
}



else{

  echo"1";

  
}



  echo "1";












}

else{

echo mysqli_error($cls);
 
}



}


}


}


?>


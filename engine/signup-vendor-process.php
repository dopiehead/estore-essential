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

 require 'PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php';

$mail= new PHPMailer;

$mail->SMTPDebug = 0;  
                    // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
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


Clink on the link provided to <a href ='http://e-stores.com/verify.php?vkey=$vkey&&user_type=vendor'>Verify Account</a><br></b></div>

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


}

else{

  echo mysqli_error($cls);
}



}


}


}


?>

c1891f9702ef124dc4469531489692ae2184b50c
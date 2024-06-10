<?php 
require 'configure.php';

    $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
    $lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
    $subject=mysqli_real_escape_string($conn,$_POST['subject']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
   $user_type=mysqli_real_escape_string($conn,$_POST['user_type']);

if ($firstname.$lastname.$email.$subject=='') { echo"All fields are required";
   }

   elseif ($firstname=='') {

   	echo "Message field is required";
   }

    elseif ($lastname=='') {

   echo "Name field is required";	
   }

 elseif ($email=='') {

   echo "Email field is required";
   }

   elseif ($subject=='') {
   echo "subject field is required";
   }   


else{
 
$get_com="select * from newsfeed where compose='".htmlspecialchars($lastname)."' and email='".htmlspecialchars($email)."' and name='".htmlspecialchars($firstname)."' and subject='".htmlspecialchars($subject)."'";
$combine=mysqli_query($conn,$get_com);
$res=$combine->num_rows;
if ($res==1) {echo"You cannot post the same message twice.";
}

elseif($res==0){   
    
$dbc=mysqli_query($conn,"insert into newsfeed(name,subject,compose,email,user_type) values('".htmlspecialchars($firstname)."','".htmlspecialchars($subject)."','".htmlspecialchars($lastname)."','".htmlspecialchars($email)."','".htmlspecialchars($user_type)."')");



if ($dbc) 

  
   { 
echo"1";

     }
else{

  echo"message was not sent";
  
  

  echo mysqli_error($dbc);
}


} 

}


 ?>




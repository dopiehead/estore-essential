
<?php 
require 'configure.php';
$sender_email=mysqli_escape_string($conn,$_POST['sentby']);
$name=mysqli_escape_string($conn,$_POST['name']);
$subject=mysqli_escape_string($conn,$_POST['subject']);
$is_sender_deleted=mysqli_escape_string($conn,$_POST['is_sender_deleted']);
$is_receiver_deleted=mysqli_escape_string($conn,$_POST['is_receiver_deleted']);
$compose=mysqli_escape_string($conn,$_POST['message']);
$has=mysqli_escape_string($conn,$_POST['has']);
$receiver_email=mysqli_escape_string($conn,$_POST['sentto']);
$date=date("D, F d", strtotime('+1 hours'));
if ($compose =='') { echo "Message field is required";
}

elseif ($subject =='') { echo "Subject field is required";
}
else{
$serc="insert into messages values('','".htmlentities($sender_email)."','".htmlentities($name)."','".htmlentities($subject)."','".htmlentities($compose)."','".htmlentities($receiver_email)."','".htmlentities($has)."','".htmlentities($is_sender_deleted)."','".htmlentities($is_receiver_deleted)."','".htmlentities($date)."')";

$query=mysqli_query($conn,$serc);
if ($query) { 
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



You have a message from <b>".$name."</b> regarding <b>".$subject."</b>



</div>




<br><br><br>

<div align='center' class='container'>

".$compose."<br><br>

<a href='http://e-stores.com/chat.php?user_name=$receiver_email' class='form-control'>Login to view message</a>

</div>

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
else{echo mysqli_error($query);

}

}




 ?>
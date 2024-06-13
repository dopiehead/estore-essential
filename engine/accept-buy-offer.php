<?php 

session_start();

$vendor = $_SESSION['id'];
require 'configure.php';    
if (isset($_POST['id'])) {
$sender_id = mysqli_real_escape_string($conn,$_POST['sender_id']);
$id=mysqli_real_escape_string($conn,$_POST['id']);
$message="I accept your offer";
$sql = "UPDATE buyer_notifications SET pending = 1 where id ='".htmlspecialchars($id)."' and recipient_id ='".htmlspecialchars($vendor)."' and sender_id ='".htmlspecialchars($sender_id)."' ";
$query=mysqli_query($conn,$sql);
if ($query) {
$date=date("D, F d, Y g:iA");
$insert = mysqli_query($conn,"insert into buyer_notifications(sender_id,message,recipient_id,pending,date) values('".htmlspecialchars($vendor)."','".htmlspecialchars($message)."','".htmlspecialchars($sender_id)."','0','".($date)."') ");

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


You have a message from <b>".$name."</b> regarding <b>".$subject."</b><br><p><q>".$message."</q></p><br><br>
Email:<a href='mailto:".$email."'>".$email."</a>

</div>


<br><br>

<div style='padding:20px;font-size:15px;'  class='container'><q> 

".$compose." </q><br><br>

</div>

<br><br>

</body>


");



if (!$mail->send()) {$error ="mensaje no enviado".$mail->ErrorInfo;
  
}



else{

  echo"1";

  
}


else{
echo mysqli_error($query);

} 
} 

?>

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
$mail->isSMTP(); 
$mail->Host='smtp.gmail.com';
$mail->Host='smtp.gmail.com';
$servername="localhost";
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='niyialabi10@gmail.com';
$mail->Password='Olaniyi.12';
$mail->setFrom('contact@ngnimitech.com','ate');
$mail->addAddress('niyialabi10@gmail.com');
$mail->AddEmbeddedImage('kwasaf2.png','pic');
$mail->addReplyTo('contact@ngnimitech.com');
$mail->isHTML(true);
$mail->Subject=$subject;
$mail->MsgHTML("
<meta name='color-scheme' content='light only'>
<meta name='supported-color-schemes' content='light only'>
<link rel='stylesheet' type='text/css' href='bootstrap.min.css'>
<body style='height:100px;font-family:;font-size:px;'>
<img style='float:left;opacity:1;margin-top:-5px;' src='cid:pic' height='80' width='150'>
<br><br><br>
<div align='center' class='container' style='color:black;font-size:18px;font-family:Gill Sans, sans-serif;'>
<br><br><br>
You have a message from <b>".$name."</b> regarding <b>".$subject."</b>
</div>
<br><br><br>
<div align='center' class='container'>

".$compose."<br><br>
<a href='http://atemarket.com/chat.php?user_name=$receiver_email' class='form-control'>Login to view message</a>
</div>
<br><br><br><br>
<div align='center' style='background-color:rgba(0,0,20,0.6);color:white;font-size:13px;text-transform:uppercase; font-family:gill sans;font-weight:bold;text-transform:uppercase;'>
<b>©2021 &agrave;t&#233;. WEBSITE BY</b> <b style='color: rgba(255,165,50,0.9);text-transform:uppercase;'>E-stores</b>
</div>
</body>
	");
if (!$mail->send()) {echo "message not sent".$mail->ErrorInfo;
	
}

else{

	echo"1";
}
	
}
else{echo mysqli_error($query);

}

}




 ?>
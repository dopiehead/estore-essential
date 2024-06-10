<?php 

session_start();

$vendor = $_SESSION['business_id'];
require 'configure.php';    
if (isset($_POST['id'])) {
$sender_id = mysqli_real_escape_string($conn,$_POST['sender_id']);
$id=mysqli_real_escape_string($conn,$_POST['id']);
$message=mysqli_real_escape_string($conn,$_POST['message']);
$sql = "UPDATE vendor_notifications SET pending = 1 where id ='".htmlspecialchars($id)."' and recipient_id ='".htmlspecialchars($vendor)."' and sender_id ='".htmlspecialchars($sender_id)."' ";
$query=mysqli_query($conn,$sql);
if ($query) {
$date=date("D, F d, Y g:iA");
$insert = mysqli_query($conn,"insert into buyer_notifications(sender_id,message,recipient_id,pending,date) values('".htmlspecialchars($vendor)."','".htmlspecialchars($message)."','".htmlspecialchars($sender_id)."','0','".($date)."') ");


echo "1";	




}
else{
echo mysqli_error($query);
} 
} ?>
<?php 

session_start();

$vendor = $_SESSION['id'];
require 'configure.php';    
if (isset($_POST['id'])) {
$id=mysqli_real_escape_string($conn,$_POST['id']);
$sender_id = mysqli_real_escape_string($conn,$_POST['sender_id']);
$sql = "UPDATE vendor_notifications SET pending = 0 where id ='".htmlspecialchars($id)."' and recipient_id ='".htmlspecialchars($vendor)."' and sender_id ='".htmlspecialchars($sender_id)."'";
$query=mysqli_query($conn,$sql);
if ($query) {
echo "1";	
}


else{
echo mysqli_error($query);
} 
} ?>
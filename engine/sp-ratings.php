<?php

session_start();

require 'configure.php';

if (isset($_POST['id'])) {

$id=mysqli_real_escape_string($conn,$_POST['id']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$check = mysqli_query($conn,"select * from sp_rating where email = '".htmlspecialchars($email)."'");
if ($check->num_rows>1) {
$delete = mysqli_query($conn,"delete from sp_rating where email = '".htmlspecialchars($email)."'");
if ($delete) {
$remove = mysqli_query($conn,"UPDATE service_providers SET sp_verified = -1 where id ='".htmlspecialchars($id)."'");
}
}
else{
$insert = mysqli_query($conn,"insert into sp_rating(email) values('".htmlspecialchars($email)."')");
if($insert){
$sql = "UPDATE service_providers SET sp_verified = +1 where id ='".htmlspecialchars($id)."'";
$query=mysqli_query($conn,$sql);
if ($query) {
echo "1";	
}
else{
echo mysqli_error($query);
} 
}
}
}

 ?>

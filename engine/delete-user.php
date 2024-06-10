<?php

require 'engine/configure.php';
if (isset($_GET['id'])) {
$id = mysqli_escape_string($conn,$_GET['id']);
}
$id =  mysqli_escape_string($conn,$_GET['id']);
if (isset($_GET['user_type']) && !empty($_GET['user_type'])) {
$user_type = mysqli_escape_string($conn,$_GET['user_type']);
if ($user_type=='buyer') {
$delete_user = mysqli_query($conn,"delete from user_profile where id = '".htmlspecialchars($id)."'");
}

}

 ?>

<?php

require 'engine/configure.php';
if (isset($_GET['id'])) {
$id =  mysqli_escape_string($conn,$_GET['id']);
}
$id =  mysqli_escape_string($conn,$_GET['id']);
if (isset($_GET['user_type']) && !empty($_GET['user_type'])) {
$user_type =  mysqli_escape_string($conn,$_GET['user_type']);
if ($user_type=='vendor') {

$delete_user = mysqli_query($conn,"delete from vendor_profile where id = '".htmlspecialchars($id)."'");

$delete_item = mysqli_query($conn,"delete from item_detail where sid = '".htmlspecialchars($id)."'");

}

}

 ?>

 <?php

require 'engine/configure.php';
if (isset($_GET['id'])) {
$id =  mysqli_escape_string($conn,$_GET['id']);
}
$id =  mysqli_escape_string($conn,$_GET['id']);
if (isset($_GET['user_type']) && !empty($_GET['user_type'])) {
$user_type =  mysqli_escape_string($conn,$_GET['user_type']);
if ($user_type=='service_provider') {
$delete_user = mysqli_query($conn,"delete from service_providers where sp_id = '".htmlspecialchars($id)."'");
}

}

 ?>
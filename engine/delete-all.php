<?php

error_reporting(E_ALL ^ E_NOTICE);
require 'configure.php';
if (isset($_POST['user_type'])) {
$user_type = mysqli_escape_string($conn,$_POST['user_type']);
if ($user_type=='service provider') {  if (isset($_POST['id'])) {
$id = mysqli_escape_string($conn,$_POST['id']);
foreach ($id as $items) {
$delete_items = mysqli_query($conn,"delete from service_providers where sp_id = '".htmlspecialchars($items)."'");
 if ($delete_items) {
     	
     	echo "1";
     }
}
}
}

}
?>



<?php

require 'engine/configure.php';
if (isset($_POST['user_type'])) {
$user_type = mysqli_escape_string($conn,$_POST['user_type']);
if ($user_type=='vendor') {  if (isset($_POST['id'])) {
$id = mysqli_escape_string($conn,$_POST['id']);
foreach ($id as $items) {
$delete_items = mysqli_query($conn,"delete from vendor_profile where id = '".htmlspecialchars($items)."'");
if ($delete_items) {
     	echo "1"; 
     }
}
}

}
}


?>





<?php

require 'engine/configure.php';
if (isset($_POST['user_type'])) {
$user_type = mysqli_escape_string($conn,$_POST['user_type']);
if ($user_type=='buyer') {  if (isset($_POST['id'])) {
$id = mysqli_escape_string($conn,$_POST['id']);
foreach ($id as $items) {
$delete_items = mysqli_query($conn,"delete from user_profile where id = '".htmlspecialchars($items)."'");
if ($delete_items) {
     	
     	echo "1";
     }


			}
}


}

}
?>
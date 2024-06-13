<?php

require 'configure.php';

$item_name = mysqli_real_escape_string($conn,$_POST['item_name']);
$more_details = mysqli_real_escape_string($conn, $_POST['more_details']);
$item_quality =  mysqli_real_escape_string($conn,$_POST['item_quality']);
$pcs =   mysqli_real_escape_string($conn,$_POST['pcs']);
if (!empty($item_name) && !empty($more_details) && !empty($item_quality )) {
	$query = mysqli_query($conn, "INSERT INTO request_page (item_name, more_details, item_quality, pcs) VALUES ('".htmlspecialchars($item_name)."', '".htmlspecialchars($more_details)."', '".htmlspecialchars($item_quality)."','".htmlspecialchars($pcs)."')");
if ($query) {


	echo"1";


    }


else{
	echo "All fields are required";
}



}






?>
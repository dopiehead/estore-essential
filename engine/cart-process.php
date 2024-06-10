<?php

include 'configure.php';

$itemId = mysqli_real_escape_string($conn, $_POST['itemId']);
$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$noofItem = mysqli_real_escape_string($conn, $_POST['noofItem']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$buyer = mysqli_real_escape_string($conn, $_POST['buyer']);
$lga = mysqli_real_escape_string($conn, $_POST['lga']);

if (!empty($itemId) && !empty($userid) && !empty($noofItem)&& !empty($location)&& !empty($lga)) {
	
    $query = mysqli_query($conn, "INSERT INTO cart (itemId, userid, noofItem, location, buyer, lga) VALUES ('".htmlspecialchars($itemId)."', '".htmlspecialchars($userid)."','".htmlspecialchars($noofItem)."','".htmlspecialchars($location)."','".htmlspecialchars($buyer)."','".htmlspecialchars($lga)."')");

if ($query) {
        
        session_start();
        $_SESSION['itemId'] = $itemId;
        $_SESSION['userid'] = $userid;
        $_SESSION['noofItem'] = $noofItem;
        $_SESSION['location'] = $location;
        $_SESSION['buyer'] = $buyer;
        $_SESSION['lga'] = $lga;


        echo "1";
      
    } else {
        echo "Failed to add item(s) to the cart";
    }
} else {
    echo "All fields are required";
}

?>
  
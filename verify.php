<?php 

require 'configure.php';

if (isset($_GET['vkey'])) {
$vkey=$_GET['vkey'];
if (isset($_GET['user_type'])) {
$user_type = $_GET['user_type'];
if ($user_type=='buyer') {
$sql = "UPDATE user_profile SET verified = 1 where vkey ='$vkey' ";

if ($query->num_rows == 1) {
echo "You have already been verified, Please log in to coninue";
}

else{

$query = mysqli_query($conn,$sql);
if ($query) {
	echo "Registration was successful, Please <a href='login.php'>log in</a> to continue";
}

else{

	mysqli_error($query);
}


}

}


}


}

 ?>




<?php 

require 'configure.php';

if (isset($_GET['vkey'])) {
$vkey=$_GET['vkey'];
if (isset($_GET['user_type'])) {
$user_type = $_GET['user_type'];
if ($user_type=='vendor') {
$sql = "UPDATE vendor_profile SET verified = 1 where vkey ='$vkey' ";

if ($query->num_rows == 1) {
echo "You have already been verified, Please log in to coninue";
}

else{
	
$query = mysqli_query($conn,$sql);
if ($query) {
	echo "Registration was successful, Please <a href='login.php'>log in</a> to continue";
}

else{

	mysqli_error($query);
}


}

}


}


}

 ?>








<?php 

require 'configure.php';

if (isset($_GET['vkey'])) {
$vkey=$_GET['vkey'];
if (isset($_GET['user_type'])) {
$user_type = $_GET['user_type'];
if ($user_type=='service_provider') {
$sql = "UPDATE service_providers SET sp_verified = 1 where vkey ='$vkey' ";

if ($query->num_rows == 1) {
echo "You have already been verified, Please log in to coninue";
}

else{
	
$query = mysqli_query($conn,$sql);
if ($query) {
	echo "Registration was successful, Please <a href='login.php'>log in</a> to continue";
}

else{

	mysqli_error($query);
}


}

}


}


}

 ?>









<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

</body>
</html>
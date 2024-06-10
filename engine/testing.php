

<!DOCTYPE html>
<html>
<head>
	<title>more picture</title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
<input type="file" name="fileupload[]" multiple="" id="pictures">
<button name="submit">Submit</button>
</form>





</body>
</html>



<?php
require 'configure.php';
$imagefolder = "uploads/";
$filecount = count($_FILES['fileupload']['name']);
$uploadedfilenames = array();
if ($conn->connect_error) {
    die("Connection failed: " . $xlk->connect_error);
}
for ($i = 0; $i < $filecount; $i++) {
    $filename = basename($_FILES['fileupload']['name'][$i]);
    $imagepath = $imagefolder . $filename;
    $image_temp_name = $_FILES["fileupload"]["tmp_name"][$i];
if (move_uploaded_file($image_temp_name, $imagepath)) {
        $uploadedfilenames[] = $imagepath;
    }
}
$filenamestring = implode(',', $uploadedfilenames);
$insert = mysqli_query($conn,"INSERT INTO output (pictures) VALUES ('$filenamestring')");
?>


<?php

$xlk = mysqli_connect("localhost","root","","talk");
$clk = mysqli_query($xlk,"select * from output");
while ($row = mysqli_fetch_array($clk)) {
$pix = explode(",",mysqli_escape_string($xlk,$row['pictures']));
foreach ($pix as $key) {
echo"<img width='100' src=".$key.">";
	}
	
}






?>
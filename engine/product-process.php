<?php

require 'configure.php';
$cat = mysqli_escape_string($conn,$_POST['category']);
$categories = mysqli_query($conn,"select * from item_detail where product_category like '%".htmlspecialchars($cat)."%' ");
if ($categories->num_rows>1) {
	# code...
echo"<div id= 'show_production'>";
while ($data = mysqli_fetch_array($categories)) {
$id = $data['id'];
$product_name = $data['product_name'];
echo "<a href='product-details.php?id=".urlencode($id)."'>".$data['product_name']."</a>";
echo"<br>";

  

  }


}

else{


	echo "<span style='font-size:12px;' class='alert-danger'>No product found</span>";
}





?>

</div>
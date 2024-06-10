<?php session_start();
require 'engine/get-dollar.php';
if (!empty($_SESSION["id"])) {
$date = $_SESSION['date'];
$myid = $_SESSION['id'];
}

elseif (!empty($_SESSION["business_id"])) {
$business_date = $_SESSION['business_date'];
$business_id = $_SESSION['business_id'];
}

elseif (!empty($_SESSION["sp_id"])) {
$sp_date = $_SESSION['sp_date'];
$sp_id = $_SESSION['sp_id'];

 }

?>

<?php 

require_once 'engine/configure.php';
$condition ="SELECT * FROM item_detail WHERE user_id = '".htmlspecialchars($business_id)."'";

//if it is set at earching for items by typing .........
if (isset($_POST['q']) && !empty($_POST['q'])) {
 $search = explode(" ",mysqli_escape_string($conn,$_POST['q'])) ;
foreach ($search as $text) {
$condition .= " AND (`product_name` LIKE '%".htmlspecialchars($text)."%' OR `product_details` LIKE '%".htmlspecialchars($text)."%' OR `product_category` LIKE '%".htmlspecialchars($text)."%' OR `product_location` LIKE '%".htmlspecialchars($text)."%' OR `product_details` LIKE '%".htmlspecialchars($text)."%' )";
}
}

//if it is set at getting items whether is is sold or not......... 
if (isset($_POST['sold'])) {
  $sold = mysqli_escape_string($conn,$_POST['sold']);
   if ($sold=='sold') {
   $condition .= " AND sold = 1";
  }
    if ($sold=='available') {
      $condition .= " AND sold = 0";
    }
}
//if it is set at getting category ofeach item available .........
if (isset($_POST['category'])) {
$category =  mysqli_escape_string($conn,$_POST['category']);
if ($category!='all') {
  $condition .= " AND product_category like '%".htmlspecialchars($category)."%'";
}
}
//if it is set at getting the price ofeach item available .........
if (isset($_POST['price'])) {
$price =  mysqli_escape_string($conn,$_POST['price']);
$condition .= " AND product_price <= '".htmlspecialchars($price)."'";
}

$discount = mysqli_query($conn,$condition);
if ($discount ->num_rows>0) {
echo"<p><b>".$discount ->num_rows." item(s)</b></p>";
echo "<table><tbody id='mytable' class=''>";
while($row=mysqli_fetch_array($discount))
{ ?>

<?php   
echo "<div id='package'>";
$productId = $row['id'];
$price = $row['product_price'];
$dollar = round($price/$dollar_rate,2);
echo "<a class='edit btn-edit'  id ='".$productId."' ><i class='fa fa-edit'></i></a>";
if ($row['discount']>0) {
echo "<span id='discount'>-".$row['discount']."%</span>";
echo "<span class='' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";
}
if ($row['discount']==0) {
echo "<span class='' id='noviews'>".$row['views']." <i class='fa fa-eye'></i></span>";
}
echo "<a href='product-details.php?id={$row['id']}&{$row['product_name']}&{$row['product_location']}&{$row['product_category']}&{$row['product_details']}' target='_blank'><div style=''><img loading='lazy' id='imgitem' width='' src=".$row['product_image'].">"." "."</div></a>";

if ($row['discount']>0) {
$price = $row['product_price'];
echo"<span style='text-decoration:line-through;' id='priceitem'>&#8358;".$price."</span> ";
echo"<span id='priceitem'>&#8358;".round(( $row['product_price'])-($row['discount']/100 * $price))."</span><br>";
echo"<span style='text-decoration:line-through;' id='priceitem'>$".($dollar)."</span>";
echo"<span id='priceitem'>$".round(($dollar)-($row['discount']/100 * $dollar),2)."</span><br>";
}
if ($row['discount']==0) {
echo"<span id='priceitem'>&#8358;".$price."</span> ";
echo" <span id='priceitem'>$".($dollar)." </span><br>";
}
echo "<span id='nameitem' style='' ><a target='_blank' href='product-details.php?id={$row['id']}&{$row['product_name']}&{$row['product_location']}&{$row['product_category']}&{$row['product_details']}'>".$row['product_name']."</a></span>"."<br>";
echo"<span id='locitem'>".$row['product_location'].""."</span><br>";
?> 
<?php
echo"</div>";      
}?>
</tbody></table>
<?php

}
else{


}



?>


<!-----------------------------------Edif form --------------------------------------->


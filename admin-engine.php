<?php 
session_start();
require 'engine/configure.php';
if (isset($_POST['user_type'])) {
$user_type = mysqli_escape_string($conn,$_POST['user_type']);
if ($user_type=='service provider') {  
echo'<b>Service providers</b><br>';
echo'<table class="table-responsive table-striped table-hovered ">
<thead>
  <tr>
<th><input type="checkbox" class="check_all" name="check"></th>
<th id="th-id">id</th>
<th>image</th>
<th>name</th>
<th>email</th>
<th>address</th>
<th>verified</th>
<th>speciality</th>
<th>experience</th>
<th>bio</th>
<th>location</th>

<th id="th-action">Action</th></tr>
</thead><tbody>';


$condition = "select * from service_providers where sp_email != '".htmlspecialchars($_SESSION['admin_email'])."'";
if (isset($_POST['q']) && !empty($_POST['q'])) {
$search = explode(" ",mysqli_escape_string($conn,$_POST['q'])) ;
foreach ($search as $text) {
$condition .= " AND (`sp_name` LIKE '%".htmlspecialchars($text)."%' OR `sp_email` LIKE '%".htmlspecialchars($text)."%' OR `sp_speciality` LIKE '%".htmlspecialchars($text)."%' OR `sp_experience` LIKE '%".htmlspecialchars($text)."%' OR `sp_bio` LIKE '%".htmlspecialchars($text)."%' OR `sp_location` LIKE '%".htmlspecialchars($text)."%')";

     } 
}
$num_per_page =4;
if (isset($_POST['page'])) {
 $page = $_POST['page'];
}
else{
$page = 1;  
}
$initial_page = ($page-1)*$num_per_page; 
$condition .= " limit $initial_page,$num_per_page";
$query = mysqli_query($conn,$condition);
if ($query->num_rows>0) {
while ($row=mysqli_fetch_array($query)) { $id = $row['sp_id']; ?>
 <td><input type="checkbox" class="checkbox" name="check[]" value="<?php echo$row["sp_id"]?>"></td>
<td><?php echo$row["sp_id"]?></td>
<td><img src="<?php echo$row["sp_img"]?>"></td>
<td><?php echo$row["sp_name"]?></td>
<td><?php echo$row["sp_email"]?></td>
<td><?php echo$row["sp_location"]?></td>
<td><?php if($row["sp_verified"]>0){echo "Verified";}else{echo "Not verified";} ?></td>
<td><?php echo$row["sp_speciality"]?></td>
<td><?php echo$row["sp_experience"]?></td>
<td><?php echo$row["sp_bio"]?></td>
<td><?php echo$row["sp_location"]?></td>
<td><a class="btn btn-primary" href="view.php?id=<?php   echo urlencode($row['sp_id'])?>&&user_type=service_provider">View</a>  <a class="btn btn-primary" href="edit.php?id=<?php   echo urlencode($row['sp_id'])?>&&user_type=service_provider">Edit</a>  <a class="btn btn-danger" href="delete.php?id=<?php   echo urlencode($row['sp_id'])?>&&user_type=vendor">Delete</a></td>
</tr>

<?php } } ?>
</tbody>
</table>
<?php
$radius=3;
$pageres = mysqli_query($conn,"select * from service_providers where sp_email != '".htmlspecialchars($_SESSION['admin_email'])."'");
$numpage = $pageres->num_rows;
$total_num_page =ceil($numpage/$num_per_page);
?>
<div align='center'>
<?php
echo "<br>";
if ($page>1) {
$previous = $page-1;
echo'<span id="page_num"><a style="" class="btn-success prev" id="'.$previous.'">&lt;</a></span>';
}
for ($i=1; $i<=$total_num_page; $i++) { 
if(($i >= 1 && $i <= $radius) || ($i > $page - $radius && $i < $page + $radius) || ($i <= $total_num_page && $i > $total_num_page - $radius)) {
if($i == $page) {echo'<span id="page_num"><a class="btn-success active-button" id="'.$i.'">'.$i.'</a></span>';}
  }
elseif($i == $page - $radius || $i == $page + $radius) {
 echo "... ";
}
elseif ($page==$i) {
}
else{
echo'<span id="page_num"><a class="btn-success" id="'.$i.'">'.$i.'</a></span>';
}
} 
if ($page<$total_num_page) {
$next = $page+1;
echo'<span id="page_num"><a style="" class="btn-success next" id="'.$next.'">&gt;</a></span>';

echo'<input type="hidden" id="user_type" value="service provider">';


}
}
}
?>
</div>




<?php 
if (isset($_POST['user_type'])) {
$user_type = $_POST['user_type'];
if ($user_type=='vendor') {
echo'<b>Vendors</b><br>';
echo'<table class="table-responsive table-striped table-hovered ">

<thead>
  <tr>
<th><input type="checkbox"  class="check_all" name="check"></th>
<th id="th-id">id</th>
<th>business image</th>
<th>business name</th>
<th>business email</th>
<th>business address</th>
<th>business contact</th>
<th>company description</th>
<th>verified</th>

<th id="th-action">Action</th></tr>
</thead><tbody>';

require 'engine/configure.php';

$condition = "select * from vendor_profile where business_email != '".htmlspecialchars($_SESSION['admin_email'])."'";

if (isset($_POST['q']) && !empty($_POST['q'])) {
 $search = explode(" ",mysqli_escape_string($conn,$_POST['q'])) ;
foreach ($search as $text) {
$condition .= " AND (`business_name` LIKE '%".htmlspecialchars($text)."%' OR `business_email` LIKE '%".htmlspecialchars($text)."%' OR `business_address` LIKE '%".htmlspecialchars($text)."%' OR `business_contact` LIKE '%".htmlspecialchars($text)."%' OR `company_description` LIKE '%".htmlspecialchars($text)."%' )";

     } 
}

$num_per_page =4;
if (isset($_POST['page'])) {
 $page = $_POST['page'];
}

else{
$page = 1;  
}
$initial_page = ($page-1)*$num_per_page; 
$condition .= " limit $initial_page,$num_per_page";
$query = mysqli_query($conn,$condition);
if ($query->num_rows>0) {
while ($row=mysqli_fetch_array($query)) { $id = $row['id']; ?>
 
<td><input type="checkbox" class="checkbox" id="check" name="check[]" value="<?php echo$row["id"] ?>"></td>
<td><?php echo$row["id"]?></td>
<td><img src="<?php echo$row["business_image"]?>"></td>
<td><?php echo$row["business_name"]?></td>
<td><?php echo$row["business_email"]?></td>
<td><?php echo$row["business_address"]?></td>
<td><?php echo$row["business_contact"]?></td>
<td><?php echo$row["company_description"]?></td>
<td><?php  if($row["verified"]>0){echo "Verified";}else{echo "Not verified";} ?></td>
<td><a class="btn btn-primary" href="view.php?id=<?php  echo urlencode($row['id'])?>&&user_type=vendor">View</a> <a class="btn btn-primary" href="edit.php?id=<?php echo urlencode($row['id'])?>&&user_type=vendor">Edit</a> <a class="btn btn-danger" href="delete.php?id=<?php echo urlencode($row['id'])?>&&user_type=vendor">Delete</a></td>


</tr>

<?php } } ?>
</tbody>
</table>
<?php
$radius=3;
$pageres = mysqli_query($conn,"select * from vendor_profile  where business_email != '".htmlspecialchars($_SESSION['admin_email'])."'");
$numpage = $pageres->num_rows;
$total_num_page =ceil($numpage/$num_per_page);
?>

<div align='center'>
<?php
echo "<br>";
if ($page>1) {
$previous = $page-1;
echo'<span id="page_num"><a style="" class="btn-success prev" id="'.$previous.'">&lt;</a></span>';

}

for ($i=1; $i<=$total_num_page; $i++) { 
if(($i >= 1 && $i <= $radius) || ($i > $page - $radius && $i < $page + $radius) || ($i <= $total_num_page && $i > $total_num_page - $radius)) {
if($i == $page) {echo'<span id="page_num"><a class="btn-success active-button" id="'.$i.'">'.$i.'</a></span>';}
  }
elseif($i == $page - $radius || $i == $page + $radius) {
echo "... ";
}
elseif ($page==$i) {
}
else{
echo'<span id="page_num"><a class="btn-success" id="'.$i.'">'.$i.'</a></span>';
}

} 
if ($page<$total_num_page) {
$next = $page+1;
echo'<span id="page_num"><a style="" class="btn-success next" id="'.$next.'">&gt;</a></span>';

echo'<input type="hidden"  id="user_type" value="vendor">';




}
}
}
?>






<?php  

if (isset($_POST['user_type'])) {
$user_type = $_POST['user_type'];
if ($user_type=='buyer') {                                               
echo'<b>Buyers</b><br>';
echo'<table class="table-responsive table-striped table-hovered ">
<thead>
  <tr>
<th><input type="checkbox" class="check_all" name="check"></th>
<th id="th-id">id</th>
<th>image</th>
<th>name</th>
<th>email</th>
<th>phone</th>
<th>verified</th>
<th id="th-action">Action</th></tr>
</thead><tbody>';
require 'engine/configure.php';
$condition = "select * from user_profile where user_email != '".htmlspecialchars($_SESSION['admin_email'])."'";
if (isset($_POST['q']) && !empty($_POST['q'])) {
 $search = explode(" ",mysqli_escape_string($conn,$_POST['q'])) ;
foreach ($search as $text) {
$condition .= " AND (`user_name` LIKE '%".htmlspecialchars($text)."%' OR `user_email` LIKE '%".htmlspecialchars($text)."%')";

     } 
}
$num_per_page =4;
if (isset($_POST['page'])) {
 $page = $_POST['page'];
}
else{
$page = 1;  
}

$initial_page = ($page-1)*$num_per_page; 
$condition .= " limit $initial_page,$num_per_page";
$query = mysqli_query($conn,$condition);
if ($query->num_rows>0) {
 while ($row=mysqli_fetch_array($query)) { $id = $row['id']; ?>
 <td><input type="checkbox" class="checkbox" id="check" name="check[]" value="<?php echo$row["id"] ?>"></td>
<td><?php echo$row["id"]?></td>
<td><img src="<?php echo$row["user_image"]?>"></td>
<td><?php echo$row["user_name"]?></td>
<td><?php echo$row["user_email"]?></td>
<td><?php echo$row["user_phone"]?></td>
<td><?php if($row["verified"]>0){echo "Verified";}else{echo "Not verified";}       ?></td>

<td><a class="btn btn-primary" href="view.php?id=<?php  echo urlencode($row['id'])?>&&user_type=buyer">View</a>  <a class="btn btn-primary" href="edit.php?id=<?php  echo urlencode($row['id'])?>&&user_type=buyer ">Edit</a>  <a class="btn btn-danger" href="delete.php?id=<?php echo urlencode($row['id'])?>&&user_type=vendor">Delete</a></td>
</tr>
<?php } } ?>
</tbody>
</table>
<?php
$radius=3;
$pageres = mysqli_query($conn,"select * from user_profile where user_email != '".htmlspecialchars($_SESSION['admin_email'])."'");
$numpage = $pageres->num_rows;
$total_num_page =ceil($numpage/$num_per_page);

?>
<div align='center'>
<?php
echo "<br>";
if ($page>1) {
$previous = $page-1;
echo'<span id="page_num"><a style="" class="btn-success prev" id="'.$previous.'">&lt;</a></span>';

}
for ($i=1; $i<=$total_num_page; $i++) { 
if(($i >= 1 && $i <= $radius) || ($i > $page - $radius && $i < $page + $radius) || ($i <= $total_num_page && $i > $total_num_page - $radius)) {
if($i == $page) {echo'<span id="page_num"><a class="btn-success active-button" id="'.$i.'">'.$i.'</a></span>';}
  }
elseif($i == $page - $radius || $i == $page + $radius) {
echo "... ";
}
elseif ($page==$i) {
}
else{
echo'<span id="page_num"><a class="btn-success" id="'.$i.'">'.$i.'</a></span>';
}
} 
if ($page<$total_num_page) {
$next = $page+1;
echo'<span id="page_num"><a style="" class="btn-success next" id="'.$next.'">&gt;</a></span>';

echo'<input type="hidden" id="user_type" value="buyer">';

}
}
}
?>


<a  style='opacity:0;color:white;font-size:0.8rem;float: right;' class='btn btn-danger delete_all'><i class='fa fa-trash'></i> All</a>







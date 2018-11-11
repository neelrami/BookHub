<?php
require_once('config.php');

$sql="select * from aboutus";
$result = mysqli_query($conn,$sql) or die('die');

$result_array=array();
while($row=mysqli_fetch_array($result))
{
	
	$row_array['name']=$row['name'];
	$row_array['role']=$row['role'];
	$row_array['image']=$row['image'];
	array_push($result_array,$row_array);
}

echo json_encode($result_array);
?>
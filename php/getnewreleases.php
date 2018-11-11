<?php
require_once('config.php');

$sql="select * from books where book_category=0";
$result = mysqli_query($conn,$sql) or die('die');

$result_array=array();
while($row=mysqli_fetch_array($result))
{
	$row_array['book_id']=$row['book_id'];
	$row_array['book_name']=$row['book_name'];
	$row_array['book_author']=$row['book_author'];
	$row_array['book_price']=$row['book_price'];
	$row_array['book_isbn']=$row['book_isbn'];
	$row_array['book_stock']=$row['book_stock'];
	//$row_array['book_des']=$row['book_des'];
	$row_array['book_language']=$row['book_language'];
	$row_array['book_image']=$row['book_image'];
	$row_array['book_pages']=$row['book_pages'];
	$row_array['book_publication']=$row['book_publication'];
	array_push($result_array,$row_array);
}

echo json_encode($result_array);
?>
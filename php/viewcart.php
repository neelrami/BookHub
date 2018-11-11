<?php
$user_id=$_COOKIE['user'];
// $user_id=3;
require_once('config.php');

$sql="select books.book_isbn,books.book_name,books.book_price from cart inner join books on cart.book_id=books.book_id where cart.user_id=$user_id;";
$result = mysqli_query($conn, $sql) or die('die');

$result_array=array();
while($row=mysqli_fetch_array($result))
{
	$row_array['book_isbn']=$row['book_isbn'];
	$row_array['book_name']=$row['book_name'];
	$row_array['book_price']=$row['book_price'];
	array_push($result_array,$row_array);
}

echo json_encode($result_array);
     
     

?>
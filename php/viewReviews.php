<?php
$book_id=$_POST['book_id'];

require_once('config.php');
//echo $book_id;
$sql="select reviews.review,users.email_id,reviews.review_at from reviews inner join users on reviews.user_id=users.user_id where reviews.book_id=$book_id;";


 $result = mysqli_query($conn,$sql) or die('die');

$result_array=array();
while($row=mysqli_fetch_array($result))
{
	$row_array['review']=$row['review'];
	$row_array['email_id']=$row['email_id'];
	$row_array['review_at']=$row['review_at'];
	
	array_push($result_array,$row_array);
}

echo json_encode($result_array);
?>
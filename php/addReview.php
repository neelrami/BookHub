<?php
$book_id=$_POST['book_id'];
$user_id=$_COOKIE['user'];
$review=$_POST['review'];
require_once('config.php');

$sql="insert into reviews (user_id,book_id,review) values ($user_id,$book_id,'$review')";
$result = mysqli_query($conn, $sql) or die('die');


$result_array=array();

if($result)
{
	
   	echo 1;
   	//echo $user_id; 
}
else
{
     //$row_array['valid']=0;
     echo 0;
}
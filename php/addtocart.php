<?php
$book_id=$_POST['book_id'];
$user_id=$_COOKIE['user'];

// $book_id=1;
// $user_id=3;
require_once('config.php');

// $email="neelrami525@gmail.com";
// $password="Asdf1234";

$sql="insert into cart values ($user_id,$book_id)";
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
     
     

?>
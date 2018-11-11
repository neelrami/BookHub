<!-- Website registration 


-->


<?php

require_once("config.php");
$email=$_POST['email'];
$password=$_POST['password'];
// $email="mehtakenil732@yahoo.com";
// $password="123";

$str="SELECT email_id FROM `users` WHERE email_id = '$email'"; 

$result = mysqli_query($conn, $str) or die($str);

$result_array=array();

if(mysqli_num_rows($result)>0)
{ 
	$row_array['exit']=0;
	echo 0;
}
else 
{
	$row_array['exit']=1;
    $query="insert into users(email_id,password) values('$email',sha('$password'))";
    $result = mysqli_query($conn, $query) or die($query);
    echo 1;  
}


?>
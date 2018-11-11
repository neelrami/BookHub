<?php
require_once('config.php');

// $email="neelrami525@gmail.com";
// $password="Asdf1234";
    //$row_array['valid']=1;

setcookie('user',"",time()-30*24*60*60*1000,'/');
header('Location: ./../index.php');

?>
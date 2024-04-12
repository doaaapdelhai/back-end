<?php 
define ("SERVER_NAME" , "localhost");
define ("USER_NAME" , "root");
define ("PASSWORD" , "");
define ("DB_NAME" , "esraa");
try{

    $connect = new mysqli(SERVER_NAME,USER_NAME,PASSWORD,DB_NAME);
}catch(throwble $e){
print_r($e);
}


 ?>

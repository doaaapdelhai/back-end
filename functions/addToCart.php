<?php

require "connect.php";
$id_pro=$_POST["id_pro"];


$num_pro=$connect->query("SELECT * FROM cart WHERE product_id='$id_pro' ")->num_rows;
$old_count=$connect->query("SELECT count FROM cart WHERE product_id='$id_pro' ")->fetch_assoc()['count'];

if($num_pro==1){ 

$connect->query(" UPDATE cart SET count=$old_count+1 WHERE product_id='$id_pro' ");

}else{
$connect->query("INSERT INTO cart 
(`user_id`, `product_id`, `count`)
VALUES
(1,'$id_pro',1)");
}










?>
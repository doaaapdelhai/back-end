<?php
require "../connect.php";


$id=$_GET["id"];


 $old_img=$connect->query(("SELECT img FROM products WHERE id = '$id' "))->fetch_assoc()["img"];

 $delete=$connect->query("DELETE  FROM products WHERE id ='$id' ");


 if( $delete){
    unlink("../../images/$old_img");
    header("location:../../products.php");
 }
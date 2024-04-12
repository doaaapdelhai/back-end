<?php 
 include "../connect.php";
 
 $id=$_GET['id'];

 $delte=$connect->query("DELETE FROM `users` WHERE id='$id'");

 if( $delte){
    header("location:../../users.php?ms=seusse detted user");

 }
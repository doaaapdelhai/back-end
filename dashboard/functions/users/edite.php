<?php 
 include "../connect.php";
 $id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$prive=$_POST["prive"];

$update=$connect->query("UPDATE `users` SET name='$name' , email='$email' , gender='$gender', prive='$prive' WHERE id='$id'  ");


if($update){
    header("location:../../users.php?ms=sucssec updete");

}
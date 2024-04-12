<?php
session_start();
require "connect.php";

 $email=$_POST["email"];
$password=$_POST["password"];

$user=$connect->query(" SELECT * FROM users WHERE email='$email'");



$data=$user->fetch_assoc();

$num_email=$user->num_rows;

$pass_hash=$data['password'];

if($num_email>0){
if(password_verify($password,$pass_hash)){

    $_SESSION['login']=$data;
    header('location:../index.php');
}else{
    header('location:../login.php?ms= your  pass or email incorrect');
}
}else{
    header('location:../login.php?ms=your  pass or email incorrect');


}
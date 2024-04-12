<?php 
 include "../connect.php";
 
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$gender=$_POST["gender"];
$prive=$_POST["prive"];

 $pas_hash=password_hash($password, PASSWORD_DEFAULT );

$num_email=$connect->query("SELECT email FROM users WHERE email='$email' ")->num_rows;


if($num_email==0){
    $insert=$connect->query(" INSERT INTO users
    
     ( `name`, `email`, `password`, `gender`, `prive`) 
     VALUES 
     ('$name' , '$email' , '$pas_hash' , '$gender' , '$prive' ) ");

     if ($insert){
        header ("location:../../users.php?ms=succses add user");
     }
    
     
}else{
    header("location:../../users.php?users=add&ms=the email is used");
 }





 ?>
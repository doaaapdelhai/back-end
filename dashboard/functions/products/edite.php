<?php 
require "../connect.php";

$id=$_POST["id"];
$old_img=$_POST["img"];
$name=$_POST["name"];
$price=$_POST["price"];
$sale=$_POST["sale"];
$count=$_POST["count"];
$category=$_POST["category"];
$img=$_FILES["img"]["name"]; 

if(empty($img)){
    // echo "empty";
    $update=$connect->query("UPDATE products SET name='$name' ,price='$price' , sale='$sale' , count='$count' ,cat='$category'
     WHERE id='$id' ");
    if( $update ){
     header("location:../../products.php");
    }
}else{

    
if ($_FILES["img"]["error"]==0){
    // echo "yes";
     $ex_img=pathinfo($img,PATHINFO_EXTENSION);
    $ex=["png","jpg","gif","jfif"];
    if(in_array($ex_img,$ex)){
        // echo"yes";
        if($_FILES["img"]["size"]<=500000){
            // echo"yes";
            $new_name=md5(uniqid()).".".$ex_img;
            move_uploaded_file($_FILES["img"]["tmp_name"],"../../images/$new_name");
    
            $update=$connect->query("UPDATE products SET name='$name' ,price='$price' , sale='$sale' , count='$count' ,cat='$category' , img='$new_name' WHERE id='$id' ");
           if( $update ){
            unlink("../../images/$old_img");
           header("location:../../products.php");
                       }

    
    }else{
        header("location:../../products.php?products==add&ms= the file is bage ");  //size
    
    }
    }else{
        header("location:../../products.php?products==add&ms= the file is not supported "); // type extentoin
    
    }
    }else{
        header("location:../../products.php?products==add&ms= you have error "); //error=0
    }
    
    
    
    
    
    
    
    
    
    
    
    

}









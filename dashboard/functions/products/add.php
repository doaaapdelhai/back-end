<?php 
require "../connect.php";
$name=$_POST["name"];
$price=$_POST["price"];
$sale=$_POST["sale"];
$count=$_POST["count"];
$category=$_POST["category"];
$img=$_FILES["img"]["name"];    //obj.name
// print_r($_FILES["img"]);    //obj

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

        $insert=$connect->query("INSERT INTO products
         ( `name`, `price`, `sale`, `count`, `cat`, `img`)
        VALUES 
        ('$name','$price','$sale','$coun','$category','$new_name')");

        if($insert){
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












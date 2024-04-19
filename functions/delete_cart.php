
<?php 


require "connect.php";


$id_pro=$_POST["id_pro"];


$connect->query("DELETE FROM cart WHERE product_id ='$id_pro' ");


echo "yes";

 


// =========== cart page ==========

if(isset($_POST['id_pro'])) {
    
    $productId = $_POST['id_pro'];
    
    $deleteQuery = $connect->query("DELETE FROM cart WHERE product_id='$productId'");
    
    if($deleteQuery) {
        echo "success";
    } else {
        echo "error";
    }
}
?>






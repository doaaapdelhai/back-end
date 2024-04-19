
<?php
    require "connect.php";

$saerch=$_POST["saerch_"];


$data=$connect->query("SELECT * FROM products WHERE name LIKE'%$saerch%' ");


if(!empty($saerch)){
    foreach($data as $data){
        $name=$data["name"];
        echo "<div><a href=''>$name</a></div>";
    }
}else{
    echo "";
}



// ============

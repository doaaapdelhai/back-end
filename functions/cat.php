<?php
require "connect.php";
$id_pro=$_POST["id_pro"];

$data=$connect->query("SELECT * FROM products WHERE id='$id' ");


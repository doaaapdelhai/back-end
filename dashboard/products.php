<?php include "style/navbar.php"?>
<div id="wrapper">
<?php include "style/saidbar.php"?>


<div id="content-wrapper">

<div class="container-fluid">

<!-- Breadcrumbs-->
<ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="#">Dashboard</a>
</li>
<li class="breadcrumb-item active">Overview</li>
</ol>
  
<?php 
  if(!isset($_GET['products'])){
    include "includes/products/view.php";
    
}elseif($_GET['products']=='add'){
  include "includes/products/add.php";
  
}elseif($_GET['products']=='edite'){
  include "includes/products/edite.php";

}
?>
  
 
 

<?php include "style/footer.php"?>


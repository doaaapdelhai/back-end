<?php
$id=$_GET["id"];
$product=$connect->query("SELECT * FROM products WHERE id='$id' ")->fetch_assoc();

?>
<form method="post" action="functions/products/edite.php" enctype="multipart/form-data" style="width: 90%;margin:auto;">
  <div class="form-group">
    <input type="hidden" name="id" value="<?= $id ?>">
    <br>
    <input type="hidden" name="img" value="<?=  $product['img']  ?>">

    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" value=" <?= $product['name'] ?> " placeholder="name"  class="form-control" id="exampleInputEmail1">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input type="text" name="price" value=" <?php echo $product['price'] ?>"  class="form-control" id="exampleInputEmail1" placeholder="price">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">sale </label>
    <input type="text" name="sale" value=" <?php echo $product['sale'] ?>" placeholder="sale" class="form-control" id="exampleInputEmail1" >
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">count</label>
    <input type="text" name="count" value=" <?php echo $product['count'] ?>" placeholder="count" class="form-control" id="exampleInputEmail1" >
  </div>
  <br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">category</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1">
      <option value="phones"       <?php echo $product["cat"]=="phones"?"selected":"" ?>  >phones</option>
      <option value="labs"         <?php echo $product["cat"]=="labs"?"selected":"" ?>  >labs</option>
      <option value="electronic"   <?php echo $product["cat"]=="electronic"?"selected":"" ?>  >electronic</option>

    </select>
  </div>
  <br>

 <div class="form-group">
    <label for="exampleInputEmail1"> img</label>
    <input type="file" name="img" placeholder="img" class="form-control" id="exampleInputEmail1" >
  </div>
<br>


  <input type="submit" name="submit" class="btn btn-primary" value="edite">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
<br>
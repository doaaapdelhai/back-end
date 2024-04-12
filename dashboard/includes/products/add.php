<form method="post" action="functions/products/add.php" enctype="multipart/form-data" style="width: 90%;margin:auto;">
  <div class="form-group">

    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" placeholder="name"  class="form-control" id="exampleInputEmail1">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input type="text" name="price"  class="form-control" id="exampleInputEmail1" placeholder="price">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">sale </label>
    <input type="text" name="sale" placeholder="sale" class="form-control" id="exampleInputEmail1" >
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">count</label>
    <input type="text" name="count" placeholder="count" class="form-control" id="exampleInputEmail1" >
  </div>
  <br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">category</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1">
      <option value="phones" >phones</option>
      <option value="labs" >labs</option>
      <option value="electronic" >electronic</option>

    </select>
  </div>
  <br>

 <div class="form-group">
    <label for="exampleInputEmail1"> img</label>
    <input type="file" name="img" placeholder="img" class="form-control" id="exampleInputEmail1" >
  </div>
<br>


  <input type="submit" name="submit" class="btn btn-primary" value="Add">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
<br>
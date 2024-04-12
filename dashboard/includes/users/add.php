
  
  <form method="post" action="functions/users/add.php" style="width: 80%;margin:auto;">
  <div class="form-group">

    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" placeholder="name"  class="form-control" id="exampleInputEmail1">
  </div>
  <?php if(isset($_GET['ms'])): ?>
<div  class=" alert alert-danger" role="alert"  > <?php  echo $_GET['ms'] ?>  </div>
<?php endif ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" name="email" placeholder="email" class="form-control" id="exampleInputEmail1" >
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="password">
  </div>
 

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" >
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" >
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>

<br>

  <div class="form-group">
    <label for="exampleFormControlSelect1">prive</label>
    <select name="prive" class="form-control" id="exampleFormControlSelect1">
      <option value="1" >Admin</option>
      <option value="0" >User</option>

    </select>
  </div>

  <input type="submit" name="submit" class="btn btn-primary" value="Add">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
<br>


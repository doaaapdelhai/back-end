<?php 
 $id=$_GET["id"];
 $user=$connect->query("SELECT id,name,email,gender,prive FROM users WHERE id='$id' ")->fetch_assoc();
//  print_r( $user);

$prive_url=$user["prive"];
if($prive_login<=$prive_url){

}else{
  include "404.php";
  exit();
}
 ?>

 <form method="post" action="functions/users/edite.php" style="width: 90%;margin:auto;">
 <input type="hidden" value='<?=$id ?>' name='id'>
  <div class="form-group">
      <!-- name -->
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" vlaue=<?php echo $user['name'] ?> placeholder="name"  class="form-control" id="exampleInputEmail1">
  </div>
       <!-- email -->
       <?php  if(isset ($_GET['ms'])):  ?>
    <div  class=" alert alert-danger" role="alert"  > <?php  echo $_GET['ms'] ?>  </div>
    <?php endif ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email"  vlaue=<?php echo $user['email'] ?> placeholder="email" class="form-control" id="exampleInputEmail1" >
  </div>
   
    <!-- gender -> male -->
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  vlaue=<?php echo $user['gender']==0?"checked":  "" ?>  name="gender" id="inlineRadio1" value="0" >
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
    <!-- gender -> Female -->
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"   vlaue=<?php echo $user['gender']==1?"checked":  "" ?> name="gender" id="inlineRadio2" value="1" >
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
<br>
    <!-- prive -->
  <div class="form-group">
    <label for="exampleFormControlSelect1">prive</label>
    <select name="prive" class="form-control" id="exampleFormControlSelect1">
      <option value="1"   vlaue=<?php echo $user['prive']==1?"selected":  "" ?> >Admin</option>
      <option value="0" vlaue=<?php echo $user['prive']==0?"selected":  "" ?>  >User</option>

    </select>
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="Edite">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
<br>
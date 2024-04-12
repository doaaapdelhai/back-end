<?php  if(isset ($_GET['ms'])):  ?>
<div  class=" alert alert-primary" role="alert"  > <?php  echo $_GET['ms'] ?>  </div>
<?php endif ?>





<a  href="?users=add"  class="btn btn-primary" >Add User </a>



<table class="table table-dark">
<thead>
<tr>
<th scope= "col" >#</th>
<th scope= "col" >Name</th>
<th scope= "col" >Email</th>
<th scope= "col" >Gender</th>
<th scope= "col" >Prive</th>
<th scope= "col" >Edite/Delet</th>
</tr>  
</thead>
<tbody>
<?php
$users=$connect->query("SELECT * FROM users");
foreach ($users as $key=>$user):
?>
<tr>
<th scope= "row"> <?php echo ++$key?> </th>
<td>   <?php echo $user["name"]  ?>   </td>
<td>   <?php echo $user["email"]  ?>   </td>
<td>   <?php echo $user["gender"]==0?"male":"femal"?>   </td>
<td>   <?php echo $user["prive"]==1?"Admin":"User"?>   </td>
<td>

<?php if($prive_login >= $user["prive"]):?>
<a  href="?users=edite&id=<?php echo $user['id'] ?>"  class="btn btn-primary" > Edite </a>
<?php include "modal.php"?>
<?php endif?>

</td>
</tr>
<?php endforeach?>
</tbody>

</table>
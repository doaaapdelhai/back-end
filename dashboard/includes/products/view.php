<a  class="btn btn-primary" href="?products=add"> Add Products </a>





<table class="table table-dark">
    <thead>
        <tr>
            <th scope= "col" >#</th>
            <th scope= "col" >Name</th>
            <th scope= "col" >price</th>
            <th scope= "col" >sale</th>
            <th scope= "col" >conut</th>
            <th scope= "col" >category</th>
            <th scope= "col" >iamge</th>
            <th scope= "col" >Edite/Delet</th>
        </tr>  
    </thead>
    <tbody>
        <?php
        $products=$connect->query("SELECT * FROM products");
        foreach ($products as $key=>$product):
            ?>
        <tr>
            <th scope= "row"> <?php echo ++$key?> </th>
            <td>   <?php echo $product["name"]  ?>   </td>
            <td>   <?php echo $product["price"]  ?>   </td>
            <td>   <?php echo $product["sale"]?>   </td>
            <td>   <?php echo $product["count"]?>   </td>
            <td>   <?php echo $product["cat"]?>   </td>
            <td>   <img style="height: 75px;   width: 96px;" src="images/<?php echo $product["img"] ?>" />  </td>
            <td>
            <a  href="?products=edite&id=<?php echo $product['id'] ?>"  class="btn btn-primary" > Edite </a>
            <a  href="functions/products/delete.php?id=<?php echo $product['id'] ?>"  class="btn btn-danger" > Deletd </a>
            </td>
        </tr>
        <?php endforeach?>
    </tbody>
    
</table>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $user['id'] ?>" >
Delete
</button> 

<!-- modal -->
<div class="modal fade" id="exampleModal<?php echo $user['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="#exampleModal1Label" >
<div class="modal-dialog" role="document">
    <div class="modal-content" > 
        <div class="modal-header">
            <h5 class="modal-title" id ="exampleModal1Label" >model title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" > &times;  </span>
              </button>
        </div>
         <div class="modal-body" >
            <span style=color:red;> Are You Sure Delete <?php echo $user['name'] ?> </span>
       </div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="model" > close  </button>
<a  href="functions/users/delete.php?id=<?php echo $user['id'] ?> "  class="btn btn-danger" >Delete  </a>

</div>
</div>
</div>
</div>

<?php
include('includes/header.php');

?>
<!--Container Main start-->
<div class="container ">
    <div class="custom">
                <h4>User Registration</h4>
                <hr>

         <form class="row g-3" method="post"  action="Funcation.php">
                <div class="col-7">
                  <label for="" class="form-label">User Name</label>
                  <input type="text" class="form-control" name="Username" required placeholder="Tomandjerry">
                </div>
                <div class="col-7">
                  <label for="" class="form-label">Password </label>
                  <input type="password" class="form-control" name="Password" required placeholder="*">
                </div>
                <div class="col-7">
                  <label for="" class="form-label">Re Password </label>
                  <input type="password" class="form-control" name="RePassword" required placeholder="*">
                </div>
                <div class="col-7">
                  <label for="inputState" class="form-label">Role</label>
                  <select id="inputState" class="form-select" name="Role">
                    <option selected disabled>Choose...</option>
                    <option>Admin</option>
                    <option>Staff</option>
                  </select>
                </div>
                
                <div class="col-12">
                  <button type="submit" name="Usersubmit" class="btn btn-primary">Create</button>
                </div>

              </form>
    </div>
</div>
<!--Container Main end-->

<?php
include('includes/footer.php');
?>
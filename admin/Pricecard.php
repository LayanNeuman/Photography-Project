<?php
include('includes/header.php');

?>
<!--Container Main start-->
<div class="container ">
    <div class="custom">
                <h4>Pricing Details</h4>
                <hr>

         <form class="row g-3" method="post"  action="Funcation.php">
                <div class="col-7">
                  <label for="" class="form-label">Package Title</label>
                  <input type="text" class="form-control" name="Title" required >
                </div>
                <div class="col-7">
                  <label for="" class="form-label">Details </label>
                  <input type="text" class="form-control" name="Details" required >
                </div>
                <div class="col-7">
                  <label for="" class="form-label">Ammount</label>
                  <input type="text" class="form-control" name="Ammount" required >
                </div>
                
                <div class="col-12">
                  <button type="submit" name="PriceSubmit" class="btn btn-primary">Create</button>
                </div>

              </form>
    </div>
</div>
<!--Container Main end-->

<?php
include('includes/footer.php');
?>
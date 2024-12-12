<?php
include('includes/header.php');



?>
<!--Container Main start-->
<div class="container ">
    <div class="custom">
                <h4>Gallery Management</h4>
                <hr>
                <form class="row g-3" method="post"  action="Funcation.php" enctype="multipart/form-data">
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Title</label>
                      <input type="text" class="form-control" name="Title" >
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Description </label>
                      <input type="text" class="form-control" name="Description">
                    </div>
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">category </label>
                      <select id="inputState" class="form-select" name="category">
                        <option selected disabled>Choose...</option>
                        <option>Weddings</option>
                        <option>Portraits</option>
                        <option>Special events</option>
                        <option>Landscape</option>
                      </select>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Image </label>
                            <div class="input-group">
                                <input type="file" name="image" id="image" class="form-control" aria-label="Upload">
                              </div>
                        </div>
                        
                    </div>

                    <div class="col-12">
                      <button type="submit" name="uploadbtn"  class="btn btn-primary">Uploaded</button>
                    </div>
              </form>
    </div>
</div>
<!--Container Main end-->

<?php
include('includes/footer.php');
?>
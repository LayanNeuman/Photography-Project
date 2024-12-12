<?php
include('includes/header.php');

?>


<?php
// Connect to MySQL database (replace with your database credentials)
$conn = new mysqli('localhost', 'root', '', 'malcolmlismore');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve image data from database
$sql = "SELECT * FROM galleryimages";
$result = $conn->query($sql);

// Close database connection
$conn->close();
?>

<!--Container Main start-->
<div class="container ">
    <div class="custom">
                <h4>Gallery Management</h4>
                <hr>
                <div class="row">
                  <div class="col-6 bct">
                    <a href="Gallerygrid.php"><button type="button" class="btn btn-dark ">Add new Images</button></a>
                  </div>
                  <div class="col-3"></div>
                  <div class="col-3"></div>
                </div>

               

                <div class="table">
                                
                          <table class="table table-bordered table-hover">
                            <thead class="table-dark">
                              <tr>
                                <th scope="col-1" class="col-1 text-center">No</th>
                                <th scope="col" class="col-2 text-center">title</th>
                                <th scope="col" class="col-4 text-center">description</th>
                                <th scope="col" class="col-1 text-center">category</th>
                                <th scope="col" class="col-2 text-center">Images</th>
                                <th scope="col" class="col-2 text-center">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                             <?php
                              $no='';
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                      $gid=$row['image_id'];
                                      $no++;
                                      ?>
                                       <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $row['title'];?></td>
                                        <td><?php echo  $row['description'];?></td>
                                        <td><?php echo  $row['category'];?></td>
                                        <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image_data']).'" alt="'.$row['image_name'].'">';?></td>
                                        <td class="act-btn d-flex justify-content-center align-items-center">
                                           <a href="imageview.php?Gid=<?php echo $gid?>" target="_blank" class="view" ><i class="material-icons"  title="view">&#xf1c5;</i></a>
                                           <a href="#" class="edit " ><i class="material-icons " title="Edit">&#xE254;</i></a>
                                           <a href="Gallerydelete.php?Gid=<?php echo $gid?>" class="delete" ><i class="material-icons"  title="Delete">&#xE872;</i></a>
                                        </td>
                                        </tr>
                                    <?php }
                                } else {
                                    echo "No images found.";
                                }
                                ?>
                            </tbody>
                          </table>

                </div>
    </div>
</div>
<!--Container Main end-->

<?php
include('includes/footer.php');
?>
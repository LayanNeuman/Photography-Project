<?php
include('includes/header.php');
$uid="";
?>

<!--Container Main start-->
<div class="container ">
    <div class="custom">
                <h4>User Management</h4>
                <hr>
                <div class="row">
                  <div class="col-6 bct">
                    <a href="./User.php"><button type="button" class="btn btn-dark ">Add new User</button></a>

                  </div>
                  <div class="col-3"></div>
                  <div class="col-3"></div>
                </div>

                <div class="table">
                                
                          <table class="table table-bordered table-hover">
                            <thead class="table-dark">
                              <tr>
                                 <th scope="col" class="col-1 text-center">No</th>
                                <th scope="col" class="col-4 text-center">User Name  </th>
                                <th scope="col" class="col-1 text-center">role </th>
                                <th scope="col" class="col-2 text-center">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php

                                  $connection=mysqli_connect("localhost","root","");
                                  $db=mysqli_select_db($connection,'malcolmlismore');
                                  if(!$connection){
                                    die("Connection faild!".mysqli_connect_error());
                                  }
                                  else{
                                  
                                  }
                                  $no='';

                                  $query = "select * from users";
                                  $query_run=mysqli_query($connection,$query);
                                  while($row=mysqli_fetch_array($query_run))
                                  {
                                    $uid=$row['user_id'];
                                    $no++;
                                 
                              ?>

                              <tr>
                              <td class="text-center"><?php echo $no?></td>
                                <td class="text-center"><?php echo $row['username'];?></td>
                                <td class="text-center"><?php echo $row['role'];?></td>
                                <td class="act-btn d-flex justify-content-center align-items-center">
                                  <a  href="#"class="edit " ><i class="material-icons " title="Edit">&#xE254;</i></a>
                                  <a href="userdelete.php?uid=<?php echo $uid?>"class="delete" ><i class="material-icons"  title="Delete">&#xE872;</i></a>
                                </td>
                              </tr>
                              <?php  } ?>
                       

                            </tbody>
                          </table>
                          

                </div>
    </div>
</div>
<!--Container Main end-->

<?php
include('includes/footer.php');
?>
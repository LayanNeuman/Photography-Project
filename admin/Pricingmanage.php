<?php
include('includes/header.php');
?>
<!--Container Main start-->
<div class="container ">
    <div class="custom">
                <h4>Pricing</h4>
                <hr>
                <div class="row">
                  <div class="col-6 bct">
                  <a href="./Pricecard.php"><button type="button" class="btn btn-dark ">Add  Package</button></a>

                  </div>
                  <div class="col-3"></div>
                  <div class="col-3"></div>
                </div>

               

                <div class="table">
                                
                          <table class="table table-bordered table-hover">
                            <thead class="table-dark">
                              <tr>
                                 <th scope="col" class="col-2 text-center">SID</th>
                                <th scope="col" class="col-2 text-center">service_name </th>
                                <th scope="col" class="col-2 text-center">description</th>
                                <th scope="col" class="col-1 text-center">price </th>
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

                                  $query = "select * from pricing";
                                  $query_run=mysqli_query($connection,$query);
                                  while($row=mysqli_fetch_array($query_run))
                                  {
                                    $Pid=$row['pricing_id'];
                                    $no++;
                                  ?>

                                  <tr>
                                  <td class="text-center"><?php echo $no?></td>
                                  <td class="text-center"><?php echo $row['service_name'];?></td>
                                  <td class="text-center"><?php echo $row['description'];?></td>
                                  <td class="text-center"><?php echo $row['price'];?></td>
                                  <td class="act-btn d-flex justify-content-center align-items-center">
                                  <a  href="#"class="edit " ><i class="material-icons " title="Edit">&#xE254;</i></a>
                                  <a href="Priceedit.php?Pid=<?php echo $Pid?>"class="delete" ><i class="material-icons"  title="Delete">&#xE872;</i></a>
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
<?php
include('includes/header.php');
?>
<!--Container Main start-->
<div class="container ">
    <div class="custom">
                <h4>Enquiry Management</h4>
                <hr>
                <div class="row">
                  <div class="col-6 bct">
                <!--  <button type="button" class="btn btn-dark ">Add new Images</button>-->

                  </div>
                  <div class="col-3"></div>
                  <div class="col-3"></div>
                </div>

               

                <div class="table">
                                
                          <table class="table table-bordered table-hover">
                            <thead class="table-dark">
                              <tr>
                                 <th scope="col" class="col-2 text-center">Booking Date</th>
                                <th scope="col" class="col-1 text-center">name </th>
                                <th scope="col" class="col-1 text-center">phone_number</th>
                                <th scope="col" class="col-2 text-center">event_date</th>
                                <th scope="col" class="col-1 text-center">event_location </th>
                                <th scope="col" class="col-4 text-center">message</th>
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

                                  $query = "select * from enquiries WHERE status='Pending'";
                                  $query_run=mysqli_query($connection,$query);
                                  while($row=mysqli_fetch_array($query_run))
                                  {
                                    $eid=$row['enquiry_id'];
                                    $no++;

                                  ?>

                                  <tr>
                                  <td class="text-center"><?php echo $row['book_date'];?></td>
                                  <td class="text-center"><?php echo $row['name'];?></td>
                                  <td class="text-center"><?php echo $row['phone_number'];?></td>
                                  <td class="text-center"><?php echo $row['event_date'];?></td>
                                  <td class="text-center"><?php echo $row['event_location'];?></td>
                                  <td class="text-center"><?php echo $row['message'];?></td>
                                  <td class="act-btn d-flex justify-content-center align-items-center">
                                  <a  href="Enquiryedit.php?eid=<?php echo $eid?>" class="edit "style="Color:green;" ><i class="material-icons " title="Edit">&#xe5ca;</i></a>
                                  <a href="Enquirydelete.php?eid=<?php echo $eid?>"class="delete" ><i class="material-icons"  title="Delete">&#xe5c9;</i></a>
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
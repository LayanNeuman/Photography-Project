<?php
include('includes/header.php');
?>
<!--Container Main start-->
<div class="container ">
    <div class="custom">
                <h4>Schedule </h4>
                <hr>
                <div class="table">
                                
                          <table class="table table-bordered table-hover">
                            <thead class="table-dark">
                              <tr>
                                 <th scope="col" class="col-2 text-center">Event_Date</th>
                                <th scope="col" class="col-1 text-center">Name </th>
                                <th scope="col" class="col-1 text-center">Phone_number</th>
                                <th scope="col" class="col-1 text-center">Event_location </th>
                                <th scope="col" class="col-4 text-center">message</th>
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

                                  $query = "select * from enquiries WHERE status='Approved'";
                                  $query_run=mysqli_query($connection,$query);
                                  while($row=mysqli_fetch_array($query_run))
                                  {
                                    $eid=$row['enquiry_id'];
                                    $no++;

                                  ?>

                                  <tr>
                                  <td class="text-center"><?php echo $row['event_date'];?></td>
                                  <td class="text-center"><?php echo $row['name'];?></td>
                                  <td class="text-center"><?php echo $row['phone_number'];?></td>
                                  <td class="text-center"><?php echo $row['event_location'];?></td>
                                  <td class="text-center"><?php echo $row['message'];?></td>
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
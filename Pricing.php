
<?php require "index_header.php";?>
 

<div class="price">
        <div class="price-inner">
        <?php
                    $connection=mysqli_connect("localhost","root","");
                    $db=mysqli_select_db($connection,'malcolmlismore');
                    if(!$connection){die("Connection faild!".mysqli_connect_error());}else{}
                    $no='';
                    $query = "select * from pricing";
                    $query_run=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    $Pid=$row['pricing_id'];
                    $title=$row['service_name'];
                    $details=$row['description'];
                    $ammount=$row['price'];
                    $no++;?>
                 <div class="row">
                    <div class="card">
                        <div class="package"><?php echo $title?></div>
                        <div class="description"><?php echo $details ?></div>
                        <div class="amount"><?php echo $ammount?></div>
                    </div>
                </div>
          <?php          } ?>

        </div>
    </div>
    


    <div class="liner"></div>
  
    
<?php require "index_footer.php";?>

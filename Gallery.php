
<?php require "index_header.php";?>
  

<div class="gallery">
        <div class="contant">
            <div class="ghead">
                <h1>featured stories</h1>
            </div>
            <div class="option-cont">
            <div class="option">
                <button>Wedding</button>
                <button>Porrait</button>
                <button>Special</button>
            </div>
            </div>
        </div>
            
            <!---->
            <div class="Galley">
                <div class="inner-gallery">
                    <div class="showcase">
                        <div class="row">
                            <?php
                                    $conn = new mysqli('localhost', 'root', '', 'malcolmlismore');
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);}

                                        $sql = "SELECT image_name, image_data FROM galleryimages";
                                        $result = $conn->query($sql);

                                                                        
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<img class="dynamic-image" src="data:image/jpeg;base64,' . base64_encode($row['image_data']) . '" alt="' . $row['image_name'] . '" style="width: 500px; height: 350px;">';
                                        }
                                    } else {
                                        echo "No images found.";
                                    }
                                    $conn->close();
                                    ?>

                        </div>
                    </div>
                </div>
        </div>

            
        </div>
        
    </div>

    <div class="liner"></div>
  

    
<?php require "index_footer.php";?>

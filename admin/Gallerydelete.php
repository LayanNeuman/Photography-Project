<?php
$conn = new mysqli('localhost', 'root', '', 'malcolmlismore');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Gid=$_GET['Gid'];
$query="DELETE FROM galleryimages WHERE image_id='$Gid'";
if (mysqli_query($conn, $query)){
   // echo '<script>window.alert("Recode delete")</script>';
        echo '<script>location.replace("Gallery Management.php")</script>';
}



?>
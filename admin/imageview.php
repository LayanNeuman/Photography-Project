<?php
// Connect to MySQL database (replace with your database credentials)
$conn = new mysqli('localhost', 'root', '', 'malcolmlismore');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Gid=$_GET['Gid'];
// Retrieve image data from database
$sql = "SELECT image_data FROM galleryimages WHERE image_id ='$Gid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output image
    $row = $result->fetch_assoc();
    header("Content-type: image/jpeg"); // Adjust content type based on your image type
    echo $row['image_data'];
} else {
    echo "No image found.";
}

// Close database connection
$conn->close();
?>

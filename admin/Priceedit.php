<?php

$conn = new mysqli('localhost', 'root', '', 'malcolmlismore');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Pid=$_GET['Pid'];
$query="DELETE FROM pricing WHERE pricing_id ='$Pid'";
if (mysqli_query($conn, $query)){
        echo '<script>location.replace("Pricingmanage.php")</script>';
}
?>
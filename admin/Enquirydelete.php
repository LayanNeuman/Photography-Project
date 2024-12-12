
<?php

$conn = new mysqli('localhost', 'root', '', 'malcolmlismore');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$eid=$_GET['eid'];
$query="DELETE FROM enquiries WHERE enquiry_id='$eid'";
if (mysqli_query($conn, $query)){
    echo '<script>window.alert("Recode delete")</script>';
        echo '<script>location.replace("EnquiryManagement.php")</script>';
}
?>

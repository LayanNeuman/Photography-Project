
<?php

$conn = new mysqli('localhost', 'root', '', 'malcolmlismore');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$eid=$_GET['eid'];
$query="UPDATE  enquiries SET status ='Approved' WHERE enquiry_id='$eid'";
if (mysqli_query($conn, $query)){
        echo '<script>location.replace("EnquiryManagement.php")</script>';
}
?>
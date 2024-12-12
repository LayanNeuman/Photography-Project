<?php

$conn = new mysqli('localhost', 'root', '', 'malcolmlismore');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$uid=$_GET['uid'];
$query="DELETE FROM users WHERE user_id='$uid'";
if (mysqli_query($conn, $query)){
    echo '<script>window.alert("Recode delete")</script>';
        echo '<script>location.replace("User Management.php")</script>';
}
?>
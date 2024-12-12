<?php

$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'malcolmlismore');
if(!$connection){
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['enquiry'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event_date = $_POST['date']; 
    $book_date = date('Y-m-d');
    $event_location = $_POST['location'];
    $message = $_POST['message'];
    $query = "INSERT INTO enquiries (name, email, phone_number, book_date,event_date ,event_location, message, status) VALUES ('$name', '$email', '$phone', '$book_date','$event_date' ,'$event_location', '$message', 'Pending')";
    if (mysqli_query($connection, $query)) {
         echo '<script>location.replace("Enquiry.php")</script>';
    } else {
        echo '<script>window.alert("Error occurred while inserting data.")</script>';
    }
}
?>

<?php
// Include the database connection file
//include 'includes/Connection.php';
?>

<?php

$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'malcolmlismore');
if(!$connection){

}
else{

}

if(isset($_POST['Usersubmit'])){
  $username = $_POST['Username'];
  $password = $_POST['Password'];
  $repassword = $_POST['RePassword'];
  $role = $_POST['Role'];

  $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";


 try {
    if (mysqli_query($connection, $query)) {
        echo '<script>window.alert("Successfully")</script>';
        echo '<script>location.replace("User Management.php")</script>';
    } else {
        echo '<script>window.alert("Error occurred while inserting data.")</script>';
        echo '<script>location.replace("User Management.php")</script>';
    }
} catch (mysqli_sql_exception $e) {
    if(mysqli_errno($connection) == 1062) {
        echo '<script>window.alert("Username already exists. Please choose a different username.")</script>';
        echo '<script>location.replace("User.php")</script>';
      }
      else {
        echo '<script>window.alert("Error occurred while inserting data.")</script>';
        echo '<script>location.replace("User.php")</script>';
      }
}
}


// Gallery managment.

// Check if form is submitted
if(isset($_POST['uploadbtn'])){
    $title=$_POST['Title'];
    $description=$_POST['Description'];
    $category=$_POST['category'];

    // Check if file is uploaded without errors
    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK){
        // Validate file type and size (you can add more validations as needed)
        $allowed_types = array('image/jpeg', 'image/png');
        $max_size = 5 * 1024 * 1024; // 5MB
        
        if(in_array($_FILES['image']['type'], $allowed_types) && $_FILES['image']['size'] <= $max_size){
            // Read the file content
            $image_data = file_get_contents($_FILES['image']['tmp_name']);
            $image_name = $_FILES['image']['name']; // Get the original name of the image
            
            // Connect to MySQL database (replace with your database credentials)
            $conn = new mysqli('localhost', 'root', '', 'malcolmlismore');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Insert image data into database
            $stmt = $conn->prepare("INSERT INTO galleryimages (Title,Description,category,image_name, image_data) VALUES ('$title','$description','$category',?, ?)");
            $stmt->bind_param("ss", $image_name, $image_data);
            $stmt->execute();

            // Close statement and database connection
            $stmt->close();
            $conn->close();

           // echo "Image uploaded successfully.";
            echo '<script>location.replace("Gallery Management.php")</script>';
        } else {
            echo "Invalid file. Please upload a JPEG or PNG image (max 5MB).";
        }
    } else {
        echo "Error uploading file.";
    }
}

// Price
if(isset($_POST['PriceSubmit'])){

    $Title = $_POST['Title'];
    $Details = $_POST['Details'];
    $Ammount = $_POST['Ammount'];

    $query ="INSERT INTO pricing (service_name, description, price) VALUES ('$Title','$Details','$Ammount')" ;

    if (mysqli_query($connection, $query)) {
         echo '<script>location.replace("Pricingmanage.php")</script>';
    } else {
        echo '<script>window.alert("Error occurred while inserting data.")</script>';
    }
}
?>

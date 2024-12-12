
<?php
session_start();
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'malcolmlismore');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_num_rows($query_run) > 0){
        $_SESSION['username'] = $username;
        header('Location:Dashboard.php');
    }
    else{
        header('Location:index.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="./camera-100.png" alt="Company Logo">
        </div>
        <h2>Login</h2>

        <form action="index.php" method="POST"> <!-- Modified action attribute -->
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Login</button> <!-- Added name attribute -->
            </div>
        </form>
    </div>
</body>
</html>


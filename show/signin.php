<?php
require('connection.php');

if(isset($_POST['register'])) {
    $user_exist_query = "SELECT * FROM `registered` WHERE `username`='{$_POST['username']}' OR `email`= '{$_POST['email']}'";
    $result = mysqli_query($con, $user_exist_query);

    if($result) {
        if(mysqli_num_rows($result) > 0) {
            $result_fetch = mysqli_fetch_assoc($result);
            if(!empty($result_fetch['username'])) {
                echo "<script>alert('{$result_fetch['username']} - Username already taken');</script>";
                echo "<script>window.location.href='signin.php';</script>";
            } elseif(!empty($result_fetch['email'])) {
                echo "<script>alert('{$result_fetch['email']} - Email already registered');</script>";
                echo "<script>window.location.href='signin.php';</script>";
            }
        } else {
            $fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];


           $password=password_hash($password, PASSWORD_BCRYPT);
            $query = "INSERT INTO `registered`(`fullname`, `username`, `email`, `password`) VALUES ('$fullname','$username','$email','$password')";
            if(mysqli_query($con,$query)) {
                echo "<script>alert('Registration successful');</script>";
                echo "<script>window.location.href='signin.php';</script>";
            } else {
                echo "<script>alert('Cannot run query');</script>";
                echo "<script>window.location.href='signin.php';</script>";
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
 <div class="signup-box">
    <h1>Sign Up</h1>
    <h4>It's free and only takes a minute</h4>
    <form action="signin.php" method="POST" >
        <label>Full Name</label>
        <input type="text" placeholder="fullname" name="fullname">
        <label>Username</label>
        <input type="text" placeholder="Username" name="username">
        <label>E-mail</label>
        <input type="email" placeholder="E-mail" name="email" >
        <label>password</label>
        <input type="password" name="password" >
        <button type="submit" name="register">Submit</button>
    </form>
    
    <p>By clicking the Sign Up button, you agree to our<br>
        <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
 <p class="para-2">Already have an account? <a href="login.php">Login here</a></p> 
</div>
</body>
</html>

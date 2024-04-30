<?php
session_start();
require('connection.php');

if(isset($_POST['login'])) {
    $email_username = $_POST['email_username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `registered` WHERE `email`='$email_username' OR `username`='$email_username'";
    $result = mysqli_query($con, $query);

    if($result) {
        if(mysqli_num_rows($result) == 1) {
            $result_fetch = mysqli_fetch_assoc($result);
            if(password_verify($password, $result_fetch['password'])) {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $result_fetch['username'];
                header('Location: index1.php');
                exit;
            } else {
                echo "<script>alert('Incorrect Password');</script>";
            }
        } else {
            echo "<script>alert('Email or Username not registered');</script>";
        }
    } else {
        echo "<script>alert('Cannot run query');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show Time</title>
    <link rel="stylesheet" href="CAd.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<header class="header">
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="index.php">Movies</a>
        <a href="series.html">HOllywoodMovies</a>
         <a href="anime.html">animeMovies</a>
          <a href="aboutus.html">About</a>
    </nav>
    <form action="" class="search-bar">
       <input type="text" placeholder="Search...">
       <button><i class='bx bx-search'></i></button>
    </form>
</header>

<div class="background"></div>
<div class="container">
    <div class="item">
        <h2 class="logo"><i class='bx bxs-movie'></i>Show Time</h2>
        <div class="text-item">
            <h2>Welcome! <br><span>To Our Website</span></h2>
            <p>"From classics to blockbusters, your cinematic journey begins here."</p>
            <div class="social-icon">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-youtube'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
        </div>
    </div>
    <div class="login-section">
        <div class="form-box login">
            <form method="POST" action="index.php">
                <h2>Sign In</h2>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="text" name="email_username" required>
                    <label>Email or Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-password">
                    <label><input type="checkbox" name="remember">Remember Me</label>
                    <a href="#">Forget Password</a>
                </div>
                <button type="submit" name="login" class="btn">Login In</button>
                <div class="create-account">
                    <p>Create A New Account? <a href="signin.php" class="register-link">Sign Up</a></p>
                </div>
            </form>
        </div>
        <!-- Other form boxes for sign up -->
    </div>
</div>
<script src="javas.js"></script>
</body>
</html>

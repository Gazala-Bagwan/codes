<?php
require('connection.php');
if(isset($_POST['register']))
{
    $query = "SELECT * FROM `registered` WHERE `email`='{$_POST['email_username']}'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) == 1)
    {
        // User exists, proceed with sending reset link
        $reset_token = bin2hex(random_bytes(16));
        date_default_timezone_set('Asia/kolkata');
        $date = date("Y-m-d");
        $query = "UPDATE `registered` SET `resettoken`='$reset_token', `resettokenexpire`='$date' WHERE `email`='{$_POST['email_username']}'";
        if(mysqli_query($con, $query))
        {
            echo "<script>alert('Password reset link sent to email');</script>";
            echo "<script>window.location.href='resetPassword.php';</script>";
        }
        else
        {
            echo "<script>alert('Error occurred while updating data');</script>";
            echo "<script>window.location.href='resetPassword.php';</script>";
        }
    }
    else
    {
        // User not found, show error message
        echo "<script>alert('User not found');</script>";
        echo "<script>window.location.href='resetPassword.php';</script>";
    }
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="style1.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="login-box">
        <h1>Forgot Password</h1>
        <form method="POST" action="resetPassword.php">
            <label>Email</label>
            <input type="email" placeholder="E-mail or username" name="email_username">
            <button type="submit" name="register">Submit</button>
        </form>
        <p>Remembered your password? <a href="signin.php">Login here</a></p>
    </div>
</body>
</html>

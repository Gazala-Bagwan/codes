<?php
require('connection.php');
session_start();
if(isset($_POST['register']))
{
    
    $query = "SELECT * FROM `registered` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
    $result= mysqli_query($con,$query);
    if($result)
    {
        if(mysqli_num_rows($result)==1)
    {
         $result_fetch=mysqli_fetch_assoc($result);
         if(password_verify($_POST['password'],$result_fetch['password']))
         {
        $_SESSION['logged_in']=true;
        $_SESSION['username']=$result_fetch['username'];
        header('location:index1.php');
         }
         else{
            echo "<script>alert('incorrect Password');</script>";
           echo "<script>window.location.href='index1.php';</script>";

         }
    }
    else 
    {
        echo "<script>alert('Email or username not registered');</script>";
        echo "<script>window.location.href='index1.php';</script>";
   
    }
}
    else
    {
        echo "<script>alert('Cannot run query');</script>";
        echo "<script>window.location.href='index1.php';</script>";

}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-box">
        <h1>Login</h1>
        <form method="POST" action="login.php">
            <label>Email</label>
            <input type="email" placeholder="E-mail or username" name="email_username">
            <label>Password</label>
            <input type="password" placeholder="Password" name="password">
            <button type="submit" name="register">Submit</button>
            <p><a href="resetPassword.php">Forgot your password?</a></p>
        </form>
        <p>Don't have an account? <a href="index1.php">Sign up here</a></p>
    </div>
</body>
</html>

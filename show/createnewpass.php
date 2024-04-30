<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Password</title>
    <link rel="stylesheet" href="style1.css"> <!-- Link to your existing CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-box">
        <h1>Create New Password</h1>
        <form method="POST" class="login-form">
            <label>New Password</label>
            <input type="password" name="new_pass" required>
            <label>Confirm Password</label>
            <input type="password" name="confirm_pass" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>Back to <a href="login.php">Login</a></p>
    </div>
</body>
</html>

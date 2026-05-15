<?php
session_start();
include 'config.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        $user = mysqli_fetch_assoc($result);

        if(password_verify($password, $user['password'])){

            $_SESSION['user'] = $user['username'];

            header("Location: dashboard.php");

        } else {
            echo "<text>Incorrect Password</text>";
        }

    } else {
        echo "<text>User not found</text>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="POST" class="form">
        <div>        </div>
        <input type="email" name="email" placeholder="Email" required class="email" >
        <input type="password" name="password" placeholder="Password" required class="password">

        <div class="space">
            <button type="submit" name="login" class="login-btn">Login</button>
            <a href="register.php">Register</a>
        </div>
    </form>
</body>
</html>
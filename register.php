<?php
include 'config.php';

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(username, email, password)
            VALUES('$username', '$email', '$password')";

    if(mysqli_query($conn, $sql)){
        echo "<text>Registration Successful</text>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    
    <form method="POST" class="form">
        <div></div>
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <div class="space">
            <button type="submit" name="register" class="login-btn">Register</button>
            <a href="login.php">Login</a>
        </div>
    </form>

</body>
</html>
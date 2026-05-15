<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    
</head>
<body >
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color:#0f0f1a ;
        color: #f5f5f5;
        }
        .control{
        height: 300px;
        width: 350px;
        position: relative;
        
        z-index: 12;
        bottom:10px;
        display: flex;
    }
    .con{
        position: absolute;
        bottom: 150px;
        right: 0px;
        font-size: large;
        color: #f5f5f5;
        text-decoration: dotted;
}
    </style>
<div class="control">
    <h1>Welcome <?php echo $_SESSION['user']; ?></h1>

    <a href="logout.php" class="con">Logout</a>
</div>    

</body>
</html>
<?php
require_once 'data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="./icons/video-camera.png">
    <link rel="stylesheet" href="./CSS/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<button class="login" onclick="location.href='index.php'">back to main page</button>

<body>
    <form action="registerview.php" method="POST">
        <input type="text" name="adminname" placeholder="username"> <br> <br>
        <input type="password" name="adminpassword" placeholder="passwort"> <br> <br>
        <button type="submit" name="submit">login</button>
    </form>

</body>

</html>
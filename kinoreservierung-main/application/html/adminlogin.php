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
    <title>Login</title>
</head>

<button id="back" class="login" onclick="location.href='index.php'">back to main page</button>

<body>
    <form action="adminlogin.php" method="POST">
        <div id="all">
            <input id="one" type="text" name="adminname" placeholder="username"> <br> <br>
            <input id="two" type="password" name="adminpassword" placeholder="password"> <br> <br>
            <button id="three" type="submit" name="submit">login</button>
        </div>
    </form>

</body>

</html>
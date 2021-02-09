<?php
require_once 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" sizes="32x32" href="./icons/video-camera.png">
        <title>Homepage</title>
    </head>
    <body>

        <form action="index.php" method="POST">
                <input type="text" name="username" placeholder="username"> <br> <br>
                <input type="text" name="email" placeholder="email"> <br> <br>
                <button type="submit" name="button">register</button>
        </form>

        <form action="index.php" method="POST">
                <input type="text" name="adminname" placeholder="username"> <br> <br>
                <input type="password" name="adminpassword" placeholder="passwort"> <br> <br>
                <button type="submit" name="button">login</button>
        </form>

    </body>
</html>
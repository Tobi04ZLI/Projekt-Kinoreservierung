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

<style>
    form {
        margin-top: 340px;
        /*margin-left: 850px;*/
        text-align: center;
    }
</style>

<body>

    <button class="login" onclick="location.href='index.php'">back to main page</button>

    <form action="registerview.php" method="POST">
        <input type="text" name="username" placeholder="username"> <br> <br>
        <input type="text" name="email" placeholder="email"> <br> <br>
        <button type="submit" name="button">register</button>
    </form>

</body>

</html>
<?php
require_once ("data.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="./icons/video-camera.png">
    <link rel="stylesheet" href="./CSS/adminview.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <button id="back" class="login" onclick="location.href='index.php'">back to main page</button>

    <form id="all" action="adminview.php" method="POST">
        <input id="one" type="text" name="moviename" placeholder="moviename">
        <input id="two" type="text" name="duration" placeholder="duration">
        <button id="three" type="submit" name="button">Add Film</button>
    </form>
</body>

</html>
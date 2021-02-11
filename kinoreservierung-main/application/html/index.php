<?php
require_once 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="./icons/video-camera.png">
    <link rel="stylesheet" href="./CSS/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <div id="login">
    <button class="login" onclick="location.href='adminlogin.php'">log in as admin</button>
    </div>

    <div id="one">
    <h1><a href="Movie1.php">Movie1</a></h1>
    </div>

    <div id="two">
    <h1><a href="Movie2.php">Movie2</a></h1>
    </div>
    
    <div id="three">
    <h1><a href="Movie3.php">Movie3</a></h1>
    </div>

    <div id="four">
    <button class="login" onclick="location.href='registerview.php'">register</button>
    </div>
</body>

</html>
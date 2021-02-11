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
    <title>Mainpage</title>
</head>

<body>
    <button id="login" class="login" onclick="location.href='adminlogin.php'">log in as admin</button> 

    <button id="register" class="login" onclick="location.href='registerview.php'">register</button>

    <h1><a id="one" href="Movie1.php">Movie1</a></h1>

    <h1><a id="two" href="Movie2.php">Movie2</a></h1>
    
    <h1><a id="three" href="Movie3.php">Movie3</a></h1>
</body>

</html>
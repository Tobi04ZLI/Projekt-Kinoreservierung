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
        <!--<div class="input"> -->

        <div class="username">
            <label for="username">Username</label>
            <input id="username" name="username" />
        </div>

        <div class="email">
            <label for="email">Email</label>
            <input id="email" name="email" />
        </div>

            <!-- <input type="text" name="username" placeholder="username"> <br> <br>
            <input type="text" name="email" placeholder="email"> <br> <br> -->
            <button type="submit" name="submit">
                register
            </button>
        <!-- </div> -->
    </form>

    </body>
</html>

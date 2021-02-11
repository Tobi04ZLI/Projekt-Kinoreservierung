<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="./icons/video-camera.png">
    <link rel="stylesheet" href="./CSS/movie.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button id="back" class="login" onclick="location.href='index.php'">back to main page</button>

    <form id="all" action="Movie3.php" method="POST">
        <div id="one">
            <label for="name">Name</label> <br>
            <input type="text" name="username">
        </div>

        <div id="two">
            <label for="email">Email</label> <br>
            <input type="text" name="email">
        </div>

        <div id="three">
            <label for="seat">Seat</label> <br>
            <input type="text" name="seat">
        </div>

        <div id="four">
            <button type="submit" name="button">Reserve</button>
        </div>

    </form>
</body>

</html>
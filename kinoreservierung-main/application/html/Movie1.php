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
    <button class="login" onclick="location.href='index.php'">back to main page</button>
    
    <form action="Moive1.php" method="POST">
        <div>
            <label for="name">Name</label>
            <label for="email">Email</label>
            <label for="seat">Seat</label><br>
            <input type="text" name="username">
            <input type="text" name="email">
            <input type="text" name="seat">
        </div>
    </form>
</body>
</html>
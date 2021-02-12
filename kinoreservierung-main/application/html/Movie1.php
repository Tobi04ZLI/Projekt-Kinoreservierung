<?php
require_once ("moviedata.php");

echo "<!DOCTYPE html>
<html lang='en'>";
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="./icons/video-camera.png">
    <link rel="stylesheet" href="./CSS/movie.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Battelship</title>
</head>

<body>
    <button id="back" class="login" onclick="location.href='index.php'">back to main page</button>
    <div id="seats" class="flex1">
        <?php
            $sql = "SELECT seatid, blocked FROM cinemaroomone";
            $result = $connection->query($sql);
            $seatsFromDatabase = $result->fetch_all(MYSQLI_ASSOC);

            foreach ($seatsFromDatabase as $seat) {
                $blocked = $seat['blocked'];
                $seatsid = $seat['seatid'];

                if($blocked){
                    echo("<img class='seat' src='./pictures/armchair.svg' alt='Cinemachair'>");
                    echo("<t style='color:red;' class='con'>$seatsid</t>");
                }else{
                    echo("<img class='seat' src='./pictures/armchair.svg' alt='Cinemachair'>");
                    echo("<t style='color:white;' class='con'>$seatsid</t>");
                
                }


                if ($seatsid % 10 == 0){
                    echo "<br>";
                } 
            }
        ?>
    </div>


    <form id="all" action="Movie1.php" method="POST">
            <input id="one" type="text" name="username" placeholder="username">
            <input id="two" type="text" name="email" placeholder="email">
            <input id="three" type="text" name="seat" placeholder="seat">
            <button id="four" type="submit" name="button">Reserve</button>
    </form>
</body>

</html>
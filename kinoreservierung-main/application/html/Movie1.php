<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="./icons/video-camera.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button class="login" onclick="location.href='index.php'">back to main page</button>
    <?php
    $sql = "SELECT * FROM movieone";
    $result = $connection->query($sql);
    $movieFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($movieFromDatabase as $movie) {
        ($movie);
        $rowoneseatone = $movie['rowoneseatone'];
        $rowoneseattwo = $movie['rowoneseattwo'];
        $rowoneseatthree = $movie['rowoneseatthree'];
        $rowoneseatfour = $movie['rowoneseatfour'];
        $rowoneseatfive = $movie['rowoneseatfive'];
        $rowoneseatsix = $movie['rowoneseatsix'];
        $rowoneseatseven = $movie['rowoneseatseven'];
        $rowoneseateight = $movie['rowoneseateight'];
        $rowoneseatnine = $movie['rowoneseatnine'];
        $rowoneseatten = $movie['rowoneseatten'];
        $rowtwoseatone = $movie['rowtwoseatone'];
        $rowtwoseattwo = $movie['rowtwoseattwo'];
        $rowtwoseatthree = $movie['rowtwoseatthree'];
        $rowtwoseatfour = $movie['rowtwoseatfour'];
        $rowtwoseatfive = $movie['rowtwoseatfive'];
        $rowtwoseatsix = $movie['rowtwoseatsix'];
        $rowtwoseatseven = $movie['rowtwoseatseven'];
        $rowtwoseateight = $movie['rowtwoseateight'];
        $rowtwoseatnine = $movie['rowtwoseatnine'];
        $rowtwoseatten = $movie['rowtwoseatten'];
        $rowthreeseatone = $movie['rowthreeseatone'];
        $rowthreeseattwo = $movie['rowthreeseattwo'];
        $rowthreeseatthree = $movie['rowthreeseatthree'];
        $rowthreeseatfour = $movie['rowthreeseatfour'];
        $rowthreeseatfive = $movie['rowthreeseatfive'];
        $rowthreeseatsix = $movie['rowthreeseatsix'];
        $rowthreeseatseven = $movie['rowthreeseatseven'];
        $rowthreeseateight = $movie['rowthreeseateight'];
        $rowthreeseatnine = $movie['rowthreeseatnine'];
        $rowthreeseatten = $movie['rowthreeseatten'];
        $rowfourseatone = $movie['rowfourseatone'];
        $rowfourseattwo = $movie['rowfourseattwo'];
        $rowfourseatthree = $movie['rowfourseatthree'];
        $rowfourseatfour = $movie['rowfourseatfour'];
        $rowfourseatfive = $movie['rowfourseatfive'];
        $rowfourseatsix = $movie['rowfourseatsix'];
        $rowfourseatseven = $movie['rowfourseatseven'];
        $rowfourseateight = $movie['rowfourseateight'];
        $rowfourseatnine = $movie['rowfourseatnine'];
        $rowfourseatten = $movie['rowfourseatten'];
        $rowfiveseatone = $movie['rowfiveseatone'];
        $rowfiveseattwo = $movie['rowfiveseattwo'];
        $rowfiveseatthree = $movie['rowfiveseatthree'];
        $rowfiveseatfour = $movie['rowfiveseatfour'];
        $rowfiveseatfive = $movie['rowfiveseatfive'];
        $rowfiveseatsix = $movie['rowfiveseatsix'];
        $rowfiveseatseven = $movie['rowfiveseatseven'];
        $rowfiveseateight = $movie['rowfiveseateight'];
        $rowfiveseatnine = $movie['rowfiveseatnine'];
        $rowfiveseatten = $movie['rowfiveseatten'];
        $rowsixseatone = $movie['rowsixseatone'];
        $rowsixseattwo = $movie['rowsixseattwo'];
        $rowsixseatthree = $movie['rowsixseatthree'];
        $rowsixseatfour = $movie['rowsixseatfour'];
        $rowsixseatfive = $movie['rowsixseatfive'];
        $rowsixseatsix = $movie['rowsixseatsix'];
        $rowsixseatseven = $movie['rowsixseatseven'];
        $rowsixseateight = $movie['rowsixseateight'];
        $rowsixseatnine = $movie['rowsixseatnine'];
        $rowsixseatten = $movie['rowsixseatten'];
        $rowsevenseatone = $movie['rowsevenseatone'];
        $rowsevenseattwo = $movie['rowsevenseattwo'];
        $rowsevenseatthree = $movie['rowsevenseatthree'];
        $rowsevenseatfour = $movie['rowsevenseatfour'];
        $rowsevenseatfive = $movie['rowsevenseatfive'];
        $rowsevenseatsix = $movie['rowsevenseatsix'];
        $rowsevenseatseven = $movie['rowsevenseatseven'];
        $rowsevenseateight = $movie['rowsevenseateight'];
        $rowsevenseatnine = $movie['rowsevenseatnine'];
        $rowsevenseatten = $movie['rowsevenseatten'];
        $roweightseatone = $movie['roweightseatone'];
        $roweightseattwo = $movie['roweightseattwo'];
        $roweightseatthree = $movie['roweightseatthree'];
        $roweightseatfour = $movie['roweightseatfour'];
        $roweightseatfive = $movie['roweightseatfive'];
        $roweightseatsix = $movie['roweightseatsix'];
        $roweightseatseven = $movie['roweightseatseven'];
        $roweightseateight = $movie['roweightseateight'];
        $roweightseatnine = $movie['roweightseatnine'];
        $roweightseatten = $movie['roweightseatten'];
        $rownineseatone = $movie['rownineseatone'];
        $rownineseattwo = $movie['rownineseattwo'];
        $rownineseatthree = $movie['rownineseatthree'];
        $$rownineseatfour = $movie['rownineseatfour'];
        $rownineseatfive = $movie['rownineseatfive'];
        $rownineseatsix = $movie['rownineseatsix'];
        $rownineseatseven = $movie['rownineseatseven'];
        $rownineseateight = $movie['rownineseateight'];
        $rownineseatnine = $movie['rownineseatnine'];
        $rownineseatten = $movie['rownineseatten'];
        $rowtenseatone = $movie['rowtenseatone'];
        $rowtenseattwo = $movie['rowtenseattwo'];
        $rowtenseatthree = $movie['rowtenseatthree'];
        $rowtenseatfour = $movie['rowtenseatfour'];
        $rowtenseatfive = $movie['rowtenseatfive'];
        $rowtenseatsix = $movie['rowtenseatsix'];
        $rowtenseatseven = $movie['rowtenseatseven'];
        $rowtenseateight = $movie['rowtenseateight'];
        $rowtenseatnine = $movie['rowtenseatnine'];
        $rowtenseatten = $movie['rowtenseatten'];
        if($username == $usrname && $email == $mail){
            echo "Please Login, dies Account already exists";
        } else {
            $query = "INSERT INTO users (username, email) VALUES ('$username', '$email');";
            $result = $connection->query($query);

            if (!$result) {
                die($connection->error);
            }
            
            if ($connection->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
            }
            
            $connection->close();
            header("Location: registerview.php");
        }
    }
    ?>
</body>
</html>
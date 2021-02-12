<?php
require_once ("database.php");

class Verwaltung {

    public $moviename;
    public $duration;

    public function __constructor($moviename, $duration){

        $this->moviename = $moviename;
        $this->duration = $duration;
    }

    public function create($connection){
        if(isset($_POST["button"])){
            $moviename = $_POST['moviename'];
            $duration = $_POST['duration'];

            $found = 0;

            $sql = "SELECT moviename, duration FROM movie";
            $result = $connection->query($sql);
            $moviesFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($moviesFromDatabase as $movies){
                ($movies);
                $movi = $movies['moviename'];
                $durat = $movies['duration'];
                if($moviename == $movi && $duration == $durat){
                    $found = 1;
                }
            }
            if($found == 1){
                echo "This Film already exist";
                header("Location: adminview.php");
            } else{
                echo "Tobi can't code";
                $query = "INSERT INTO movie (moviename, duration) VALUES ('$moviename', '$duration');";
                $queryed = $connection->query($query);

                if (!$result) {
                    die($connection->error);
                }
                
                if ($connection->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $connection->error;
                }
                
                $connection->close();
                header("Location: adminview.php");
            } 
        }
    }
}
?>
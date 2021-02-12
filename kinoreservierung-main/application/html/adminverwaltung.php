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

            $sql = "SELECT moviename, duration FROM movie";
            $result = $connection->query($sql);
            $moviesFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($moviesFromDatabase as $movies){
                ($movies);
                $movi = $movies['username'];
                $durat = $movies['email'];
                if($moviename == $movi && $duration == $durat){
                    echo "Please Login, dies Account already exists";
                } else{
                    $query = "INSERT INTO users (username, email) VALUES ('$moviename', '$duration');";
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
                    header("Location: adminverwaltung.php");
                }        
            }
        }
    }
}
?>
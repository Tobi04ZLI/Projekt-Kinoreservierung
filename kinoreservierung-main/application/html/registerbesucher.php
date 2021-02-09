


<?php
require_once "database.php";
class register{

    public $username;
    public $pwd;

    public function __constructor($username, $pwd){

        $this->username = $username;
        $this->pwd = $pwd;
    }

    public function create($connection){
        if(isset($_POST["button"])){
            $username = $_POST['username'];
            $pwd = $_POST['pwd'];

            $query = "INSERT INTO users (username, password) VALUES ('$username', '$pwd');";
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
            header("Location: registerbesucher.php");
        }
    }
}
?>

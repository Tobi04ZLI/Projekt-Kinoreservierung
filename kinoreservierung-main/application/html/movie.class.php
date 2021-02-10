<?php
require_once ("database.php");

class reserv{

    public $username;
    public $email;
    public $seat;

    public function __constructor($username, $email, $seat){

        $this->username = $username;
        $this->email = $email;
        $this->seat = $seat;
    }

    public function reserved($connection){
        if(isset($_POST["button"])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $seat = $_POST['seat'];

            $sql = "SELECT * FROM users";
            $result = $connection->query($sql);
            $usrsFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($usrsFromDatabase as $usrs) {
                ($usrs);
                $usrname = $usrs['username'];
                $mail = $usrs['email'];
                if($username != $usrname && $email != $mail){
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
                    
                    $insert = "INSERT INTO cinemaroomone (usersid, seatid) VALUES ('$sql', '$seat');";
                    $connection->close();
                    header("Location: Movie1.php");
                }else {
                    $sql = "SELECT usersid FROM users WHERE $username = 'username' AND $email = 'email';";
                    $result = $connection->query($sql);
        
                    if (!$result) {
                        die($connection->error);
                    }
                    
                    if ($connection->query($sql) === TRUE) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $connection->error;
                    }
                    $query = "INSERT INTO cinemaroomone (usersid, seatid) VALUES ('$sql', '$seat');";
        
                    $connection->close();
                    header("Location: Movie1.php");
                }
            }
        }
    }
}

?>
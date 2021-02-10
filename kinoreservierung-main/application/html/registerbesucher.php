<?php
require_once ("database.php");
class register{

    public $username;
    public $email;

    public function __constructor($username, $email){

        $this->username = $username;
        $this->email = $email;
    }

    public function create($connection){
        /*if(isset($_POST["button"])){
            $username = $_POST['username'];
            $email = $_POST['email'];

            $sql = "SELECT username, email FROM users";
            $result = $connection->query($sql);
            $usrsFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($usrsFromDatabase as $usrs){
                ($usrs);
                $usrname = $usrs['username'];
                $mail = $usrs['email'];
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
        }*/
        if(isset($_POST["button"])){
            $username = $_POST['username'];
            $email = $_POST['email'];

            $sql = "SELECT username, email FROM users";
            $result = $connection->query($sql);
            $usrsFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($usrsFromDatabase as $usrs){
                ($usrs);
                $usrname = $usrs['username'];
                $mail = $usrs['email'];
                if($username == $usrname && $email == $mail){
                    echo "Please Login, dies Account already exists";
                } else{
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
        }
    }
}
?>
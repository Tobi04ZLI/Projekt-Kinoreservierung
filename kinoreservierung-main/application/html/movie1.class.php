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
                    $select = "SELECT * FROM users;";
                    $selected = $connection->query($select);
                    $usrsFromDatabase = $seleected->fetch_all(MYSQLI_ASSOC);
                    foreach ($usrsFromDatabase as $usrs) {
                        ($usrs);
                        $usrname = $usrs['username'];
                        $mail = $usrs['email'];
                        $usersid = $usrs['usersid'];
                        var_dump($usersid);
                        if($username == $usrname && $email == $mail){
                            
                            $query = "INSERT INTO cinemaroomone (usersid, seatid, movieid) VALUES ('$usersid', '$seat', '1');";
                            $result = $connection->query($query);
                            if (!$result) {
                                die($connection->error);
                            }
                            
                            if ($connection->query($sql) == TRUE) {
                                echo "New record created successfully";
                            } else {
                                echo "Error: " . $sql . "<br>" . $connection->error;
                            }
                            $connection->close();
                            //header("Location: Movie1.php");
                        }
                    }
                }else {
                    $sql = "SELECT * FROM users;";
                    $result = $connection->query($sql);
                    $usrsFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
                    foreach ($usrsFromDatabase as $usrs) {
                        ($usrs);
                        $usrname = $usrs['username'];
                        $mail = $usrs['email'];
                        $users = $usrs['usersid'];
                        var_dump($users);
                        if($username == $usrname && $email == $mail){
                            
                            $query = "INSERT INTO `cinemaroomone` (`usersid`, `seatid`, `movieid`) VALUES ('$users', '$seat', '1');";
                            $result = $connection->query($query);
                            if (!$result) {
                                die($connection->error);
                            }
                            
                            if ($connection->query($sql) == TRUE) {
                                echo "connection succesfull";
                            } else {
                                echo "Error: " . $sql . "<br>" . $connection->error;
                            }
                            $connection->close();
                            //header("Location: Movie1.php");
                        }
                    }
                }
            }
        }
    }
}

?>
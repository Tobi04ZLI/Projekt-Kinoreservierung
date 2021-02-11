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
                        if($username == $usrname && $email == $mail){
                            $block = "SELECT blocked, seatid FROM `cinemaroomone`";
                            $result = $connection->query($block);
                            $seatsFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
                            foreach ($seatsFromDatabase as $seats) {
                                ($seats);
                                $blocked = $seats['blocked'];
                                $seatsid = $seats['seatid'];
                                if($seat == $seatsid){
                                    if($blocked == 0){
                                        $query = "UPDATE `cinemaroomone` SET `movieid` = '1', `usersid` = '$users', `blocked` = '1' WHERE `seatid` = $seat;";
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
                                        header("Location: Movie1.php");
                                    }else{
                                        echo "This seat is already reserved";
                                        $connection->close();
                                        header("Location: Movie1.php");
                                    }
                                }
                            }
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
                        if($username == $usrname && $email == $mail){
                            $block = "SELECT blocked, seatid FROM `cinemaroomone`";
                            $result = $connection->query($block);
                            $seatsFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
                            foreach ($seatsFromDatabase as $seats) {
                                ($seats);
                                $blocked = $seats['blocked'];
                                $seatsid = $seats['seatid'];
                                if($seat == $seatsid){
                                    if($blocked == 0){
                                        $query = "UPDATE `cinemaroomone` SET `usersid` = '$users', `blocked` = '1' WHERE `seatid` = '$seat';";
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
                                    }else{
                                        echo "This seat is already reserved";
                                        $connection->close();
                                        //header("Location: Movie1.php");
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
?>
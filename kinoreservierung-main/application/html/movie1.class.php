<?php
require_once ("database.php");

//To insert all seats in to cinema
/*
$num = 1;
                while($num < 101){
                    $sql = "INSERT INTO cinemaroomone (movieid, usersid, seatid, blocked) VALUES ('1', NULL, '$num', '0')";
                    $result = $connection->query($sql);
                    $num++;
                }
*/

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
            
            $sql = "SELECT username, email FROM users WHERE username = '$username' AND email = '$email'";
            $result = $connection->query($sql);

            $num = mysqli_num_rows($result);

            if($num > 0){
                $sql = "SELECT * FROM users;";
                $result = $connection->query($sql);
                $usrsFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
                foreach ($usrsFromDatabase as $usrs) {
                    ($usrs);
                    $usrname = $usrs['username'];
                    $mail = $usrs['email'];
                    $users = $usrs['usersid'];
                    if($username == $usrname && $email == $mail){
                        $block = "SELECT blocked, seatid FROM cinemaroomone WHERE movieid = '1'";
                        $result = $connection->query($block);
                        $seatsFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
                        foreach ($seatsFromDatabase as $seats) {
                            ($seats);
                            $blocked = $seats['blocked'];
                            $seatsid = $seats['seatid'];
                            if($seat == $seatsid){
                                if($blocked == 0){
                                    echo "i still work";
                                    $query = "UPDATE cinemaroomone SET usersid = '$users', blocked = '1' WHERE seatid = '$seat'";
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
            }else{
                $query = "INSERT INTO users (username, email) VALUES ('$username', '$email')";
                $result = $connection->query($query);
                $select = "SELECT * FROM users;";
                $selected = $connection->query($select);
                $selectedFromDatabase = $selected->fetch_all(MYSQLI_ASSOC);
                foreach ($selectedFromDatabase as $usrs) {
                    ($usrs);
                    $usrname = $usrs['username'];
                    $mail = $usrs['email'];
                    $users = $usrs['usersid'];
                    if($username == $usrname && $email == $mail){
                        $block = "SELECT blocked, seatid FROM cinemaroomone WHERE movieid = '1'";
                        $result = $connection->query($block);
                        $seatsFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
                        foreach ($seatsFromDatabase as $seats) {
                            ($seats);
                            $blocked = $seats['blocked'];
                            $seatsid = $seats['seatid'];
                            if($seat == $seatsid){
                                if($blocked == 0){
                                    echo "i still work";
                                    $query = "UPDATE cinemaroomone SET usersid = '$users', blocked = '1' WHERE seatid = '$seat'";
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

            }
        }
    }

    public function display($connection){
        $sql = "SELECT seatid, blocked FROM cinemaroomone";
        $result = $connection->query($result);
        $seatsFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($seatsFromDatabase as $seats) {
            ($seats);
            $blocked = $seats['blocked'];
            $seatsid = $seats['seatid'];
            if($blocked == 0){
                $res = TRUE;
            }else{
                $res = FALSE;
            }
        }
        require_once ("Movie1.php");
        header("Location: Movie1.php");
    }
}
?> 
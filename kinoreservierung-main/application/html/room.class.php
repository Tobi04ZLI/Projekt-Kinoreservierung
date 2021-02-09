<?php
require_once ("database.php");

class reserved{

    public $username;

    public function reserv($connection, $username){

        $sql = "SELECT username FROM users";
        $result = $connection->query($sql);
        $usrsFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($usrsFromDatabase as $usrs) {
            ($usrs);
            $usrname = $usrs['username'];
            if($username == $usrname){
                echo "go die";
            } else {
                echo "fuck";
            }
        }
    }
}



?>
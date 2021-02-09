<?php
require_once ("database.php");

class reserved{


    public function reserv($connection, $usrname){

        $sql = "SELECT username FROM users";
        $result = $connection->query($sql);
        $usersFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($usersFromDatabase as $users) {
            ($users);
            $username = $users['username'];
            if($username == $usrname){

            }
        }
    }
}



?>
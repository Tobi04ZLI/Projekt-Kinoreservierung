<?php
$servername = "mariadb";
$user = "root";
$password = "happyplace";
$dbname = "happyplace";

$connection = new mysqli($servername, $user, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>
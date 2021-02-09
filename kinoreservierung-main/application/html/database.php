<?php
$servername = "mariadatabase";
$user = "root";
$password = "kino";
$dbname = "kinoreser";

$connection = new mysqli($servername, $user, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>
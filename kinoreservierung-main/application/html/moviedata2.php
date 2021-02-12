<?php

require_once ("database.php");
require_once ("movie2.class.php");

$reserve = new reserv($username, $email, $seat);
$create = $reserve->reserved($connection);

?>
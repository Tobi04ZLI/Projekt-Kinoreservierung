<?php

require_once "database.php";
require_once 'registerbesucher.php';

$registirierung = new register($username, $email);
$create = $registirierung->create($connection);

?>
<?php

require_once 'registerbesucher.php';
require_once 'database.php';

$registirierung = new register($username, $email);
$create = $registirierung->create($connection);

?>
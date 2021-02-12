<?php

//require_once 'registerbesucher.php';
require_once 'loginadmin.php';
require_once 'database.php';
require_once 'adminverwaltung.php';

//$registirierung = new register($username, $email);
//$create = $registirierung->create($connection);

$login = new Login($adminname, $adminpassword);
$create2 = $login->login($connection);

$verwaltung = new Verwaltung($moviename, $duration);
$create3 = $verwaltung->create($connection);

?>
<?php

require_once "database.php";
require_once 'registerbesucher.php';

$registirierung = register::fetchAll($connection);

?>
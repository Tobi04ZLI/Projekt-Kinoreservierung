<?php
require_once 'registerbesucher.php';
require_once 'database.php';



if (isset($_REQUEST['name']) && isset($_REQUEST['latitude']) && isset($_REQUEST['longitude']) && isset($_REQUEST['prename']) && isset($_REQUEST['lastname'])) {
  $newMarker = new Marker($_REQUEST['name'], $_REQUEST['latitude'], $_REQUEST['longitude'], $_REQUEST['prename'], $_REQUEST['lastname']);
  $newMarker->create($conn);
}

header('Location: index.php');
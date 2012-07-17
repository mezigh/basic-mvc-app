<?php

require_once 'load.php';
require_once 'models/model.php';
require_once 'controllers/controller.php';

$controller = new Controller();

if(!isset($_GET['p'])) { $_GET['p'] = "index"; }
if(!file_exists(APPL."/views/". $_GET['p'].".php")) { $_GET['p'] = "404"; }


$controller->buildView( $_GET['p'] , array("key" => $_GET['p']) );

?>
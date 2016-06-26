<?php
//index.php?c=user&a=index
//Controller
$c = $_GET['c'];
//action
$a = $_GET['a'];
require './controller/controller.class.php';
require './controller/'.$c.'Controller.class.php';
$classname = $c.'Controller';
$controller = new $classname;

$controller->$a();

<?php
include_once "controller/Controller.php";

$controller = new Controller();
$controller->addTree(1,"Spar", 27.50);

$controller->addDecoration(1,"blauw",2.50);
$controller->addDecoration(2,"geel",2.50);
$controller->addDecoration(3,"groen",2.50);
$controller->addDecoration(4,"oranje",2.50);

$controller->showBill();



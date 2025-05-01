<?php

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
echo "\n";
echo $cars[0];
echo "\n";
$cars[1] = "Ford";
echo "\n";
var_dump($cars);
echo "\n";
foreach ($cars as $x) {
    echo "\n";
    echo $x;
  }
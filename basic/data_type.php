<?php

$string = "this is a string";
echo $string . "<br>";

$int = 123;
echo "this is an integer: " . $int . "<br>";

$float = 1.21;
echo "this is a float: " . $float . "<br>";

$bool = TRUE;
echo "this is a boolean: " . $bool . "<br>";

$arr = ["string", 123, 1.21];
echo "this is an array: " . print_r($arr, true) . "<br>";

$nul = null;
echo "this is basically nothing: " . $nul . "<br>";

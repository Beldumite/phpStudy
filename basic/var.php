<?php  
//In PHP, a variable starts with the $ sign, followed by the name of the variable:
$y = "john";
$x = "doe";
echo $y . $x;
/* 
Rules for PHP variables:
A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables) */

$num = 342;
$float = 3.23;
$text = "im not happy with my life";
$bool = true;
$nul = null;
$arr = [];

var_dump($nul);
var_dump($float);
var_dump($num);
var_dump($text);
var_dump($bool);
var_dump($arr);


// data type
// php doesnt need you to specify the data type just type $ and input the value
// then php will assign that as int, string etc
<?php 

$a = 13;
$b = 13;


if ( $a > $b ) {
    echo "a = $a <br>";
    echo "b = $b <br>";
    echo "a is bigger than b";
} else if ( $a < $b ) {
    echo "b is bigger than a <br>";
} else {
    echo "a and b has the same value <br>";
}
    






$x = 5;
$y = 4;

if ($x > $y) {
    echo "$x is bigger than $y";
} else {
    echo "$x is smaller than $y";
}
// yeah its the same thing as other if statement

//if oneliner

$a = 5;

if ($a < 10) $b = "Hello";

echo $b;
    
// if-else oneliner

$c = 2;

$d = $c > 10 ? "hello" : "hi";

echo $d;
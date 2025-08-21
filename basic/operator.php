<?php 

/* the operator here is almost the same as in js:
 1. arithmatic
 2. assignment
 3. comparison
 4. increment
 5. logical
 6. conditional and etc
*/

//arithmatic ( + , - , * , / , etc)
echo 1 % 1 . "\n"; //modulus
echo 2 ** 4 . "\n"; // exponent atau pangkat

//assignment ( += , -= , *= , /= , etc)

//comporison
$a = 5;
$b = "5";
var_dump($a == $b); // true
var_dump($a === $b); // false
var_dump($a != $b); // false
var_dump($a !== $b); // true
var_dump($a > $b); // false
var_dump($a < $b); // false
var_dump($a >= $b); // true
var_dump($a <= $b); // true
var_dump($a <=> $b); // 0 (spaceship operator)

//logical
$trueVar = true;
$falseVar = false;

var_dump($trueVar && $falseVar); // false
var_dump($trueVar || $falseVar); // true
var_dump(!$trueVar);             // false
var_dump($trueVar and $falseVar); // false
var_dump($trueVar or $falseVar);  // true
var_dump($trueVar xor $falseVar); // true

 
//conditional
$user = "Ainur";
$status = (empty($user)) ? "anonymous" : "logged in";
echo $status . "\n"; // logged in

// Null coalescing operator
$username = $_GET['user'] ?? 'guest';
echo "Username: " . $username . "\n";

?>


<?php 

//constant just like in js a const var cannot be changed
//to define that we need to use the define() func
// or const keyword
// theres no need to use the $ sign

const max_hp = 100;
echo max_hp . "\n";
// const cannot be define inside an if or func

define("hello", "Hello World!");
echo hello;
// define can be created inside a block scope

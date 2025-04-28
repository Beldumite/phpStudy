<?php
/* in php a var has 3 scope:
1. global
2. local
3. static

global means like in js "var" (declared outside a func)
local means like "let or const" (declared inside sa func)
static for a var in local func that we dont want to delete after use (declared with "static + $ + var name")
*/

$name = "john"; //this is global
echo $name;
function test() {
    $you = "reader"; //this is local
    static $num = 123; //this is static

    echo " has killed $you with $num damage";
}

test();
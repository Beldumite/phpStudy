<?php

echo "-----WHILE LOOPS-----";
echo "\n";
$num = 1;

while ($num < 10) {
    echo "Hello$num ";
    $num++;
}

echo "\n";

$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}
// continue makes you skip over the current iteration
echo "\n";

echo "-----FOR LOOPS-----";

// for (experssion1; expression2; expression3) {
//     //code
// }

for ($i = 0; $i < 10; $i++) {
    echo "$i \n";
}
echo "\n";

echo "-----FOREACH-----";

$arr = [1, 2, 3, 4, 5, 6, 7, 8];

foreach ($arr as $num) {
    echo "loop $num \n";

}
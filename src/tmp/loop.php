<?php

$i = 0;

while (true) {
  if ($i <= 50) {
    echo $i . PHP_EOL;
    $i += 10;
  } else {
    break;
  }
}
// while (true) {
//   if ($i < 3) {
//     echo ++$i . PHP_EOL;
//   } else {
//     break;
//   }
// }

<?php

$x = $_GET['x'];
$num1 = 1;
$num2 = 1;

while (true) {
  if ($num1 > $x) {
    echo 'Задуманное число НЕ входит в числовой ряд';
    break;
  } elseif ($num1 == $x) {
    echo "Задуманное число входит в числовой ряд";
    break;
  } else {
    $num3 = $num1;
    $num1 += $num2;
    $num2 = $num3;
  }
}

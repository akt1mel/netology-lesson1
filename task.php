<?php

$x = $_GET['x'];
$num1 = 1;
$num2 = 1;

while ($x > $num1) {
    $num3 = $num1;
		$num1 += $num2;
		$num2 = $num3;
}

if ($num1 > $x) {
		echo 'Задуманное число НЕ входит в числовой ряд';
	} elseif ($x == $num1) {
    echo 'Задуманное число входит в числовой ряд';
  }

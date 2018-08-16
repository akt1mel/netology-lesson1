<?php

$name = 'Константин';
$age = '24';
$email = 'kostyavas.94@gmail.com';
$city = 'Москва';
$about = 'Слушатель курса Нетологии';

?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About</title>
  </head>
  <body>
    <p>Имя: <?= echo $name; ?></p>
    <p>Возраст: <?= echo $age; ?></p>
    <p>E-mail: <?= echo $email; ?></p>
    <p>Город: <?= echo $city; ?></p>
    <p>Обо мне: <?= echo $about; ?></p>
  </body>
</html>

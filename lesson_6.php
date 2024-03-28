<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP: урок 6</title>
</head>

<body>
   <h1>Типы данных. Целые и Вещественные числа</h1>
   <?php
   // octo
   $res = 07 + 01;
   var_dump($res);

   $res = 07 + 11;
   var_dump($res);

   $res = 17 + 01;
   var_dump($res);

   $res = 07 + 21;
   var_dump($res);

   // HEX
   $res = 0x01 + 0x03;
   var_dump($res);

   $res = 0x010 + 0x03;
   var_dump($res);

   $res = 0x010 + 0x010;
   var_dump($res);

   $res = 0x0A + 0x01;
   var_dump($res);

   // EXP
   $var = 1.23456e-3;
   var_dump($var);

   $var = 1.23456e3;
   var_dump($var);

   ?>
</body>

</html>
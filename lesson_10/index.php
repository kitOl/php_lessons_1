<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP: урок 10</title>
</head>

<body>
  <h1>Округление чисел</h1>

  <?php

  $val = 28.789;
  $res = round($val, 2);
  var_dump($res);

  $val = 28.789;
  $res = round($val, 0);
  var_dump($res);

  $val = 28.189;
  $res = round($val, 0);
  var_dump($res);

  $val = 1.5;
  $res = round($val, 0, PHP_ROUND_HALF_ODD);
  var_dump($res);

  $val = 1.5;
  $res = round($val, 0, PHP_ROUND_HALF_EVEN);
  var_dump($res);

  $val = -1.5;
  $res = round($val, 0, PHP_ROUND_HALF_UP);
  var_dump($res);

  $val = -1.5;
  $res = round($val, 0, PHP_ROUND_HALF_DOWN);
  var_dump($res);

  $val = -1.25;
  $res = ceil($val);
  var_dump($res);

  $val = 1.15;
  $res = ceil($val);
  var_dump($res);

  $val = -1.35;
  $res = floor($val);
  var_dump($res);

  $val = 1.15;
  $res = floor($val);
  var_dump($res);


  ?>
</body>

</html>
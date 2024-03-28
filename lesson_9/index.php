<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: урок 9</title>
</head>

<body>
    <h1>Приведение типов</h1>

    <?php
    // неявное приведение типов
    $var = '45.5';
    $res = $var - 12;
    var_dump($res);

    $var = '45.5number';
    $res = $var - 12;
    var_dump($res);

    $var = 1;
    $res = $var && true;
    var_dump($res);

    $var = 1;
    $res = $var && 0;
    var_dump($res);

    $var = 0b01;
    $res = $var | 0;
    var_dump($res);

    $var = 'abc';
    if ($var) {
        echo "\$var: '$var' is TRUE\n";
    } else {
        echo "\$var: '$var' is FALSE\n";
    }

    $var = '1';
    if ($var) {
        echo "\$var: '$var' is TRUE\n"; // TRUE
    } else {
        echo "\$var: '$var' is FALSE\n";
    }

    $var = '0';
    if ($var) {
        echo "\$var: '$var' is TRUE\n";
    } else {
        echo "\$var: '$var' is FALSE\n"; // FALSE
    }

    $var = 1.0;
    if ($var) {
        echo "\$var: '$var' is TRUE\n"; // TRUE 
    } else {
        echo "\$var: '$var' is FALSE\n";
    }

    $var = '';
    if ($var) {
        echo "\$var: '$var' is TRUE\n";
    } else {
        echo "\$var: '$var' is FALSE\n"; // FALSE
    }

    $var = [null];
    if ($var) {
        echo "\$var: '$var' is TRUE\n"; // TRUE
    } else {
        echo "\$var: '$var' is FALSE\n";
    }

    $var = [];
    if ($var) {
        echo "\$var: '$var' is TRUE\n";
    } else {
        echo "\$var: '$var' is FALSE\n"; // FALSE
    }

    $var = [0];
    if ($var) {
        echo "\$var: '$var' is TRUE\n"; // TRUE
    } else {
        echo "\$var: '$var' is FALSE\n";
    }

    // ЯВНОЕ ПРИВЕДЕНИЕ ТИПОВ

    $var = 23.3;
    $res = (int)$var;
    var_dump($res);

    $var = 20;
    $res = (float)$var;
    var_dump($res);

    $var = 23.3;
    $res = (string)$var;
    var_dump($res);

    $var = 23.3;
    $res = (array)$var;
    var_dump($res);

    $var = 23.3;
    $res = (object)$var;
    var_dump($res);

    $var = 23.3;
    $res = (bool)$var;
    var_dump($res); // TRUE

    ?>

</body>

</html>
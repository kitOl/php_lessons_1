<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: урок 8</title>
</head>

<body>
    <h1>Базовые функции</h1>
    <?php
    //if - else
    $predicate = true;
    if ($predicate) {
        echo "TRUE";
    } else {
        echo "FALSE";
    }

    echo "\n";

    // isset
    $user = 'Ivan';
    $res = isset($user);
    var_dump($res);

    $user = 0;
    $res = isset($user);
    var_dump($res);

    $user = null;
    $res = isset($user);
    var_dump($res);

    $res = isset($userNew);
    var_dump($res);

    // empty (for string)
    $str = "";
    $res = empty($str);
    var_dump($res);

    $str = "Hello!";
    $res = empty($str);
    var_dump($res);

    $res = empty($strNew);
    var_dump($res);

    // gettype()
    $arrayTest = [1, 2, 4, 'er'];
    $res = gettype($arrayTest);
    var_dump($res);

    $var = true;
    $res = gettype($var);
    var_dump($res);

    $var = 1.27;
    $res = gettype($var);
    var_dump($res);

    $var = 7;
    $res = gettype($var);
    var_dump($res);

    $var = 'seven';
    $res = gettype($var);
    var_dump($res);

    $var = 1.27e-3;
    $res = gettype($var);
    var_dump($res);

    $var = 00;
    $res = gettype($var);
    var_dump($res);

    $var = 0x0;
    $res = gettype($var);
    var_dump($res);

    //predicate functions

    $var = true;
    $res = is_bool($var);
    var_dump($res);

    $var = 1;
    $res = is_int($var);
    var_dump($res);

    $var = 1.27;
    $res = is_float($var);
    var_dump($res);

    $var = 'true';
    $res = is_string($var);
    var_dump($res);

    $var = __DIR__;
    $res = is_dir($var);
    var_dump($res);


    ?>
</body>

</html>
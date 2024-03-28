<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: урок 14</title>
</head>

<body>
    <h1>Константы</h1>
    <?php

    $res = define('NUMBER_ONE', 33);
    echo NUMBER_ONE, "\n";
    var_dump($res); // true

    $res = @define('NUMBER_ONE', 33);
    var_dump($res); // false

    $res = defined('NUMBER_ONE');
    var_dump($res); // true

    // ============
    $numRand = mt_rand(1, 10);
    $name = "VALUE($numRand)";
    define($name, $numRand);
    echo $name, constant($name);

    // ============
    echo "Имя файла " . __FILE__ . "\n";
    echo "Строка " . __LINE__ . "\n";

    ?>

</body>

</html>
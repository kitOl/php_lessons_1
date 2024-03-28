<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: урок 12</title>
</head>

<body>
    <h1>ООП: классы - наследование</h1>

    <?php
    require 'Point.php';

    $val = Point::$z;
    var_dump($val);

    // значения по ссылке
    // - переменная
    $first = 5;
    $second = &$first;
    var_dump($second);
    $second = 3;
    var_dump($first);

    // - объекты
    $objectOne = new Point;
    $objectOne->x = 3;
    $var = $objectOne;
    $val = $var->x;
    var_dump($val); // 3
    $var->x = 5;
    $val = $objectOne->x;
    var_dump($val);





    ?>

</body>

</html>
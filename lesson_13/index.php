<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: урок 13</title>
</head>

<body>
    <h1>ООП: классы - клонирование объектов</h1>

    <?php
    require 'Point.php';

    // - объекты
    $objectOne = new Point;
    $objectOne->x = 3;
    $val = $objectOne->x;
    var_dump($val); // 3

    $objectTwo = clone $objectOne;
    $val = $objectTwo->x;
    var_dump($val); // 3
    $objectTwo->x = 5;
    $val = $objectOne->x;
    var_dump($val); // 3

    // Расчитаем расстояние между двумя точками на плоскости

    $pointOne = new Point;
    $pointOne->x = 10;
    $pointOne->y = 34;

    $pointTwo = new Point;
    $pointTwo->x = 3;
    $pointTwo->y = 10;

    $x1 = $pointOne->x;
    $y1 = $pointOne->y;
    echo "Точка 1: ($x1, $y1)\n";

    $x2 = $pointTwo->x;
    $y2 = $pointTwo->y;
    echo "Точка 2: ($x2, $y2)\n";

    $distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    echo "Расстояние между точками: $distance\n";

    $distance = hypot($x2 - $x1, $y2 - $y1);
    echo "Расстояние между точками: $distance\n";






    ?>

</body>

</html>
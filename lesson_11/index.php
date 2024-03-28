<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: урок 11</title>
</head>

<body>
    <h1>ООП: классы</h1>

    <?php
    require 'Point.php';

    $pointOne = new Point;
    $val = $pointOne->x;
    var_dump($val);

    $pointOne->x = 33;
    $val = $pointOne->x;
    var_dump($val);

    $pointTwo = new Point;
    $pointTwo->x = 77;
    $val = $pointTwo->x;
    var_dump($val);

    unset($pointTwo);
    $val = @$pointTwo->x;
    var_dump($val);


    ?>

</body>

</html>
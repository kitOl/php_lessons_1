<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: урок 15</title>
</head>

<body>
    <h1>Пути к файлу: абсолютный и относительный</h1>
    <?php
    class ConstClass
    {
        const NAME = "Ivan";
    }

    $res = defined('ConstClass::NAME');
    var_dump($res);

    $res = __DIR__;
    echo $res, "\n"; // Абсолютный путь

    $res = dirname(__FILE__);
    echo $res, "\n"; // Абсолютный путь к файлу

    $res = dirname(__FILE__);
    echo $res, "\n"; // Абсолютный путь к родителю

    $res = dirname(__FILE__, 2);
    echo $res, "\n"; // Абсолютный путь к родителю родителя

    $res = pathinfo(__FILE__);
    var_dump($res);


    ?>

</body>

</html>
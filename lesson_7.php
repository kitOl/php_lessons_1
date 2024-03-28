<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: урок 7</title>
</head>

<body>
    <h1>Типы данных. Булевы числа. Строки.</h1>
    <?php
    // BOOLEAN
    $A = true;
    $B = true;
    $C = false;
    $D = false;

    // $res = $A and $B;
    $res = $A && $B;
    var_dump($res);

    // $res = $A and $B;
    $res = $A && $C;
    var_dump($res);

    // $res = $A and $B;
    $res = $D && $C;
    var_dump($res);

    // $res = $A OR $B;
    $res = $A || $C;
    var_dump($res);

    // $res = $A OR $B;
    $res = $D || $C;
    var_dump($res);

    $res = $A xor $B;
    var_dump($res);

    $res = $A xor $C;
    var_dump($res);

    $res = !$B;
    var_dump($res);

    $res = !$A;
    var_dump($res);

    //String
    $var = 7;
    echo "Number: $var\n";
    echo 'Number: ' . $var . "\n";
    echo "Number: \"$var\"\n";
    echo "Number: \$var\n";
    echo 'Number: $var' . "\n";
    echo "Let's take the number: $var\n";
    echo 'Let\'s take the number: ' . $var . "\n";

    $out = "";
    $out .= 'Number: ';
    $out .= $var;
    $out .= "\n";
    echo $out;

    ?>

</body>

</html>
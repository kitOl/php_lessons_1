<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: урок 18</title>
</head>

<body>
    <h1>Побитовые операции</h1>

    <?php
    $binOne = decbin(7);
    echo $binOne, "\n";
    $binOne = sprintf('%08d', $binOne);
    $binTwo = sprintf('%08d', decbin(12));

    $res = $binOne xor $binTwo;
    // $res = decbin(7) xor decbin(12);
    // echo "\$binOne = $binOne, \$binTwo = $binTwo\n";
    echo "$binOne XOR $binTwo = $res | " . bindec($res) . " (dec)\n";

    $res = $binOne & $binTwo;
    echo "$binOne and $binTwo = $res\n";

    $res = $binOne | $binTwo;
    echo "$binOne or $binTwo = $res\n";

    $res = $binOne << 1;
    $res = sprintf('%08d', decbin($res));
    echo "$binOne << 1 = $res\n";

    $res = $binOne << 2;
    $res = sprintf('%08d', decbin($res));
    echo "$binOne << 2 = $res\n";

    $res = $binTwo >> 1;
    $res = sprintf('%08d', decbin($res));
    echo "$binTwo >> 1 = $res\n";

    $res = $binTwo >> 2;
    $res = sprintf('%08d', decbin($res));
    echo "$binTwo >> 2 = $res\n";

    $res = ~7;
    // $res = sprintf('%08d', decbin($res));
    $res = decbin($res);
    echo "not $binOne = $res\n";

    // echo decbin(7) ^ 7;

    ?>


</body>

</html>
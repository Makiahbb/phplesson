<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <?php
    //Vid1
    echo 5**8,5/2,9*3;
    ?>
    <?php
    //Vid2
    $x = 100;
    $x /= 20;
    echo $x;
    ?>
    <?php
    //Vid3
    $y = "10";
    $x = 10;

    if ($x <> $y)   {
        echo "True!";
    }
    
    else  {
        echo "False!";
    }
    ?>
    <?php
    //Vid4
    $x = 10;
    echo $x--;
    echo $x;
    ?>
    <?php
    //Vid5
    $y = 20;
    $x = 20;

    if ($x === $y or 1 == 1)   {
        echo "True";
    }
    ?>
</body>
</html>
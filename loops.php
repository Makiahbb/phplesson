<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Loop

    //While Loop
    $x = 1;
    while ($x <= 5) {
        echo "hello<br>";
        $x++;
    }
    //Do while Loop
    $x = 10;
    do {
        echo "hello<br>";
        $x++;
    }
    while ($x <= 5)
    //For Loop
    for ($x = 1; $x <= 10; $x++) {
        echo "hello<br>";
    }
    //Foreach Loop
    $array = array("Daniel", "Jane", "Jacob");

    foreach ($array as $loopdata) {
        echo "My name is ".$loopdata."<br>";
    }
    ?>
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php
  include "includes/header.php";
  ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
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
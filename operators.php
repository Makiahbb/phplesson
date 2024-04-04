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
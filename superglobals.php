<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
  include "includes/header.php";
  ?>
    <?php
    setcookie("name", "Kiah", time() + 172800);
    $_SESSION['name'] = "12";
    ?>
</body>
</html>
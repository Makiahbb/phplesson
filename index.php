<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPP</title>
</head>
<body>
    
<form method="GET">
        <input type="text" name="person">
        <button>Submit</button>
</form>
    
    <?php
       $name = $_GET['person'];
        echo $name." has stabbed Carl 37 times in the chest.";
    ?>
</body>
</html>
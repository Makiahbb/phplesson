<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  </head>
  <body>
  //login code  
  <main>
      <div class="wrapper-main">
        <section class="section-default">
          <?php
          if(condition) {

          }
          ?>
          <p class="login-status">You are logged out!</p>
          <p class="login-status">You are logged in!</p>
      </div>
    </main> 
  <?php
  include "includes/header.php";
  ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
      
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
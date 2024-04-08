


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navigate to:</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="calculator.php">calculator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calendar.php">calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="comments.php">comments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="conditionals.php">conditionals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="datatypes.php">datatypes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="functions.php">functions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">index</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="loops.php">loops</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="operators.php">operators</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="includes\header.php">Head</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="superglobals.php">SupGlobals</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</head>
<body>
  <?php
  $_SESSION['username'] = "Augh9365!";
echo $_SESSION['username'];

  if (!isset($_SESSION['username'])) {
    echo "You are not logged in!";
  }
    else {
      echo "You are logged in!";
    }
  ?>
</body>
</html>
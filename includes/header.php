


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <nav class="navbar navbar-expand-lg">
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
          <a class="nav-link" href="contact.php">contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">login</a>
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
<?php
 $dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
?>

<?php
  $sql = "SELECT * FROM users;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($results);

  if ($resultsCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['user_uid'] . "<br>";
    }
  }
  ?>
</body>
</html>

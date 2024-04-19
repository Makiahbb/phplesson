<?php
if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';

$username=$_POST['uid'];
$email=$_POST['mail'];
$password=$_POST['uid'];
$passwordRepeat=$_POST['pwd-repeat'];

if (empty($username) || empty($username) || empty($username) || empty($username)) {
    header("Location:../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
    exit();
}
else if  (!filter_var($email, filter_validate_email) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location:../signup.php?error=invalidmail&uid=");
    exit();
}
else if (!filter_var($email, filter_validate_email)) {
    header("Location:../signup.php?error=invalidmail&uid=".$username);
    exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location:../signup.php?error=invaliduid&mail=".$email);
    exit();
}
}
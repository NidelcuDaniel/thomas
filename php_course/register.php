<?php

if(!isset($_POST['email'])) error("Email is required.");

if(!isset($_POST['psw'])) error("Password is required.");

if(!isset($_POST['psw-repeat'])) error("Password Repeat is required.");

if($_POST['psw'] != $_POST['psw-repeat']) error("Password must match.");

$users = getUsers();

if(in_array($_POST['email'], $users)) error("Email already exists.");

$line = $_POST['email'] . ":" . $_POST['psw'] . PHP_EOL;
file_put_contents("users.txt", $line, FILE_APPEND);

echo "Welcome.";

function getUsers() {
  $lines = file("users.txt");
  $users = [];
  foreach($lines as $line) {
    if(trim($line) == '') continue;
    list($email, $psw) = explode(":", trim($line), 2);
    $users[] = $email;
  }
  return $users;
}

function error($message) {
  echo $message;
  exit;
}






?>


<?php

$server = 'localhost';
$username = 'jbravo';
$password = 'alejoy';
$database = 'users';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>

<?php
 
require 'init.php';

$name = $_POST['name'];

$query_search = "SELECT * FROM users WHERE name LIKE '%".$name."%' OR '%".$email."%'";

$sql_query = mysqli_query($conn, $query_search);

?>
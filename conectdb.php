<?php

session_start();

if(isset($_POST['send'])){
    $search = $_POST['send2'];
    $con = mysqli_connect("localhost", "jbravo", "alejoy", "users");
    $query_search = mysqli_query($con, "SELECT * FROM $database WHERE name = '$search'");
    while ($data = mysqli_fetch_array($query_search)) {
      $datas = $data; 
    }
  }

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
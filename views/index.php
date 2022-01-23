<?php

  require 'init.php';
  require 'conectdb.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to you WebApp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
  <div class="container">
    <?php require 'header.php' ?>
    <?php include 'search.php' ?>

    <?php if(!empty($user)): ?>
    <div>
      <h1> Welcome</h1> <?= $user['email']; ?>


      <br>You are Successfully Logged In

    </div>
    <div>
      <form action="" method="post" class="navbar-form navbar" role="search">
        <div class="form-group">
          <input type="text" name="send2" class="form-control" placeholder="Search users">
        </div>
        <button type="submit" name="send" class="btn btn-default">Search users</button>

        <?php print($datas['name'])?>
        <?php print($datas['email'])?>

      </form>
    </div>
    <div>
      <a href="views/logout.php">
        Logout
      </a>
    </div>
    
    <?php else: ?>
      <h1>Please Login or SignUp</h1>

      <a href="views/login.php">Login</a> or
      <a href="views/signup.php">SignUp</a>
    <?php endif; ?>
    </div>
  </body>
</html>
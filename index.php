<?php
  session_start();

  if(!isset($_SESSION['username'])){
    header("location:main_login.php");
  }

    if(isset($_SESSION['username'])){
    header("location:main.html");
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" media="screen">
    <link href="css/login.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <div class="form-signin">
        <div class="alert alert-success">You have been <strong>successfully logged in</strong>.</div>
        <a href="logout.php" class="btn btn-default btn-lg btn-block">Logout</a>
      </div>
    </div>
  </body>
</html>

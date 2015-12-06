<?php
  session_start();

  if(isset($_SESSION['username'])){
    header("location:main.html");
  }
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" media="screen">
    <link href="css/login.css" rel="stylesheet" media="screen">
  </head>

  <body>
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-md-4 col-md-offset-4">
                  <div class="account-wall">
                      <img class="profile-img" src="img/marquee.png" alt="">
                      <form class="form-signin" name="form1" method="post" action="checklogin.php">
                      <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password" required>
                      <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

                      <div id="message"></div>

                      </form>
                  </div>
              </div>
          </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- The AJAX login script -->
    <script src="js/login.js"></script>

  </body>
</html>

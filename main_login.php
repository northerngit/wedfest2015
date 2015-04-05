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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" media="screen">
    <link href="css/login.css" rel="stylesheet" media="screen">
  </head>

  <body>
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-md-4 col-md-offset-4">
                  <div class="account-wall">
                      <img class="profile-img" src="http://www.bootbundle.com/bundle/flaticons/5.png" alt="">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- The AJAX login script -->
    <script src="js/login.js"></script>

  </body>
</html>

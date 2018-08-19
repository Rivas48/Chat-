<?php
  session_start();
  if ($_SESSION['userlogin']) {
    $_SESSION['userlogin'] = "";
  }
  $_SESSION['userlogin'] = "";
  $appname = 'Chatbox';
  require_once 'redirect.php';
  require_once 'login.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin for Chatbox</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="alterlogin.php" method="post">
      <h1>Chatbox</h1>
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
       <h1 class="h3 mb-3 font-weight-normal"><?php $signinerror ?></h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" name='userlogin' id="inputEmail" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password"  name='passlogin' id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <input class="btn btn-lg btn-primary btn-block" type="submit" name='onsubmitlogin' value='Sign In'>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
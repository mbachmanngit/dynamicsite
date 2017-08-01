<?php
  session_start();

  if (isset($_SESSION['u_id'])) {
    header("Location: index.php");
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta viewport content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="login.style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="functions.js"></script>
    <title>(test) Dynamic Site - MB</title>
  </head>
  <body>

    <div class="login-flex">
      <h1 class="login-h1">M.Bachmann</h1>
      <hr>
      <div class="login-content">
        <form class="login-form" action="login.in.php" method="post">
          <input type="text" name="benutzername" value="" placeholder="Benutzername">
          <input type="password" name="passwort" value="" placeholder="Passwort">
          <button class="raw-cta" type="submit" name="login-button">Login</button>
        </form>
      </div>
    </div>

  </body>
</html>

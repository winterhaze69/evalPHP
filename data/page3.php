<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>evalPHP</title>
  </head>
  <body>
    <?php
    session_start();
    session_destroy();
    header("location: ./home.php");

    ?>
    <p>You are disconnected</p>
    <a href="index.php">Back_to_login</a>
  </body>
</html>

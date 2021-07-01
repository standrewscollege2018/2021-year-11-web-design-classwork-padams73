<?php
  // Check if number has been guessed
  if(!isset($_GET['guess'])) {
    header("Location: numberguess.php");
  }
  $guess = $_GET['guess'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo $guess;
     ?>
  </body>
</html>

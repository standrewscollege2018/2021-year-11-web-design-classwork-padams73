<?php
  // Check if number has been guessed
  if(!isset($_GET['number'])) {
    header("Location: numberguess-task3.php");
  }
  $number = $_GET['number'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if ($number == 7) {
      echo "<h1>That's right! 7 was correct</h1>";
    } else {
      echo "<h1>Sorry, that's wrong. $number wasn't right</h1>";
      echo "<a href='numberguess-task3.php'>Try again</a>";
    }
     ?>
  </body>
</html>

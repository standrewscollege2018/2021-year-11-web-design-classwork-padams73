<?php
  if(isset($_POST['endvalue'])) {
    $end = $_POST['endvalue'];
  } else {
    $end = 1;
  }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="modifiedfizzbuzz.php" method="post">
      <input type="text" name="endvalue" value="">
      <button type="submit" name="button">Start</button>
    </form>
    <?php
      $number = 1;
      do {
        if ($number % 15 == 0) {
          echo "<h1>Fizzbuzz</h1>";
        }
        elseif ($number % 3 == 0) {
          echo "<h2>Fizz</h2>";
        }
        elseif ($number % 5 == 0) {
          echo "<h2>Buzz</h2>";
        } else {
          echo "<p>$number</p>";
        }
        $number += 1;
      } while ($number <=$end);

     ?>
  </body>
</html>

<?php

  $name = $_GET['name'];
  $age = $_GET['age'];

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php echo "<h1>Hello $name, you are $age years old</h1>"; ?>
  </body>
</html>

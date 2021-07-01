<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Guess my name</h1>
    <form class="" action="check.php" method="post">
      <input type="text" name="guess" placeholder="Guess the name">
      <button type="submit" name="button">Go ahead and guess</button>
      <?php
      // Check and see if $_GET['error'] has been set.
      // If so, display a red error message
      if (isset($_GET['error'])) {
        echo "<p>Please enter a name</p>";
      }
       ?>

    </form>
  </body>
</html>

<?php
// Check if the user has guessed or if it is blank
if (!isset($_POST['guess']) or $_POST['guess']=="") {
  // Redirect to guess
  header("Location: guess.php?error=blank");
}

$guess = $_POST['guess'];


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // Check if they were right
      if($guess == "Rumpelstiltskin") {
        echo "<h1>That's right! Well done</h1>";
      } else {
        echo "<h1>Nope, $guess is not my name. Try again.</h1>";
      }
     ?>
  </body>
</html>

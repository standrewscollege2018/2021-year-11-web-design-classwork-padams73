<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php echo "<h1>Hello world</h1>";

    // Variables must start with a dollar sign and have NO SPACES
    $name = "Bob the Builder";
    $age = 19;
    echo "<p>$name is $age years old</p>";

    // If statements use brackets for the condition
    // We use curly braces around the code to be executed
    if ($age >= 20) {
      echo "<h2>You are old!</h2>";
    } elseif ($age >=15) {
      echo "<h1>You are in the prime of your life</h1>";
    } else {
      echo "You have some growing up to do";
    }
    // Do while loops repeat code as long as a condition is true
    $counter = 1;
    do {
      echo "<p>$counter</p>";
      $counter += 1;
  


    } while ($counter <= 10)

    ?>
  </body>
</html>

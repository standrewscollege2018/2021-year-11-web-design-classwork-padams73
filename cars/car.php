<?php
  // Any page that is going to get information from the database needs
  // to be connected to it. We include the connection code from the file
  //  dbconnect.php. The connection info is stored in a variable called $dbconnect
  include("dbconnect.php");

  $carID = $_GET['carID'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cars example</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <?php
      // To run a query on the database, we follow three steps:
      // Step 1: set up the query in a variable. Notice the naming convention, it ends in _sql
      $car_sql = "SELECT car.*, make.name FROM car JOIN make ON car.makeID=make.makeID WHERE car.carID=$carID";
      // Step 2: We run the query using the mysqli_query() function
      // Notice the name of the variable, it ends with _qry
      $car_qry = mysqli_query($dbconnect, $car_sql);
      // Step 3: organise into array we can use more easily
      $car_aa = mysqli_fetch_assoc($car_qry);
      // Set up variables
      $numberplate = $car_aa['numberplate'];
      $colour = $car_aa['colour'];
      $driver = $car_aa['driver'];
      $make = $car_aa['name'];
      $model = $car_aa['model'];
    ?>
    <div class="cardetails">
      <h1><?php echo $numberplate; ?></h1>
      <p>Colour: <?php echo $colour; ?></p>
      <p>Driver: <?php echo $driver; ?></p>
      <p>Make and model: <?php echo "$make $model"; ?></p>
    </div>

  </body>
</html>

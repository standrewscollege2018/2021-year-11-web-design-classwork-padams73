<?php
  include("dbconnect.php");
  $search = $_POST['search'];

 ?>
<!-- Get the value entered in the search field and store it in a variable
  Make sure you check if it is set first -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search results</title>
  </head>
  <body>
    <!-- Search the car table to see if there are any cars that have a
          numberplate, make or model that matches the search.
          If there are, display them in a do while loop.
          If not, display "No results found". -->

    <?php
    // To run a query on the database, we follow three steps:
    // Step 1: set up the query in a variable. Notice the naming convention, it ends in _sql
    $car_sql = "SELECT car.*, make.name FROM car JOIN make ON car.makeID=make.makeID WHERE car.numberplate LIKE '%$search%'";
    // Step 2: We run the query using the mysqli_query() function
    // Notice the name of the variable, it ends with _qry
    $car_qry = mysqli_query($dbconnect, $car_sql);
    // Step 3: organise into array we can use more easily
    $car_aa = mysqli_fetch_assoc($car_qry);

    do {
      $carID = $car_aa['carID'];
      $numberplate = $car_aa['numberplate'];
      ?>
      <div class="card">
        <h1><?php echo "<a href='car.php?carID=$carID'>$numberplate</a>"; ?></h1>
      </div>
      <?php
    } while ($car_aa = mysqli_fetch_assoc($car_qry));

     ?>


  </body>
</html>

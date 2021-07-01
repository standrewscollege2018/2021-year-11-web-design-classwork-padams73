<?php
  include("dbconnect.php");

  // Get the value entered in the search field and store it in a variable
  // Make sure you check if it is set first
  if(!isset($_POST['search']) or $_POST['search']=="") {
    header("Location: index.php");
  } else {
    $search = $_POST['search'];
  }
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search results</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <h1>Search results</h1>
    <div class="content-container">


    <!-- Search the car table to see if there are any cars that have a
          numberplate, make or model that matches the search.
          If there are, display them in a do while loop.
          If not, display "No results found". -->
    <?php
      $search_sql = "SELECT car.*, make.make FROM car JOIN make ON car.makeID=make.makeID WHERE car.numberplate LIKE '%$search%' OR car.model LIKE '%$search%' OR make.make LIKE '%$search%'";
      $search_qry = mysqli_query($dbconnect, $search_sql);
      if(mysqli_num_rows($search_qry)==0) {
        echo "<h1>No results found</h1>";
      } else {
        $search_aa = mysqli_fetch_assoc($search_qry);

        do {
          $numberplate = $search_aa['numberplate'];
          $driver = $search_aa['driver'];
          $colour = $search_aa['colour'];
          $make = $search_aa['make'];
          $model = $search_aa['model'];
          ?>
          <div class="card">
            <h1><?php echo $numberplate; ?></h1>
            <p>Colour: <?php echo $colour; ?></p>
            <p>Driver: <?php echo $driver; ?></p>
            <p>Make and model: <?php echo "$make $model"; ?></p>
          </div>
          <?php
        } while ($search_aa = mysqli_fetch_assoc($search_qry));
      }



     ?>

</div>
  </body>
</html>

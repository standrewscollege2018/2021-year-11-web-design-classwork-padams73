<?php
  include("dbconnect.php");
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
      if(!isset($_GET['carID']) or $_GET['carID']=="") {
        header("Location: cars.php");
      } else {
        $carID = $_GET['carID'];
      $car_sql = "SELECT car.*, make.make FROM car JOIN make ON car.makeID=make.makeID WHERE car.carID=$carID";
      $car_qry = mysqli_query($dbconnect, $car_sql);
      if(mysqli_num_rows($car_qry)==0) {
        ?>
        <div class="cardetails">
          <h1>No car found</h1>

        </div>
        <?php
      } else {
      $car_aa = mysqli_fetch_assoc($car_qry);

      $numberplate = $car_aa['numberplate'];
      $colour = $car_aa['colour'];
      $driver = $car_aa['driver'];
      $make = $car_aa['make'];
      $model = $car_aa['model'];
    ?>
    <div class="cardetails">
      <h1><?php echo $numberplate; ?></h1>
      <p>Colour: <?php echo $colour; ?></p>
      <p>Driver: <?php echo $driver; ?></p>
      <p>Make and model: <?php echo "$make $model"; ?></p>
    </div>
  <?php
}
} ?>
  </body>
</html>

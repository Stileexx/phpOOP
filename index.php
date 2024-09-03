<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a style="font-size: 8px;" href="Classes/Car.php">Car</a>

  <?php

  require_once 'Classes/Car.php';

  $car01 = new Car("BMW", "Yellow");
  echo "<br>";
  //$car01->setBrand("Volvo");
  //$car01->setColor("green");
  $car01->setColor("White"); //using not allowed value
  echo $car01->getBrand();
  echo "<br>";
  echo $car01->getColor();

  ?>

</body>

</html>
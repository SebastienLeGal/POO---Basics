<?php

require_once 'Bicycle.php';
require_once 'Car.php';


$bike = new Bicycle("blue", 25, 1, 2);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo "<br>";
echo "<br>";
echo "<br>";

$car = new Car("pink", 50, 1, 4);


echo $car->forward();
echo $car->start();
echo $car->brake();
?>

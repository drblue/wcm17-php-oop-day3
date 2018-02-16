<?php

require "includes/Car.php";

$cars = [];

$car = new Car("Nissan", "Qashqai", 2008, "LJU460", 161000);
$car->drive(570);
$car->drive(48);
$car->drive(-48000);
array_push($cars, $car);

$car = new Car("Porsche", "911", 1997, "SPEEED", 25000);
array_push($cars, $car);

$car = new Car("Mini", "Cooper");
array_push($cars, $car);

foreach ($cars as $car) {
	echo "<p>" . $car->getInfo() . "</p>";
}

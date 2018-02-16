<?php

require "includes/Car.php";

$cars = [];

$car = new Car("Nissan", "Qashqai", 2008, "LJU460");
array_push($cars, $car);

$car = new Car("Porsche", "911", 1997, "SPEEED");
array_push($cars, $car);

foreach ($cars as $car) {
	echo "<p>" . $car->getInfo() . "</p>";
}

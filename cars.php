<?php

require "includes/Car.php";

$cars = [];

$car = new Car("Nissan", "Qashqai");
array_push($cars, $car);

$car = new Car("Porsche", "911", 1997, "SPEEED");
array_push($cars, $car);

$car = new Car("Mini", "Cooper", 2005);
array_push($cars, $car);

foreach ($cars as $car) {
	// echo "<p>" . $car->getInfo() . "</p>";
	echo "<p>{$car->getInfo()}</p>";
}

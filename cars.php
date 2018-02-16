<?php

require "includes/Car.php";

$cars = [];

$car = new Car("Nissan", "Qashqai", "Ljusgrå");
array_push($cars, $car);

$car = new Car("Porsche", "911", "Röd", 1997, "SPEEED");
array_push($cars, $car);

$car = new Car("Mini", "Cooper", "Lila", 2005, "MINI2");
array_push($cars, $car);

foreach ($cars as $car) {
	// echo "<p>" . $car->getInfo() . "</p>";
	echo "<p>";
	echo $car->getInfo();
	if ($car->isRed()) {
		echo "Bilen är röd.";
	} else {
		echo "Bilen är INTE röd.";
	}
	if ($car->hasRegistrationNumber()) {
		echo "Se mer hos Transportstyrelsen: ";
		echo "<a href='http://transportstyrelsen.se/info/{$car->getRegistrationNumber()}'>Länk</a>";
	} else {
		echo "Bilen är INTE registrerad.";
	}
	echo "</p>";
}

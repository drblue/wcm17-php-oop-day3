<?php

class Car {
	protected $manufacturer;
	protected $model;
	protected $year;
	protected $registrationNumber;
	protected $mileage;

	public function __construct($manufacturer, $model, $year = null, $registrationNumber = "N/A", $mileage = 0) {
		$this->manufacturer = $manufacturer;
		$this->model = $model;

		if ($year === null) {
			// hämta nuvarande år
			$presentYear = date("Y");
			$this->year = $presentYear;
		} else {
			$this->year = $year;
		}
		
		$this->registrationNumber = $registrationNumber;
		$this->mileage = $mileage;
	}

	public function getMileage() {
		$milageInMil = $this->mileage / 10;
		return number_format($milageInMil, 1);

		// samma sak som ovan, bara på en rad
		return number_format($this->milage / 10, 1);
	}
	public function drive($kilometers) {
		if ($kilometers > 0) {
			$this->mileage = $this->mileage + $kilometers;
		}
	}

	public function getManufacturer() {
		return $this->manufacturer;
	}
	public function setManufacturer($manufacturer) {
		$this->manufacturer = $manufacturer;
	}

	public function getModel() {
		return $this->model;
	}
	public function setModel($model) {
		$this->model = $model;
	}

	public function getYear() {
		return $this->year;
	}
	public function setYear($year) {
		$this->year = $year;
	}

	public function getRegistrationNumber() {
		return $this->registrationNumber;
	}
	public function setRegistrationNumber($registrationNumber) {
		$this->registrationNumber = $registrationNumber;
	}

	public function getInfo() {
		// detta är tre olika sätt att göra samma sak på

		// return "Jag är en " . $this->manufacturer . " " . $this->model . " av årsmodell " . $this->year . " med registreringsnummer " . $this->registrationNumber . ".";

		return "Jag är en {$this->manufacturer} {$this->model} av årsmodell {$this->year} med registreringsnummer {$this->registrationNumber}. Min mätarställning är {$this->getMileage()} mil.";

		// return sprintf("Jag är en %s %s av årsmodell %s med registreringsnummer %s.", $this->manufacturer, $this->model, $this->year, $this->registrationNumber);
	}
}

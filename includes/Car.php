<?php

class Car {
	protected $manufacturer;
	protected $model;
	protected $year;
	protected $registrationNumber;

	public function __construct($manufacturer, $model, $year = 2018, $registrationNumber = "N/A") {
		$this->manufacturer = $manufacturer;
		$this->model = $model;
		$this->year = $year;
		$this->registrationNumber = $registrationNumber;
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
		return "Jag är en " . $this->manufacturer . " " . $this->model . " av årsmodell " . $this->year . " med registreringsnummer " . $this->registrationNumber . ".";

		return "Jag är en {$this->manufacturer} {$this->model} av årsmodell {$this->year} med registreringsnummer {$this->registrationNumber}.";

		return sprintf("Jag är en %s %s av årsmodell %s med registreringsnummer %s.", $this->manufacturer, $this->model, $this->year, $this->registrationNumber);
	}
}

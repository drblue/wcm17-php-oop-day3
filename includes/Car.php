<?php

class Car {
	protected $manufacturer;
	protected $model;
	protected $year;
	protected $registrationNumber;
	protected $color;

	public function __construct($manufacturer, $model, $color, $year = 2018, $registrationNumber = "N/A") {
		$this->manufacturer = $manufacturer;
		$this->model = $model;
		$this->color = $color;
		$this->year = $year;
		$this->registrationNumber = $registrationNumber;
	}

	public function isRed() {
		if ($this->color === "Röd") {
			return true;
		} else {
			return false;
		}

		return $this->color === "Röd";
	}

	public function hasRegistrationNumber() {
		if ($this->registrationNumber !== "N/A") {
			return true;
		} else {
			return false;
		}

		return $this->registrationNumber !== "N/A";
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

		return "Jag är en " . $this->manufacturer . " " . $this->model . " av årsmodell " . $this->year . " med registreringsnummer " . $this->registrationNumber . ".";

		return "Jag är en {$this->manufacturer} {$this->model} av årsmodell {$this->year} med registreringsnummer {$this->registrationNumber}.";

		return sprintf("Jag är en %s %s av årsmodell %s med registreringsnummer %s.", $this->manufacturer, $this->model, $this->year, $this->registrationNumber);
	}
}

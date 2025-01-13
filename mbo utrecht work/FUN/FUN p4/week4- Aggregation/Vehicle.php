<?php
class Vehicle {
    private $vehicleID;
    private $model;
    private $buildYear;

    public function __construct($vehicleID, $model, $buildYear) {
        $this->vehicleID = $vehicleID;
        $this->model = $model;
        $this->buildYear = $buildYear;
    }

    public function getID() {
        return $this->vehicleID;
    }

    public function getDetails() {
        return "ID: $this->vehicleID, Model: $this->model, Build Year: $this->buildYear";
    }
}
?>

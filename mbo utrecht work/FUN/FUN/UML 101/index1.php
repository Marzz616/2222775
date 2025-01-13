<?php

class Car {
    private $licencePlate;
    private $numberOfDoors;
    private $color;
    private $brand;

    public function __construct($licencePlate, $numberOfDoors, $color, $brand) {
        $this->licencePlate = $licencePlate;
        $this->numberOfDoors = $numberOfDoors;
        $this->color = $color;
        $this->brand = $brand;
    }

    public function SetColor($color) {
        $this->color = $color;
    }

    public function ToString() {
        return "License Plate: " . $this->licencePlate . ", Number of Doors: " . $this->numberOfDoors . ", Color: " . $this->color . ", Brand: " . $this->brand;
    }
}

?>
